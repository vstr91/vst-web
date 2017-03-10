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
    
    public function listarTodosVinculados($limite = null){
        $qb = $this->createQueryBuilder('p')
                ->select('p')
                //->select('p')
                ->distinct()
                ->innerJoin("VostreLocalBundle:Bairro", "b", "WITH", "b.id = p.bairro")
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
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
                ->andWhere("p.status IN (0,2)")
                ->andWhere("p.ultimaAlteracao > :ultimaAlteracao")
                ->andWhere("p.ultimaAlteracao <= :now")
                ->setParameter('ultimaAlteracao', $dataUltimoAcesso)
                ->setParameter('now', new \DateTime())
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
    
    public function listaProximasSaidasPorParada($parada) {
        
        $hora = new \DateTime();
        
        $dia = '';
        
        switch ($hora->format('l')){
            case 'Sunday':
                $dia = 'domingo';
                break;
            case 'Monday':
                $dia = 'segunda';
                break;
            case 'Tuesday':
                $dia = 'terca';
                break;
            case 'Wednesday':
                $dia = 'quarta';
                break;
            case 'Thursday':
                $dia = 'quinta';
                break;
            case 'Friday':
                $dia = 'sexta';
                break;
            case 'Saturday':
                $dia = 'sabado';
                break;
        }
        
        $hora = $hora->format('H:i');
        
        $sql = "SELECT i.id, (
                SELECT h.id 
                FROM circular_horario h INNER JOIN
                          circular_horario_itinerario hi ON hi.id_horario = h.id
                WHERE h.nome >= :hora
                AND   hi.id_itinerario = i.id
                AND  hi.".$dia." = -1
                AND  hi.status = 0
                ORDER BY h.nome
                LIMIT 1
        ) AS 'hora'
        FROM circular_horario_itinerario hi INNER JOIN
                        circular_horario h ON h.id = hi.id_horario INNER JOIN
                  circular_itinerario i ON i.id = hi.id_itinerario INNER JOIN
                  circular_parada_itinerario pit ON pit.id_itinerario = i.id INNER JOIN
                  circular_parada p ON p.id = pit.id_parada
        WHERE p.id = :id_parada
        AND  h.nome >= :hora
        AND  pit.ordem = 1
        AND  hi.".$dia." = -1
        AND  hi.status = 0
        GROUP BY i.id
        ORDER BY hora";
        
        $params = array(
            'id_parada' => $parada->getId(),
            'hora' => $hora
        );
        
        return $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();
        
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
                ->andWhere("p.status = 0")
                //->select('p')
//                ->distinct()
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ;
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    
    public function carregar($uf, $local, $bairro, $slug){
        $qb = $this->createQueryBuilder('p')
                ->select('p')
                //->select('p')
                ->distinct()
                ->innerJoin("VostreLocalBundle:Bairro", "b", "WITH", "b.id = p.bairro")
                ->innerJoin("VostreLocalBundle:Local", "l", "WITH", "l.id = b.local")
                ->innerJoin("VostreLocalBundle:Estado", "e", "WITH", "e.id = l.estado")
                ->andWhere('p.slug = :slug')
                ->andWhere('e.sigla = :uf')
                ->andWhere('l.slug = :local')
                ->andWhere('b.slug = :bairro')
                ->setParameter(':slug', $slug)
                ->setParameter(':uf', $uf)
                ->setParameter(':local', $local)
                ->setParameter(':bairro', $bairro)
                ->addOrderBy('p.referencia');
        
        return $qb->getQuery()->getOneOrNullResult();
        
    }
    
    public function listarTodosVinculadosPorBairro($bairro){
        
        $subqueryParadaItinerario = $this->createQueryBuilder('l3')
                ->select('IDENTITY(i.partida)')
                ->from("CircularSiteBundle:Itinerario", 'i')
                ->where('i.status = 0')
                ->getDQL();
        
        $qb = $this->createQueryBuilder('p')
                //->select('b.id, b.nome, b.status, l.id AS local')
                ->select('p')
                ->distinct()
                ->innerJoin("VostreLocalBundle:Bairro", "b", "WITH", "b.id = p.bairro")
                ->innerJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                //->where($this->createQueryBuilder('e2')->expr()->in('b.id', $subqueryItinerarioPartida))
                ->andWhere("b.id = :bairro")
                ->setParameter('bairro', $bairro)
                ->addOrderBy('p.referencia');
        
        return $qb->getQuery()->getResult();
        
    }
    
}
