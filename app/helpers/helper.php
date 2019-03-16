<?php


require('app/dependencies/PDOConnection.php');


class Helper
{

	public function getInstance()
	{
		$instance = new DB_Connect();

		return $instance;
	}

	
	public function includeClass($ClassName)
	{
		include('backend/product/'.$ClassName.".php");
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


