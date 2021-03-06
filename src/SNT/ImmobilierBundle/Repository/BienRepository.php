<?php

namespace SNT\ImmobilierBundle\Repository;

/**
 * BienRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BienRepository extends \Doctrine\ORM\EntityRepository
{
    public function findBiens($idtype = 0, $idlocalite = 0, $prix = 0){

        $dql = "SELECT b, i FROM SNT\ImmobilierBundle\Entity\Bien b left Join b.images i JOIN b.typeBien type JOIN b.localite loc WHERE b.etat = 1 ";
        
        if($idtype != 0){
            $dql .= " AND type.id =:idtype ";
        }
        if($idlocalite != 0){
            $dql .= " AND loc.id =:idloc ";
        }
        if($prix != 0){
            $dql .= " AND b.prixLocation BETWEEN :prixMin AND :prixMax ";
        }
        //echo $dql;

        $em = $this->getEntityManager();

        $query = $em->createQuery($dql);

        if($idtype != 0){
            $query->setParameter('idtype', $idtype);
        }
        if($idlocalite != 0){
            $query->setParameter('idloc', $idlocalite);
        }
        if($prix != 0){
            $query->setParameter('prixMin', $prix - 20000)
                  ->setParameter('prixMax', $prix + 20000);
        }
        //echo $query->getSQL();
        return $query->getResult();
    }  
}
