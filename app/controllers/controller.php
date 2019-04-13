<?php
require('app/dependencies/PDOConnection.php');

class Controller
{

	public static function getInstance()
	{
		$instance = new DB_Connect();

		return $instance;
	}

	
	public static function includeClass($ClassName)
	{
		include('model/'.$ClassName.".php");
	}

	// public static function view($path, $data = array())
	// {
	// 	include($path);
	// }
	public static function view($path, $data = array())
	{
		include('views/'.$path.".php");
	}

	public static function route($routeName)
	{
		header('Location: ../'.$routeName);
	}



}


