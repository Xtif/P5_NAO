<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Birds;
use AppBundle\Entity\Observations;

class MapController extends Controller
{

    public function mapAction(Request $request) {

        $birds = $this->getDoctrine()->getRepository('AppBundle:Birds')->findAllByBirdRaceAsc();

        return $this->render('default/map.html.twig', array(
            'birds'        => $birds
        ));
    }

    public function raceSelectAction(Request $request) {

        if($request->isXmlHttpRequest() && $request->isMethod('POST')) {

            $race = $_POST['race'];

            $observations = $this->getDoctrine()->getRepository('AppBundle:Observations')->getObservationsByBirdRace($race);

            

            $response = new JsonResponse();
            $id = [];
            $userId = [];
            $lng = [];
            $lat = [];
            $birdName = [];
            $date = [];
            $author = [];
            $image = [];

            $debug = fopen('debug.txt', 'w');
            fwrite($debug, var_export($observations, true));
            fclose($debug);
            // die();

            foreach ($observations as $observation) {
                array_push($id, $observation->getId());
                array_push($userId, $observation->getUser()->getId());
                array_push($lng, $observation->getLongitude());
                array_push($lat, $observation->getLatitude());
                array_push($birdName, $observation->getBirdName());
                array_push($date, $observation->getPublishedAt()->format('d/m/Y'));
                array_push($author, $observation->getAuthor());
                array_push($image, $observation->getPictures()[0]->getName());
            }

            $response->setData(array(
                'id'         => $id,
                'userId'     => $userId,
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

}
