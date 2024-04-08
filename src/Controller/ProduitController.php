<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function index(): Response
    {
        $produits = $this->entityManager->getRepository(Produit::class)->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }
    /**
     * @Route("/produits/new", name="produit_new", methods={"GET","POST"})
     */
    /**
     * @Route("/produits/new", name="produit_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion du téléchargement de fichier
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                // Générer un nom de fichier unique
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                // Déplacer le fichier dans le répertoire d'images
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (\Exception $e) {
                    // Gérer les erreurs de déplacement du fichier
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('produit_new');
                }

                // Mettre à jour le champ image de l'entité Produit
                $produit->setImage($newFilename);
            }

            // Enregistrer l'entité Produit dans la base de données
            $this->entityManager->persist($produit);
            $this->entityManager->flush();

            // Rediriger vers la liste des produits après création réussie
            return $this->redirectToRoute('produits_index');
        }

        // Afficher le formulaire de création de produit
        return $this->render('produit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}