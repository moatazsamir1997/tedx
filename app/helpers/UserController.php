<?php

require_once('app/Helpers/Helper.php');

require('model/userDBHelper.php');

class UserHelper
{
	private $config;
	private $User;
	public function __construct(){	
		$this->config = new Helper();
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


