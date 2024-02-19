<?php

namespace App\Repository;

use App\Entity\CentreRecyclage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CentreRecyclage>
 *
 * @method CentreRecyclage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreRecyclage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreRecyclage[]    findAll()
 * @method CentreRecyclage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreRecyclageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CentreRecyclage::class);
    }

//    /**
//     * @return CentreRecyclage[] Returns an array of CentreRecyclage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CentreRecyclage
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
