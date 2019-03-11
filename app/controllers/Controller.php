<?php


require('app/dependencies/PDOConnection.php');


class Controller
{

	public function getInstance()
	{
		$instance = new DB_Connect();

		return $instance;
	}

	public function getController($controllerName)
	{
		include('app/Controllers/'.$controllerName.".php");
	}
	
	public function includeClass($ClassName)
	{
		include('model/'.$ClassName.".php");
	}

	public function view($path, $data = array())
	{
		include('views/'.$path.".php");
	}

	public function route($routeName)
	{
		header('Location: ../'.$routeName);
	}



}


