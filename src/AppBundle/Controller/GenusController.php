<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller {
  
  /**
  * @Route("/genus/{genusName}")
  */
  
  public function showAction($genusName){
    
     $templating = $this->container->get('templating');
     
     $html = $templating->render('genus/show.html.twig', array(
            'name' => $genusName
        ));
    
    return new Response($html);
    
  }
}
