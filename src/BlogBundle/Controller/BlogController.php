<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\News;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class BlogController extends Controller
{
  public function newsListAction()
  {
  	$allNews = $this->getDoctrine()->getManager()->getRepository('BlogBundle:News')->findAllByDateAsc();
    return $this->render('default/news_list.html.twig', array('allNews' => $allNews));
  }

  public function newsAction($id)
  {
  	$news = $this->getDoctrine()->getManager()->getRepository('BlogBundle:News')->findOneBy(['id' => $id]);
    return $this->render('default/news.html.twig', array('news' => $news));
  }

  public function addNewsAction(Request $request)
  {

    $user = $this->getUser();

    $news = new News();

    // $user->setPicture(new File($news->getPicture())); // Création d'un objet File pour le champ photo du formulaire

    // Création du formulaire
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $news);

    // Création des champs du formulaire
    $formBuilder
      ->add('title', TextType::class,
        array(
          'label' => 'Titre*',
          'attr' => array(
            'class' => 'form-control col-lg-10 m-auto',
            'placeholder' => 'Titre'
          )
        )
      )
      ->add('content', TextareaType::class,
        array(
          'label' => 'Contenu*',
          'attr' => array(
            'class' => 'form-control col-lg-10 m-auto',
            'placeholder' => 'Rédigez votre message',
          )
        )
      )
      ->add(
        'picture', 
        FileType::class, 
        array(
            'label' => 'Ajouter une photo (facultatif)',
            'label_attr' => array(
                'class' => 'text-center mt-2 btn btn-info label-user-picture'
            ),
            'required' => false,
            'attr' => array(
                'class' => 'invisible'
            )
        )
      )
      ->add('submit', 
        SubmitType::class,
          array(
            'label' => 'Soumettre la news',
            'attr' => array(
              'class' => 'btn btn-info text-center'
            )
          )
      );

    // On génère le formulaire
    $form = $formBuilder->getForm();

    // Si le formulaire est soumis
    if ($request->isMethod('POST')) {

      // On fait le lien Requete <=> Formulaire, la variable $news contient les valeurs entrées dans le formulaire
      $form->handleRequest($request);

      // Si les données sont correctes
      if ($form->isValid()) { 

        // On recupère l'entity manager
        $em = $this->getDoctrine()->getManager();

        // Gestion de la photo
        $picture = new File($news->getPicture()); // On crée un fichier photo avec pour le formulaire
        $pictureFilename = 'Images/NewsPictures/' . $news->getDatePublished()->format('Y-m-d_H-i-s') . '_News.' . $picture->guessExtension(); // On modifie son nom pour l'enregistrement "date_News.extension"
        $picture->move( // On la déplace dans le dossier src/Images/NewsPictures/
          $this->getParameter('news_pictures_directory'),
          $pictureFilename
        );
        
        $news->setPicture($pictureFilename); // On assigne la photo a l'objet news 

        $em->persist($news);
        $em->flush();
        
        // On redirige vers la page suivante
        return $this->redirectToRoute('news', array('id' => $news->getId()));
      } else { // Si les données ne sont pas valides
        return $this->render('default/add_news.html.twig', array('form' => $form->createView()));
      }

    } else { // Si on arrive sur la page pour la première fois
      return $this->render('default/add_news.html.twig', array('form' => $form->createView()));
    }
  } // End of addNews()

  public function removeNewsAction($id)
  {
    $news = $this->findOneBy($id);
    if ($news) { // Si la news existe
      unlink($news);
      $this->getDoctrine()->getManager()->getRepository('BlogBundle:News')->remove($picture);
      $this->getDoctrine()->getManager()->getRepository('BlogBundle:News')->flush();
      return true;
    } else { 
      return false;
    } 
    return $this->render('default/remove_news.html.twig');
  } // End of removeNews()


}
