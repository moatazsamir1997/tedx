<?php

$config = new Controller();

$GLOBALS['projectName'] = "../crud/";
$GLOBALS['users'] = "users";
$GLOBALS['submit'] = "submit";



/* Main routes */
if($_SERVER['REQUEST_URI'] == '/crud/')
{
	$config->route('crud/users');
}


/** Functional routes **/

else if($_SERVER['REQUEST_URI'] == "$ProjectName.$users") 
{
	$config->getController('UserController');	
	$UserController = new UserController();
	
    if(isset($_POST['add'])){	
	
		$request = $_POST;
		
		$UserController->addUser($request);
	}
    else $UserController->index();

}
else if($_SERVER['REQUEST_URI'] == "$ProjectName.'/'.$users.'/'.$submit")
{
	$id = $_POST['id'];
	
	
	$config->getController('UserController');
	
	$UserController = new UserController();
	
	$UserController->getAllUser($id);

}