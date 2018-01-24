<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(Request $request) {

        return $this->render('default/index.html.twig');

    }

    public function mapAction(Request $request) {

        return $this->render('default/map.html.twig');

    }

    public function contactAction(Request $request) {

        return $this->render('default/contact.html.twig');

    }

    public function legalNoticeAction(Request $request) {

        return $this->render('default/legal_notice.html.twig');

    }

    public function tosAction(Request $request) {

        return $this->render('default/tos.html.twig');

    }

}
