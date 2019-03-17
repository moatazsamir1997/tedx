<?php
require('app/dependencies/PDOConnection.php');

class Helper
{

	public static function getInstance()
	{
		$instance = new DB_Connect();

		return $instance;
	}

	
	public static function includeClass($ClassName)
	{
		include('backend/'.$ClassName.".php");
	}

	public static function view($path, $data = array())
	{
		include('views/'.$path.".php");
	}

	public static function route($routeName)
	{
		header('Location: ../'.$routeName);
	}



}


