<?php

namespace App\Repository;

use App\Entity\TypeGun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeGun>
 *
 * @method TypeGun|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeGun|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeGun[]    findAll()
 * @method TypeGun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeGunRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeGun::class);
    }

//    /**
//     * @return TypeGun[] Returns an array of TypeGun objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeGun
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
