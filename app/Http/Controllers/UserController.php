<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;
use App\Repositories\SkillRepository;

class UserController extends Controller
{

	protected $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

    public function show($id)
    {
    	$user = $this->userRepository->getUserById($id);

    	return view('profile', compact('user'));
    }

    public function edit($id, SkillRepository $skillRepository)
    {
    	$user = $this->userRepository->getUserById($id);
    	
    	$programming_languages = $skillRepository->getProgrammingLanguages();
    	$dbms = $skillRepository->getDbms();
    	$frameworks = $skillRepository->getFrameworks();
    	$mobile_os = $skillRepository->getMobileOs();
    	return view('edit-profile', compact('user', 'programming_languages', 'dbms', 'frameworks', 'mobile_os'));
    }
}
