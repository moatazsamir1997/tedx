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
$GLOBALS['about'] = "about";
$GLOBALS['speakers'] = "speakers";
$GLOBALS['ourTeam'] = "ourTeam";
$GLOBALS['alumni'] = "alumni";
$GLOBALS['contact'] = "contact";
$GLOBALS['product'] = "product";
$GLOBALS['register'] = "register";
$GLOBALS['addNewProduct'] = 'addNewProduct';
$GLOBALS['addValue'] = 'addValue';

/* Main routes */
if($_SERVER['REQUEST_URI'] == '/tedx/')
{
	Helper::route($GLOBALS['ASSET'].$GLOBALS['about']);
}


/** Functional routes **/


else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['about']){
	include('views/about.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['speakers']){
	include('views/speakers.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['ourTeam']){
	include('views/ourTeam.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['alumni']){
	include('views/alumni.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['contact']){
	include('views/contact.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product']){
	include('views/product.php'); 
}	
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['register']){
	include('views/register.php'); 
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct']){
	Helper::includeClass('product\productType');
	$ProductType = new ProductType();
	$ProductTypes = $ProductType->getAllTypes();
	Helper::view('addProduct' , $ProductTypes);
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct'].$GLOBALS['submit']){
	// $_SESSION['productData'] = array('name' => $_POST['productName'],'productTypeId' => $_POST['productTypeId']);
	var_dump($_POST);
	// var_dump($_SESSION['productData']);
	// $numOfOptions = (integer)$_POST['optionNumbers'];
	// include('views/'.'addOptionDetails'.".php");
	
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType']){
	Helper::view('addProductType');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType'].$GLOBALS['submit']){
	Helper::includeClass('product/ProductType');
    $productType = new ProductType();
    $productType->store($_POST);
	Helper::route('product');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct'].'/'.$GLOBALS['addOptions'].$GLOBALS['submit']){
	var_dump($_POST);
	Helper::includeClass('product/productoptions');
	$Obj = new ProductOptions();
	$Obj->store();
}
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue']){

	Helper::includeClass('product\product');
	$product = (new Product())->getProducts();
	Helper::view('addOptionValues',$product);
}


else if($_SERVER['REQUEST_URI'] == "myajax"){
	echo 1;
	include('views/'.'addAnotherProduct'.".php");
}
// else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct'].$GLOBALS['Options'].'/'.$GLOBALS['addValue']){

// 	Helper::includeClass('product\product');
// 	$product = (new Product())->getProducts();
// 	Helper::view('addOptionValues',$product);
// }



