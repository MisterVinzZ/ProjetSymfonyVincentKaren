<?php

/* namespace App\Service;

use App\Repository\PanierRepository;
use Symfony\Component\Security\Core\Security;

class PanierService
{
    private $panierRepository;
    private $security;

    public function __construct(PanierRepository $panierRepository, Security $security)
    {
        $this->panierRepository = $panierRepository;
        $this->security = $security;
    }

    public function getNumberOfProductsInPanier(): int
    {
        // Récupérer l'ID de l'utilisateur connecté
        $userId = $this->security->getUser()->getId();

        // Récupérer le nombre de produits dans le panier pour cet utilisateur
        $numberOfProducts = $this->panierRepository->count(['userId' => $userId]);

        return $numberOfProducts;
    }
} */
