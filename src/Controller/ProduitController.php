<?php

namespace App\Controller;

use App\Entity\Panier; // Importer l'entité Panier
use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SearchProductFormType;
use App\Repository\ProduitRepository;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProduitController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ProduitRepository $produitRepository;

    public function __construct(EntityManagerInterface $entityManager, ProduitRepository $produitRepository, FormFactoryInterface $formFactory)
    {
        $this->entityManager = $entityManager;
        $this->produitRepository = $produitRepository;
    }

    public function index(): Response
    {
        $produitMiseEnAvant = $this->produitRepository->findRandomProduct();

        $produits = $this->produitRepository->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
            'produitMiseEnAvant' => $produitMiseEnAvant,
        ]);
    }

    public function produitsParCategorie(string $categorie, ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findByCategorie($categorie);

        return $this->render('produit/afficher_par_categorie.html.twig', [
            'produits' => $produits,
            'categorie' => $categorie,
        ]);
    }

   
    public function new(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur s\'est produite lors du téléchargement de l\'image.');
                    return $this->redirectToRoute('produit_new');
                }

                $produit->setImage($newFilename);
            }

            $this->entityManager->persist($produit);
            $this->entityManager->flush();

            return $this->redirectToRoute('produits_index');
        }

        return $this->render('produit/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }


public function edit(Request $request, Produit $produit): Response
{
    $form = $this->createForm(ProduitType::class, $produit);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer le fichier téléchargé
        $imageFile = $form->get('image')->getData();

        // Vérifier si un nouveau fichier a été téléchargé
        if ($imageFile instanceof UploadedFile) {
            // Déplacer le fichier vers le répertoire de stockage
            $newFilename = md5(uniqid()).'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );

            // Mettre à jour le nom du fichier dans l'entité Produit
            $produit->setImage($newFilename);
        }

        // Enregistrer les modifications dans la base de données
        $this->entityManager->flush();

        $this->addFlash('success', 'Produit modifié avec succès.');
        return $this->redirectToRoute('produits_index');
    }

    return $this->render('produit/edit.html.twig', [
        'form' => $form->createView(),
        'produit' => $produit,
    ]);
}

    /**
     * @Route("/produits/delete/{id}", name="produit_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Produit $produit): Response
    {
        $entityManager = $this->entityManager;

        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();

            $this->addFlash('success', 'Produit supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('produits_index');
    }

    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    public function afficherParCategorie($categorie, ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findByCategorie($categorie);

        return $this->render('produit/afficher_par_categorie.html.twig', [
            'produits' => $produits,
            'categorie' => $categorie,
        ]);
    }

   
}
