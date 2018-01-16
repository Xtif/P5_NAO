<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
  public function dashboardAction(Request $request) {

    $countParticuliers = $this->getDoctrine()->getManager()->getRepository('AppBundle:Users')->countUsers('Particulier');  
    $countNaturalistes = $this->getDoctrine()->getManager()->getRepository('AppBundle:Users')->countUsers('Naturaliste'); 
    $countObservationsPublished = 0; 
    $countObservationsWaiting = 0;

    return $this->render(
      'default/dashboard.html.twig', 
      array(
        'countParticuliers' => $countParticuliers,
        'countNaturalistes' => $countNaturalistes,
        'countObservationsPublished' => $countObservationsPublished,
        'countObservationsWaiting' => $countObservationsWaiting
      )
    );

  }
}
