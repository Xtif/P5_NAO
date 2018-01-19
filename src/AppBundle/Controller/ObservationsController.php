<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Observations;
use AppBundle\Entity\Pictures;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\File\File;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;


class ObservationsController extends Controller
{
  private $observationsService;

  public function __construct($observationsService) {
    $this->observationsService = $observationsService;
  }

  public function observationListAction() {
    $allObservations = $this->observationsService->findAllByBirdNameAsc();    
    return $this->render('default/observations_list.html.twig', array("allObservations" => $allObservations));
  } // End of userListAction()

  public function observationAction($id) {
    $observation = $this->observationsService->findById($id);
    return $this->render('default/observation.html.twig', array("observation" => $observation));
  } // End of observationAction()

  public function publishAction($id) {
    $observation = $this->observationsService->publishObservation($id);
    if ($observation) {
      $this->addFlash('Success', 'L\'observation a bien été publié !');
      return $this->redirectToRoute('observation', array("id" => $id));
    } else {
      $this->addFlash('Error', 'Cette observation n\'existe pas !');
      return $this->redirectToRoute('error_page');
    }
  } // End of publishAction()

  public function reportAction($id) {
    $observation = $this->observationsService->reportObservation($id);
    if ($observation) {
      $this->addFlash('Success', 'L\'observation a bien été signalé !');
      return $this->redirectToRoute('observation', array("id" => $id));
    } else {
      $this->addFlash('Error', 'Cette observation n\'existe pas !');
      return $this->redirectToRoute('error_page');
    }
  } // End of reportAction()

  public function removeAction($id) {
    if ($this->observationsService->removeObservation($id)) {
      $this->addFlash('Success', 'L\'observation a bien été supprimé !');
      return $this->redirectToRoute('observation_list');
    } else {
      $this->addFlash('Error', 'Cette observation n\'existe pas !');
      return $this->redirectToRoute('observation_list');
    }
  } // End of removeAction()

  public function addAction(Request $request) {

    $user = $this->getUser();
    $observation = new Observations();

    // Création du formulaire
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $observation);

    // Création des champs du formulaire
    $formBuilder
      ->add('birdName', TextType::class,
        array(
          'label' => 'Nom de l\'oiseau*',
          'attr' => array(
            'class' => 'form-control col-lg-10 m-auto'
          )
        )
      )
      ->add('birdRace', TextType::class,
        array(
          'label' => 'Nom de l\'espèce*',
          'attr' => array(
            'class' => 'form-control col-lg-10 m-auto'
          )
        )
      )
      ->add('publishedAt', DateType::class,
        array(
          'widget' => 'single_text',
          'html5'  => false,
          'attr'   => [
            'class' => 'datepicker form-control col-lg-10 m-auto'
          ],
          'format' => 'd/M/y',
          'label'  => 'Date de l\'observation*',
          'invalid_message' => 'Veuillez entrer une date valide',
          'constraints' => new NotBlank(
            array('message' => 'Le jour est obligatoire')
          )
        )
      )
      ->add('latitude', TextType::class,
        array(
          'label' => 'Latitude*',
          'attr' => array(
            'class' => 'form-control'
          )
        )
      )
      ->add('longitude', TextType::class,
        array(
          'label' => 'Longitude*',
          'attr' => array(
            'class' => 'form-control'
          )
        )
      )
      ->add('content', TextareaType::class,
        array(
          'label' => 'Commentaires (facultatif)',
          'attr' => array(
            'class' => 'form-control col-lg-10 m-auto'
          )
        )
      )
      ->add('submit', 
        SubmitType::class,
          array(
            'label' => 'Soumettre pour publication'
          )
      );

    // On génère le formulaire
    $form = $formBuilder->getForm();

    // Si le formulaire est soumis
    if ($request->isMethod('POST')) {

      // On fait le lien Requete <=> Formulaire, la variable $observation contient les valeurs entrées dans le formulaire
      $form->handleRequest($request);

      // Si les données sont correctes
      if ($form->isValid()) { 

        // On recupère l'entity manager
        $em = $this->getDoctrine()->getManager();
        $picturesUploaded = $request->files->get('picture'); // Recuperation des photos envoyées
        die(var_dump($picturesUploaded));
        $observation->setAuthor($user->getUsername());
        $observation->setUser($user);
        $em->persist($observation);
        $em->flush();

        // On redirige vers la page suivante
        return $this->redirectToRoute('observation', array('id' => $observation->getId()));
      } else { // Si les données ne sont pas valides
        return $this->render('default/add_observation.html.twig', array('form' => $form->createView()));
      }

    } else { // Si on arrive sur la page pour la première fois
      return $this->render('default/add_observation.html.twig', array('form' => $form->createView()));
    }
  } // End of add()

  public function ajaxDropzoneAction(Request $request) {

    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();
    $picture = new Pictures();

    $picturesUploaded = $request->files->get('picture'); // Recuperation des photos envoyées
    $countFiles = count($picturesUploaded); // Compte le nombre de photos
var_dump($picturesUploaded);
    for ($i = 0; $i = $countFiles; $i++) { // On renomme les photos
      $extension = $picturesUploaded[$i]->guessExtension();
      $pictureFilename = 'Images/ObservationsPictures/Picture_temp_' . $user->getUsername() . '_' . $i . '.' . $extension; // On modifie son nom en attentant la soumission du formulaire "Picture_temp_username_i.extension"
      $picturesUploaded[$i]->move( // On la déplace dans le dossier src/Images/UsersPictures/
        $this->getParameter('observations_pictures_directory'),
        $pictureFilename
      );
    }

      $picture->setFile(new File($pictureFilename));
      $picture->setName($pictureFilename);
      $picture->setUrl($pictureFilename);

      $em->persist($picture);

      $em->flush();
    return new Response();              

  }


}
