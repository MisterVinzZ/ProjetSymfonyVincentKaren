<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 *
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

//    /**
//     * @return Produit[] Returns an array of Produit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Produit
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
/**
     * Récupère les produits par catégorie
     *
     * @param string $categorie
     * @return Produit[]
     */
    public function findByCategorie(string $categorie): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.categorie = :categorie')
            ->setParameter('categorie', $categorie)
            ->getQuery()
            ->getResult();
    }
    public function findByProductName($productName)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.nom LIKE :productName')
            ->setParameter('productName', '%' . $productName . '%')
            ->getQuery()
            ->getResult();
    }
    public function findRandomProduct(): ?Produit
    {
        $query = $this->createQueryBuilder('p')
            ->setMaxResults(1) // Récupérer un seul résultat
            ->getQuery();

        return $query->getOneOrNullResult();
    }   
}
