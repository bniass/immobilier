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
        $prix = "";
        if ($request->isMethod('POST')) {
            $selectLocalite = $request->get('localiteselect');
            $selectType = $request->get('typeselect');
            $prix = $request->get('prix');
        }
        
   
        return $this->render('SNTImmobilierBundle:Front:search_bien.html.twig', array(
            'localites'=>$localites ,
            'types'=>$types,
            'loc'=>$selectLocalite,
            'typeBien'=>$selectType,
            'prix'=>$prix
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
