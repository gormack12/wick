<?php

namespace App\Repositories;

use App\Models\Skill;

/**
* 
*/
class SkillRepository
{
	protected $model;

	function __construct(Skill $skill)
	{
		$this->model = $skill;
	}

	public function getSkills()
	{
		return $this->model->select('name')
							->get();
	}

	public function getProgrammingLanguages()
	{
		$programming_language = $this->model->select('name')
											->where('genre', '=', 'programming language')
											->get();
		return $programming_language;
	}

	public function getDbms()
	{
		$dbms = $this->model->where('genre', '=', 'dbms')
							->get();
		return $dbms;
	}

	public function getFrameworks()
	{
		$frameworks = $this->model->where('genre', '=', 'framework')
							->get();
		return $frameworks;
	}

	public function getMobileOs()
	{
		$mobile_os = $this->model->where('genre', '=', 'mobile os')
							->get();
		return $mobile_os;
	}
}