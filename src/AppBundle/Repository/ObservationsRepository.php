<?php

namespace AppBundle\Repository;

/**
 * ObservationsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ObservationsRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllByBirdNameAsc() 
	{
		return $this
			->createQueryBuilder('o') // On construit la query qui recupère toutes les observations via le querybuilder
			->orderBy('o.birdName', 'ASC') // On les tri par birdName croissant
			->getQuery() // On crée la query
			->getResult(); // On retourne le résultat
	} // End findAllByUsefindAllByBirdNameAscrname()

	public function countObservations($state) // Renvoi le nombre d'observations publiées, en attente ou supprimées
	{
		$observations = $this
			->createQueryBuilder('o') // On construit la query qui recupère toutes les observations via le querybuilder
			->where('o.state = :state') // On recherche par status (publiée, en attente ou supprimée)
			->setParameter('state', $state) // On sélectionne uniquement les observations correspondantes au status recherché
			->getQuery() // On crée la query
			->getResult(); // On retourne le résultat
		return count($observations);
	} // End countObservation()

  public function getObservationsByBirdRace($race) {
    return $this->createQueryBuilder('o')
      ->where('o.state = :state')
      ->setParameter('state', 'Publiée')
      ->innerJoin('o.birdRace', 'b', 'WITH', 'b.race = :race')
      ->setParameter('race', $race)
      ->getQuery()
      ->getResult();
  } // End getObservationsByBirdRace()

}
