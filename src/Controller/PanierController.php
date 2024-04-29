<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Panier;
use App\Entity\Produit;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier_index")
     */
/*     public function index(): Response
    {
        // Récupérer le panier de l'utilisateur
        $panier = $this->getDoctrine()->getRepository(Panier::class)->findOneBy(['userId' => $this->getUser()->getId()]);

        // Afficher le contenu du panier
        return $this->render('panier/index.html.twig', [
            'panier' => $panier,
        ]);
    }
 */
    /**
     * @Route("/panier/ajouter/{produitId}", name="panier_ajouter")
     */
/*     public function ajouterProduitAuPanier(Request $request, $produitId): Response
    {
        // Récupérer le produit à partir de l'ID
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($produitId);

        // Vérifier si le produit existe
        if (!$produit) {
            throw $this->createNotFoundException('Le produit n\'existe pas.');
        }

        // Créer un nouvel objet Panier et l'associer à l'utilisateur
        $panier = new Panier();
        $panier->setUserId($this->getUser()->getId());
        $panier->setProduit($produit);
        $panier->setQuantite(1); // Vous pouvez ajuster la quantité selon vos besoins

        // Enregistrer le panier dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($panier);
        $entityManager->flush();

        // Rediriger vers la page du panier
        return $this->redirectToRoute('panier_index');
    } */
}
