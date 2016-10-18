<?php

namespace Circular\SiteBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * HorarioItinerarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class HorarioItinerarioRepository extends EntityRepository
{
    
    public function listarTodosREST($limite = null, $dataUltimoAcesso){
        $qb = $this->createQueryBuilder('hi')
                ->select('hi.id, h.id AS horario, i.id AS itinerario, hi.domingo, hi.segunda, hi.terca, '
                        . 'hi.quarta, hi.quinta, hi.sexta, hi.sabado, hi.status, hi.obs')
                //->select('p')
                ->distinct()
                ->leftJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->leftJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = hi.itinerario")
                ->where("hi.ultimaAlteracao > :ultimaAlteracao")
                ->andWhere("hi.ultimaAlteracao <= :now")
                ->setParameter('ultimaAlteracao', $dataUltimoAcesso)
                ->setParameter('now', new \DateTime())
                //->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('hi.id');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
//    public function invalidaTodosHorariosItinerario($idItinerario){
//        
//        $qb = $this->createQueryBuilder('hi')
//                ->update("CircularSiteBundle:HorarioItinerario", 'hi')
//                ->set('hi.status', 2)
//                ->set('hi.ultimaAlteracao', ':now')
//                ->where('hi.itinerario = :idItinerario')
//                ->setParameter('now', new \DateTime())
//                ->setParameter('idItinerario', $idItinerario);
//
//        $qb->getQuery()->getResult();
//        
//        return true;
//        
//    }
    
    public function invalidaTodosHorariosItinerario($idItinerario){
        
        $qb = $this->createQueryBuilder('hi')
                ->update("CircularSiteBundle:HorarioItinerario", 'hi')
                ->set('hi.status', 2)
                ->set('hi.obs', "''")
                ->set('hi.ultimaAlteracao', ':now')
                ->where('hi.itinerario = :idItinerario')
                ->andWhere('hi.status != 2')
                ->setParameter('now', new \DateTime())
                ->setParameter('idItinerario', $idItinerario);

        $qb->getQuery()->getResult();
        
        return true;
        
    }
    
    public function listarProximoPorItinerario($partida, $destino){
        
        $data = new \DateTime();
        
        $diaSemana = $data->format('N');
        
        switch ($diaSemana){
            case 0:
                $dia = "domingo";
                break;
            case 1:
                $dia = "segunda";
                break;
            case 2:
                $dia = "terca";
                break;
            case 3:
                $dia = "quarta";
                break;
            case 4:
                $dia = "quinta";
                break;
            case 5:
                $dia = "sexta";
                break;
            case 6:
                $dia = "sabado";
                break;
        }
        
        $hora = new \DateTime();
        
        $varDia = "hi.".$dia;
        
        $qb = $this->createQueryBuilder('hi')
//                ->select('hi.id, h.id AS horario, i.id AS itinerario, hi.domingo, hi.segunda, hi.terca, '
//                        . 'hi.quarta, hi.quinta, hi.sexta, hi.sabado, hi.status')
                ->select('hi')
                //->select('p')
                ->distinct()
                ->leftJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->leftJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = hi.itinerario")
                ->where("i.partida = :partida")
                ->andWhere("i.destino = :destino")
                ->andWhere("h.nome > :hora")
                ->andWhere("$varDia = -1")
                ->setParameter('partida', $partida)
                ->setParameter('destino', $destino)
                ->setParameter('hora', $hora->format('H:i'))
                ->setMaxResults(1)
                //->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('h.id');
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarPrimeiroPorItinerario($partida, $destino){
        
        $data = new \DateTime();
        
        $diaSemana = $data->format('N');
        
        switch ($diaSemana){
            case 0:
                $dia = "domingo";
                break;
            case 1:
                $dia = "segunda";
                break;
            case 2:
                $dia = "terca";
                break;
            case 3:
                $dia = "quarta";
                break;
            case 4:
                $dia = "quinta";
                break;
            case 5:
                $dia = "sexta";
                break;
            case 6:
                $dia = "sabado";
                break;
        }
        
        $varDia = "hi.".$dia;
        
        $qb = $this->createQueryBuilder('hi')
//                ->select('hi.id, h.id AS horario, i.id AS itinerario, hi.domingo, hi.segunda, hi.terca, '
//                        . 'hi.quarta, hi.quinta, hi.sexta, hi.sabado, hi.status')
                ->select('hi')
                //->select('p')
                ->distinct()
                ->leftJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->leftJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = hi.itinerario")
                ->where("i.partida = :partida")
                ->andWhere("i.destino = :destino")
                ->andWhere("h.nome >= :hora")
                ->andWhere("$varDia = -1")
                ->setParameter('partida', $partida)
                ->setParameter('destino', $destino)
                ->setParameter('hora', '00:00')
                ->setMaxResults(1)
                //->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('h.id');
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarHorariosPorItinerario($itinerario){
        
        $qb = $this->createQueryBuilder('hi')
//                ->select('hi.id, h.id AS horario, i.id AS itinerario, hi.domingo, hi.segunda, hi.terca, '
//                        . 'hi.quarta, hi.quinta, hi.sexta, hi.sabado, hi.status')
                ->select('hi')
                //->select('p')
                ->distinct()
                ->leftJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->leftJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = hi.itinerario")
                ->andWhere("i.id = :itinerario")
                ->setParameter('itinerario', $itinerario)
                //->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('hi.id, h.id');
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarAlternativasItinerario($partida, $destino, $itinerario){
        
        $qb = $this->createQueryBuilder('hi')
//                ->select('hi.id, h.id AS horario, i.id AS itinerario, hi.domingo, hi.segunda, hi.terca, '
//                        . 'hi.quarta, hi.quinta, hi.sexta, hi.sabado, hi.status')
                ->select('hi')
                //->select('p')
                ->distinct()
                ->leftJoin("CircularSiteBundle:Horario", "h", "WITH", "h.id = hi.horario")
                ->leftJoin("CircularSiteBundle:Itinerario", "i", "WITH", "i.id = hi.itinerario")
                ->where("i.partida = :partida")
                ->andWhere("i.destino = :destino")
                ->andWhere("i.id != :itinerario")
                ->setParameter('partida', $partida)
                ->setParameter('destino', $destino)
                ->setParameter('itinerario', $itinerario)
                //->leftJoin("CircularSiteBundle:ParadaItinerario", "pi", "WITH", "pi.parada = p.id")
                ->addOrderBy('hi.id, h.id');
        
        return $qb->getQuery()->getResult();
        
    }

    
}
