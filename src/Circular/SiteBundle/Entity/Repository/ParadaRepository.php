<?php

namespace Circular\SiteBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ParadaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParadaRepository extends EntityRepository
{
    
    public function listarTodos($limite = null){
        $qb = $this->createQueryBuilder('p')
                ->select('p.id', 'p.latitude', 'p.longitude', 'p.referencia', 'b.id AS id_bairro', 
                        'b.nome AS bairro', 'p.taxaDeEmbarque')
                //->select('p')
                ->distinct()
                ->leftJoin("VostreLocalBundle:Bairro", "b", "WITH", "b.id = p.bairro")
                ->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('p.referencia');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarTodosREST($limite = null, $dataUltimoAcesso){
        
//        $subquery = $this->createQueryBuilder('l1')
//                ->select('IDENTITY(pi2.parada)')
//                ->from("CircularSiteBundle:ParadaItinerario", 'pi2')
//                ->where('pi2.status = 0')
//                ->getDQL();
        
        $qb = $this->createQueryBuilder('p')
                ->select('p.id', 'p.latitude', 'p.longitude', 'p.referencia', 'p.status', 
                        'b.id AS bairro', 'p.taxaDeEmbarque')
                //->select('p')
                ->distinct()
                ->leftJoin("VostreLocalBundle:Bairro", "b", "WITH", "b.id = p.bairro")
                ->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
//                ->where($this->createQueryBuilder('e2')->expr()->in('p.id', $subquery))
                ->andWhere("p.ultimaAlteracao > :ultimaAlteracao")
                ->setParameter('ultimaAlteracao', $dataUltimoAcesso)
                ->addOrderBy('p.id');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listaItinerariosPorParada($parada) {
        
        $qb = $this->createQueryBuilder('p')
                ->select('bp.id AS id_bairro_partida', 
                        'bp.nome AS bairro_partida', 'bd.id AS id_bairro_destino', 
                        'bd.nome AS bairro_destino', 'i.id AS id_itinerario', 'p2.referencia', 
                        'p2.latitude AS latitude_partida', 'p2.longitude AS longitude_partida',
                        'p.latitude AS latitude_parada', 'p.longitude AS longitude_parada')
                ->distinct()
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pit", "WITH", "pit.parada = p.id")
                ->innerJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = pit.itinerario")
                ->innerJoin("VostreLocalBundle:Bairro", "bp", "WITH", "bp.id = i.partida")
                ->innerJoin("VostreLocalBundle:Bairro", "bd", "WITH", "bd.id = i.destino")
                ->leftJoin("CircularSiteBundle:HorarioItinerario", "hi", "WITH", "hi.itinerario = i.id")
                ->innerJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pit2", "WITH", "pit2.itinerario = i.id")
                ->innerJoin("CircularSiteBundle:Parada", "p2", "WITH", "p2.id = pit2.parada")
                ->andWhere('p.id = :id_parada')
                ->andWhere('pit2.ordem = 1')
                ->setParameter('id_parada', $parada->getId())
                ->addOrderBy('bp.nome')
                ;
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listaParadasPorItinerario($itinerario) {
        $qb = $this->createQueryBuilder('p')
                ->select('p')
                ->distinct()
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pit", "WITH", "pit.parada = p.id")
                ->innerJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = pit.itinerario")
                ->andWhere('i.id = :id_itinerario')
                ->setParameter('id_itinerario', $itinerario)
                ->addOrderBy('pit.ordem')
                ;
        
        return $qb->getQuery()->getResult();
    }
    
    public function listarRegistrosVinculados($parada){
        $qb = $this->createQueryBuilder('p')
                ->select('COUNT(pi.id) AS total')
                //->select('p')
                ->distinct()
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->andWhere('p.id = :id_parada')
                ->setParameter('id_parada', $parada->getId())
                ;
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    
    public function listarRegistrosAtivosVinculados(){
        $qb = $this->createQueryBuilder('p')
                ->select('COUNT(DISTINCT p.id) AS total')
                //->select('p')
//                ->distinct()
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ;
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    
}
