<?php

namespace Vostre\SiteBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends EntityRepository
{
    
    public function listarTodos($soAtivos = true){
        
        if($soAtivos){
            $qb = $this->createQueryBuilder('m')
                ->select('m')
                ->andWhere('m.situacao = 0')
                //->distinct()
                ->addOrderBy('m.ordem', 'ASC');
        } else{
            $qb = $this->createQueryBuilder('m')
                ->select('m')
                //->distinct()
                ->addOrderBy('m.ordem', 'ASC');
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
}
