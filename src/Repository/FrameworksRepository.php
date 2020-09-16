<?php

namespace App\Repository;

use App\Entity\Frameworks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Frameworks|null find($id, $lockMode = null, $lockVersion = null)
 * @method Frameworks|null findOneBy(array $criteria, array $orderBy = null)
 * @method Frameworks[]    findAll()
 * @method Frameworks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrameworksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Frameworks::class);
    }

    // /**
    //  * @return Frameworks[] Returns an array of Frameworks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Frameworks
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
