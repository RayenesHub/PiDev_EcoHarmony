<?php

namespace App\Repository;

use App\Entity\Ordure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ordure>
 *
 * @method Ordure|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ordure|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ordure[]    findAll()
 * @method Ordure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ordure::class);
    }

//    /**
//     * @return Ordure[] Returns an array of Ordure objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Ordure
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
