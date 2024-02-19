<?php

namespace App\Repository;

use App\Entity\Nappe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Nappe>
 *
 * @method Nappe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nappe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nappe[]    findAll()
 * @method Nappe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NappeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nappe::class);
    }

//    /**
//     * @return Nappe[] Returns an array of Nappe objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Nappe
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
