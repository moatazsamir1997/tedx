<?php

$config = new Controller();

$GLOBALS['ASSET'] = "../crud/";
$GLOBALS['crud'] = "/crud/";

$GLOBALS['addProductType'] = "addProductType";
$GLOBALS['productType'] = "productType";
$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";
$GLOBALS['submit'] = "/submit";




/* Main routes */
if($_SERVER['REQUEST_URI'] == '/crud/')
{
	$config->route("crud/".$GLOBALS['productType']);
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
else if($_SERVER['REQUEST_URI'] == $GLOBALS['crud'].$GLOBALS['productType'])
{
	$config->getController('ProductTypeController');
	$productTypeController = new ProductTypeController();
	if(isset($_POST['addType']) && !empty($_POST))
	{
		$productTypeController->store($_POST);
	}
	else $productTypeController->index();
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['crud'].$GLOBALS['addProductType'])
{
	$config->getController('ProductController');
	$productController = new ProductController();
	
	if(isset($_POST['addProduct']) && !empty($_POST))
	{
		var_dump($_POST);
		$productController->store($_POST);
	}
	else $productController->index();
}


var_dump(1);