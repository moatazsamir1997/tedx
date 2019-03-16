<?php

$config = new Controller();

$GLOBALS['ASSET'] = "../addressTask/";
$GLOBALS['addressTask'] = "addressTask/";
$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";


/* Main routes */
if($_SERVER['REQUEST_URI'] == '/addressTask/')
{
	$config->route("addressTask/users");
}


/** Functional routes **/

else if(strpos($_SERVER['REQUEST_URI'] ,"addressTask/users"))
{
	
	$config->getController('UserController');	
	$UserController = new UserController();
	
	if (isset($_POST['insert'])) 
	{	
		$id = $_POST["city"];	
		$UserController->getAddress($id);
	}
	else $UserController->index();
}
