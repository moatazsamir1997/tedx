<?php
$config = new Controller();


$GLOBALS['ASSET'] = "../tedx/";
$GLOBALS['tedx'] = "/tedx/";
$GLOBALS['/tedx'] = "tedx/";

$GLOBALS['addProduct'] = "addProduct";
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
	$config->includeClass('ProductTypeModel');
	$productTypeModel = new ProductTypeModel();
	if(isset($_POST['addType']) && !empty($_POST))
	{
        $productTypeModel->store($_POST);
		$config->route($GLOBALS['/tedx'].$GLOBALS['addProduct']);
        
	}
	else $config->view('addProductType');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addProduct'])
{
	$config->includeClass('ProductTypeModel');
	$config->includeClass('ProductModel');
	$productTypeModel = new ProductTypeModel();
	$productModel = new ProductModel();
	if(isset($_POST['addProduct']) && !empty($_POST))
	{
		$productModel->store($_POST);
	}
	else
	{
		$productTypes = $productTypeModel->getColumnData('name');
		$config->view('productgeninsert', $productTypes);
	} 
}


