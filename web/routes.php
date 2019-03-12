<?php
$config = new Controller();


$GLOBALS['ASSET'] = "../tedx/";
$GLOBALS['tedx'] = "/tedx/";
$GLOBALS['/tedx'] = "tedx/";

$GLOBALS['addProduct'] = "addProduct";
$GLOBALS['addOptions'] = "addOptions";
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
	$config->view('addProductType');
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addProduct'])
{
	$config->includeClass('ProductType');
	$productType = new ProductType();
	if(isset($_POST['addType']) && !empty($_POST))
	{
		$productType->store($_POST);        
		$productTypes = $productType->getColumnData('name');
		$config->view('productgeninsert', $productTypes);
	}
	else $config->view('addProductType');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addOptions'] ) 
{
	$config->includeClass('ProductType');
	$config->includeClass('Product');
	$productType = new ProductType();
	$product = new Product();
	if(isset($_POST['addProduct']) && !empty($_POST))
	{
		$product->store($_POST);
		$config->view('addOptions');
	}
	else
	{
		$productTypes = $productType->getColumnData('name');
		$config->view('productgeninsert', $productTypes);
	} 
}


else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addOptions'].$GLOBALS['submit']) 
{
	if(isset($_POST['Options']) && !empty($_POST))
	{
		$numOfOptions = (integer)$_POST['numOfOptions'];
		include('views/'.'addOptionValuesSubmit'.".php");
	}
}


