<?php

namespace App\Repository;

use App\Entity\Invoince;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Invoince|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invoince|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invoince[]    findAll()
 * @method Invoince[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoinceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invoince::class);
    }


    // /**
    //  * @return Invoince[] Returns an array of Invoince objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Invoince
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
