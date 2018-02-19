<?php

namespace SNT\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction(Request $request)
    {
        $repositoryLocalite = $this->getDoctrine()->getManager()
        ->getRepository('SNTImmobilierBundle:Localite');
        $localites = $repositoryLocalite->findAll();

        $repositoryType = $this->getDoctrine()->getManager()
        ->getRepository('SNTImmobilierBundle:TypeBien');
        $types = $repositoryType->findAll();

        $selectType = 0;
        $selectLocalite = 0;
        $prix = 0;
        $repositoryBien = $this->getDoctrine()->getManager()
            ->getRepository('SNTImmobilierBundle:Bien');
            $message = "";
        if ($request->isMethod('POST')) {
            $selectLocalite = $request->get('localiteselect');
            $selectType = $request->get('typeselect');
            $prix = $request->get('prix');

            $repositoryBien = $this->getDoctrine()->getManager()
            ->getRepository('SNTImmobilierBundle:Bien');

            $biens = $repositoryBien->findBiens($selectType, $selectLocalite, $prix);
            //var_dump($biens[0]->getImages());
            //var_dump($biens);

            $paginator  = $this->get('knp_paginator');
            $pagination = $paginator->paginate(
                $biens, 
                $request->query->getInt('page', 1)/*page number*/,
                2/*limit per page*/
            );
            $message = count($biens) == 0?"Pas bien":"";
        }
        else if($request->isMethod('GET')){
            if($request->get('page') != ""){
                echo "ici";
                $biens = $repositoryBien->findBiens($selectType, $selectLocalite, $prix);
                $paginator  = $this->get('knp_paginator');
                $pagination = $paginator->paginate(
                    $biens, 
                    $request->query->getInt('page', $request->get('page'))/*page number*/,
                    2/*limit per page*/
                );
                $message = count($biens) == 0?"Pas bien":"";
            }
            else{
                $paginator  = $this->get('knp_paginator');
                $pagination = $paginator->paginate(
                    array(), 
                    $request->query->getInt('page', $request->get('page'))/*page number*/,
                    2/*limit per page*/
                ); 
                $message = "";
            }
        }
        
        // j'ai ajouter un commentaire
        return $this->render('SNTImmobilierBundle:Front:search_bien.html.twig', array(
            'localites'=>$localites ,
            'types'=>$types,
            'loc'=>$selectLocalite,
            'typeBien'=>$selectType,
            'prix'=>$prix,
            'biens'=>$pagination,
            'message'=>$message
        ));
    }

    /**
     * @Route("/font/bien/reserver")
     */
    public function reserverBienAction()
    {
        return $this->render('SNTImmobilierBundle:Front:reserver_bien.html.twig', array(
            // ...
        ));
    }

}
