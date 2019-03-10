<?php

$config = new Controller();

$GLOBALS['ASSET'] = "../tedx/";
$GLOBALS['tedx'] = "/tedx/";

$GLOBALS['addProductType'] = "addProductType";
$GLOBALS['productType'] = "productType";
$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";
$GLOBALS['submit'] = "/submit";




/* Main routes */
if($_SERVER['REQUEST_URI'] == '/tedx/')
{
	$config->route("tedx/".$GLOBALS['productType']);
}


/** Functional routes **/

else if($_SERVER['REQUEST_URI'] == "/tedx/users") 
{
	$config->getController('UserController');	
	$UserController = new UserController();
	
if (isset($_POST['insert'])) {	
	
		$request = $_POST;
		
		$UserController->store($request);
	}
	else $UserController->index();

}
else if($_SERVER['REQUEST_URI'] == "/tedx/submit")
{
	$id = $_POST['id'];
	
	$config->getController('UserController');
	
	$UserController = new UserController();
	
	$UserController->getUserData($id);

}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType'])
{
	if(isset($_POST['addType']) && !empty($_POST))
	{
		$ProductTypeModel = new ProductTypeModel();
        $ProductTypeModel->store($_POST);
        $productTypes = $ProductTypeModel->getColumnData('name');
        $config->view('productgeninsert', $productTypes);
	}
	else $config->view('addProductType');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addProductType'])
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


