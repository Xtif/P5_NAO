<?php

namespace AppBundle\Repository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllByUsernameAsc() 
	{
		return $this
			->createQueryBuilder('u') // On construit la query qui recupère tous les users via le querybuilder
			->orderBy('u.username', 'ASC') // On les tri par username croissant
			->getQuery() // On crée la query
			->getResult(); // On retourne le résultat
	} // End findAllByUsername()

	public function countUsers($status) 
	{
		$users = $this
			->createQueryBuilder('u') // On construit la query qui recupère tous les users via le querybuilder
			->where('u.status = :status') // On recherche par status
			->setParameter('status', $status) // On sélectionne uniquement les users correspondant au status recherché
			->getQuery() // On crée la query
			->getResult(); // On retourne le résultat
		return count($users);
	} // End findAllByUsername()


}
