<?php
// src/Controller/SearchController.php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function search(Request $request, ProduitRepository $produitRepository): Response
    {
        $searchTerm = $request->query->get('productName');

        if ($searchTerm) {
            $produits = $produitRepository->findByProductName($searchTerm);

            return $this->render('produit/search_results.html.twig', [
                'produits' => $produits,
                'productName' => $searchTerm,
            ]);
        }

        // Si aucun terme de recherche n'est spécifié, vous pouvez rediriger ou afficher un message d'erreur
        return $this->redirectToRoute('accueil'); // Rediriger vers la page d'accueil par exemple
    }
}
