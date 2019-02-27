<?php

$config = new Controller();

$GLOBALS['ASSET'] = "../myproject/";


$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";




/* Main routes */
if($_SERVER['REQUEST_URI'] == '/myproject/')
{
	$config->route('myproject/users');
}


/** Functional routes **/

else if($_SERVER['REQUEST_URI'] == "/myproject/users") 
{
	$config->getController('UserController');	
	$UserController = new UserController();
	
if (isset($_POST['insert'])) {	
	
		$request = $_POST;
		
		$UserController->store($request);
	}
	else $UserController->index();

}
else if($_SERVER['REQUEST_URI'] == "/myproject/submit")
{
	$id = $_POST['id'];
	
	
	$config->getController('UserController');
	
	$UserController = new UserController();
	
	$UserController->getUserData($id);

}