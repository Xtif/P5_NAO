<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\File\File;

class PicturesService 
{

	private $picturesRepository;
  private $em;

	public function __construct($picturesRepository, $entityManager) {
		$this->picturesRepository = $picturesRepository; // Recupération du repository Observations via le service (injection de dépendance)
    $this->em = $entityManager; // Récupération du service de l'entity manager
	}

  public function findOneByName($name) 
  {
    return $this->picturesRepository->findOneByName($name);
  } // End of findByName()

  public function findAllByObservation($observation) 
  {
    return $this->picturesRepository->findAllByObservation($observation);
  } // End of findAllByObservation()

  public function linkToObservation($usernameCanonical, $observation) 
  {
    $pictures = $this->picturesRepository->findAllTempByUsername($usernameCanonical);
    $i = 1;
    foreach ($pictures as $picture) {
      $picture->setObservation($observation); // On assigne l'observation
      $observation->addPicture($picture);
      $extension = explode('.', $picture->getName()); // On récupère l'extension
      $picture->setName('Images/ObservationsPictures/' . $usernameCanonical . '_Observation_' . $observation->getId() . "_Picture_" . $i . "." . $extension[1]); // On modifie le nom dans la BDD
      rename('Images/ObservationsPictures/Picture_' . $usernameCanonical . '_' . $i . '_temp.' . $extension[1], $picture->getName()); // On renomme le fichier stocké
      $picture->setFile(new File($picture->getName())); // On modifie le nom dans la BDD
      $i++;
      $this->em->persist($picture);
    }
    // Flush
    $this->em->flush();
    return true;
  } // End of linkToObservation()

  public function removePicture($pictureName) 
  {
    $picture = $this->findOneByName($pictureName);
    if ($picture) { // Si la photo existe
      unlink($pictureName);
      $this->em->remove($picture);
      $this->em->flush();
      return true;
    } else { // Si le name ne correspond à aucune photo
      return false;
    } 
  } // End of removePicture()


  
}
