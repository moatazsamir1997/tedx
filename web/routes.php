<?php

$config = new Controller();

$GLOBALS['crud'] = "/crud/";
$GLOBALS['users'] = "users";
$GLOBALS['submit'] = "submit";


// /* Main routes */
if($_SERVER['REQUEST_URI'] == '/crud/')
{
	$config->route('crud/users');
}


/** Functional routes **/


else if( $_SERVER['REQUEST_URI'] == $crud.$users) 
{
	$config->getController('UserController');
	
	$UserController = new UserController();
	
	$UserController->index();
	
}
// else if($_SERVER['REQUEST_URI'] == "$crud.'/'.$users.'/'.$submit")
// {
// 	$id = $_POST['id'];
	
	
// 	$config->getController('UserController');
	
// 	$UserController = new UserController();
	
// 	$UserController->getAllUser($id);

// }
