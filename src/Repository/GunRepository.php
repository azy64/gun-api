<?php

namespace App\Repository;

use App\Entity\Gun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Gun>
 *
 * @method Gun|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gun|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gun[]    findAll()
 * @method Gun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GunRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gun::class);
    }

//    /**
//     * @return Gun[] Returns an array of Gun objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Gun
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
