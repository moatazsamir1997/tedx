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
	public function getAddress($id)
	{
		$place = $this->User->getAddress($id);

		$this->config->view('UserViewSubmit', $place);
	}
	
	
	
}


