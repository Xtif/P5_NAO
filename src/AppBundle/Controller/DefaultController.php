<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Birds;
use AppBundle\Entity\Observations;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(Request $request) {

        return $this->render('default/index.html.twig');

    }

    public function mapAction(Request $request) {

        $birds = $this->getDoctrine()->getRepository('AppBundle:Birds')->findAll();
        $observations = $this->getDoctrine()->getRepository('AppBundle:Observations')->getAllObservations();

        return $this->render('default/map.html.twig', array(
            'birds'        => $birds,
            'observations' => $observations,
        ));
    }

    public function raceSelectAction(Request $request) {

        if($request->isXmlHttpRequest() && $request->isMethod('POST')) {
            $race = $_POST['race'];
            $observations = $this->getDoctrine()->getManager()->getRepository('AppBundle:Observations')->getObservationsByBirdRace($race);
            /*$debug = fopen('debug.txt', 'w');
            fwrite($debug, var_export($observations, true));
            fclose($debug);
            die();*/

            $response = new JsonResponse();
            $lng = [];
            $lat = [];
            $birdName = [];
            $date = [];
            $author = [];
            $image = [];

            foreach ($observations as $observation) {
                array_push($lng, $observation->getLongitude());
                array_push($lat, $observation->getLatitude());
                array_push($birdName, $observation->getBirdName());
                array_push($date, $observation->getPublishedAt()->format('d/m/Y'));
                array_push($author, $observation->getAuthor());
                //array_push($image, $observation->getPictures()[0]->getName());
            }

            $response->setData(array(
                'longitudes' => $lng,
                'latitudes'  => $lat,
                'birdName'   => $birdName,
                'date'       => $date,
                'author'     => $author,
                'image'      => $image,
            ));

            return $response;

        }

    }

    public function addAction(Request $request) {

        return $this->render('default/add_observation.html.twig');

    }

    public function dashboardAction(Request $request) {

        return $this->render('default/dashboard.html.twig');

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
