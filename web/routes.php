<?php
$config = new Helper();


$GLOBALS['ASSET'] = "../tedx/";
$GLOBALS['tedx'] = "/tedx/";
$GLOBALS['/tedx'] = "tedx/";

$GLOBALS['addProduct'] = "addProduct";
$GLOBALS['addOptions'] = "addOptions";
$GLOBALS['productType'] = "productType";
$GLOBALS['user'] = "users";
$GLOBALS['userSubmit'] = "submit";
$GLOBALS['submit'] = "/submit";
$GLOBALS['altering'] = "altering";




/* Main routes */
if($_SERVER['REQUEST_URI'] == '/tedx/')
{
	Helper::route("/tedx/views/about.php");
}


/** Functional routes **/


else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType'])
{
	Helper::view('addProductType');
}



else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addOptions'] ) 
{
	Helper::includeClass('ProductType');
	Helper::includeClass('Product');
	$productType = new ProductType();
	$product = new Product();
	if(isset($_POST['addProduct']) && !empty($_POST))
	{
		$product->store($_POST);
		Helper::view('addOptions');
	}
	else
	{
		$productTypes = $productType->getColumnData('name');
		Helper::view('productgeninsert', $productTypes);
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



