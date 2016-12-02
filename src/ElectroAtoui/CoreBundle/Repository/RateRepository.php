<?php

namespace ElectroAtoui\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;


/**
 * RateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RateRepository extends EntityRepository
{

    public function findByUser($rate, $user)
    {
        return $this->createQueryBuilder('r')
            ->innerJoin('r.votes', 'v')
            ->where('v.user= :user')
            ->andwhere('r = :rate')
            ->setParameter('user', $user)
            ->setParameter('rate', $rate)
            ->setMaxResults(1)
            ->getQuery()->getResult();
    }
}
