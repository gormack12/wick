<?php

namespace App\Repositories;

use App\User;

/**
* 
*/
class UserRepository
{

	protected $model;
	
	function __construct(User $user)
	{
		$this->model = $user;
	}

	public function getUserById($id) {

		return $this->model->findOrFail($id);
	}
}