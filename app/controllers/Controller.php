<?php


require('app/dependencies/PDOConnection.php');


class Controller
{
	private $instance = new DB_Connect(); 

	public function getInstance()
	{
		return $this->instance;
	}

	public function getController($controllerName)
	{
		include('app/Controllers/'.$controllerName.".php");
	}

	public function view($path, $data = array())
	{
		include('views/'.$path.".php");
	}

	public function route($routeName)
	{
		header('Location: ../'.$routeName);
	}


	public function getSearchResults($DBobject,$tableName , $columnName , $searchString)
	{
		$query = $DBobject->query("SELECT * FROM `$tableName` WHERE `$columnName` LIKE '%$searchString%'");

		return $query->fetchAll(PDO::FETCH_ASSOC);
		
	}

	public function putQuatations($var , $quotation)
	{
		$this->instance->quote(($var , $quotation));
	}

}


