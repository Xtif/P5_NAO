<?php

namespace AppBundle\Service;

class UsersService 
{

	private $repository;

	public function __construct($repository) {
		$this->repository = $repository;
	}

  public function findAllByUsernameAsc() 
  {
    return $this->repository->findAllByUsernameAsc();
  } // End of findAllByUsernameAsc()
}
