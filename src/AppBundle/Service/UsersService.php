<?php

namespace AppBundle\Service;

class UsersService 
{

	private $repository;
	private $fosUserManager;

	public function __construct($repository, $fosUserManager) {
		$this->repository = $repository; // Recupération du repository Users via le service (injection de dépendance)
		$this->fosUserManager = $fosUserManager; // Récupération du service FosUserManager (injection de dépendance)
	}

  public function findAllByUsernameAsc() 
  {
    return $this->repository->findAllByUsernameAsc();
  } // End of findAllByUsernameAsc()

  public function promoteUser($id) { 
    $user = $this->fosUserManager->findUserBy(array('id' => $id));
    if ($user) { // Si le user existe
    	$user->addRole('ROLE_NATURALISTE');
    	$user->setStatus("Naturaliste");
    	$this->fosUserManager->updateUser($user);
    	return true;
    } else { // Si l'id ne correspond à aucun user
    	return false;
    }
  } // End of promoteUser()

  public function demoteUser($id) {
    $user = $this->fosUserManager->findUserBy(array('id' => $id));
    if ($user) { // Si le user existe
    	$user->removeRole('ROLE_NATURALISTE');
    	$user->setStatus("Particulier");
    	$this->fosUserManager->updateUser($user);
    	return true;
    } else { // Si l'id ne correspond à aucun user
    	return false;
    } 
  } // End of demoteUser()

  public function removeUser($id) {
    $user = $this->fosUserManager->findUserBy(array('id' => $id));
    if ($user) { // Si le user existe
    	$this->fosUserManager->deleteUser($user);
    	return true;
    } else { // Si l'id ne correspond à aucun user
    	return false;
    } 
  } // End of removeUser()

  
}
