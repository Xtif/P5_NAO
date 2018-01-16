<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UsersController extends Controller
{
  public function userListAction(Request $request) {

    // $user = $this->getUser();
    // if (!is_object($user) || !$user instanceof UserInterface) {
    //     throw new AccessDeniedException('Cet utilisateur n\'a pas accès à cet section.');
    // }

    // $usersService = $this->container->get('AppBundle\Service\UsersService')->findAllByUsernameAsc();
    // die(var_dump($usersService));

    $allUsers = $this->getDoctrine()->getManager()->getRepository('AppBundle:Users')->findAllByUsernameAsc();    
    return $this->render('default/users_list.html.twig', array("allUsers" => $allUsers));
  } // End of userListAction()

  public function promoteUserAction($id) {
    $userManager = $this->get('fos_user.user_manager');    
    $user = $userManager->findUserBy(array('id' => $id));
    $user->addRole('ROLE_NATURALISTE');
    $user->setStatus("Naturaliste");
    $userManager->updateUser($user);
    return $this->redirectToRoute('user_list');
  } 

  public function demoteUserAction($id) {
    $userManager = $this->get('fos_user.user_manager');    
    $user = $userManager->findUserBy(array('id' => $id));
    $user->removeRole('ROLE_NATURALISTE');
    $user->setStatus("Particulier");
    $userManager->updateUser($user);
    return $this->redirectToRoute('user_list');
  } 

  public function removeUserAction($id) {
    $userManager = $this->get('fos_user.user_manager');    
    $user = $userManager->findUserBy(array('id' => $id));
    $userManager->deleteUser($user);
    return $this->redirectToRoute('user_list');
  } 
}
