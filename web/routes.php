<?php

$config = new Controller();

$GLOBALS['ASSET'] = "../crud/";


$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";




/* Main routes */
if($_SERVER['REQUEST_URI'] == '/crud/')
{
	$config->route('crud/users');
}


/** Functional routes **/

else if($_SERVER['REQUEST_URI'] == "/crud/users") 
{
	$config->getController('UserController');	
	$UserController = new UserController();
	
if (isset($_POST['insert'])) {	
	
		$request = $_POST;
		
		$UserController->store($request);
	}
	else $UserController->index();

}
else if($_SERVER['REQUEST_URI'] == "/crud/submit")
{
	$id = $_POST['id'];
	
	
	$config->getController('UserController');
	
	$UserController = new UserController();
	
	$UserController->getUserData($id);

}