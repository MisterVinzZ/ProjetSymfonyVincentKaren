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
    public function new(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Définir la date de création
            $produit->setCreatedAt(new \DateTimeImmutable());

            // Gestion du téléchargement de fichier si nécessaire
            // Exemple : récupérer et enregistrer l'image associée au produit

            $this->entityManager->persist($produit);
            $this->entityManager->flush();

            // Redirection vers la liste des produits après création réussie
            return $this->redirectToRoute('produits_index');
        }

        // Afficher le formulaire de création de produit
        return $this->render('produit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
