<?php

require_once('app/Controllers/Controller.php');

require('model/userModel.php');

class UserController
{
	private $config;
	private $User;
	public function __construct(){	
		$this->config = new Controller();
		$this->User = new UserModel();
	}

	public function index()
	{
		$this->config->view('UserView');
	}
	public function getUserData($id)
	{
		$Users = $this->User->getUserData($id);

		$this->config->view('UserViewSubmit', $Users);
	}
	
	public function store($request)
	{

		$Users = $this->User->store($request);

		$this->config->view('UserView');
	}
	
}


