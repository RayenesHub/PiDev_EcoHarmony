<?php

namespace App\Repository;

use App\Entity\Dechet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dechet>
 *
 * @method Dechet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dechet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dechet[]    findAll()
 * @method Dechet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DechetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dechet::class);
    }

//    /**
//     * @return Dechet[] Returns an array of Dechet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dechet
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
