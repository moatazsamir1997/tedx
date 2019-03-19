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
$GLOBALS['insert'] = '/insert';


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
	Helper::includeClass('product/ProductOptions');
	Helper::includeClass('product/Product');
	$Product = new Product();
	$obj = new ProductOptions();
	$Product->store($_POST);
	$obj->insertOptionsData($_POST , $Product);
	
	$productId = $Product->getProductId($_POST['name']);
	
	$obj->insertProductId($productId['id']);

	Helper::route('product');
	
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

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue']){

	Helper::includeClass('product\product');
	$product = (new Product())->getProducts();
	Helper::view('addValues',$product);
}


else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue'].$GLOBALS['submit']){

	Helper::includeClass('product\ProductOptions');
	$productOption = new ProductOptions();
	$productId = $_POST['productId'];
	$arrOfIds = $productOption->getRelatedIds($productId);
	$arrOfOptionsData = [];
	foreach ($arrOfIds as $key) {
		array_push($arrOfOptionsData ,$productOption->getById($key['optionsId']));
	}
	$prOpIdsArr = [];
	foreach ($arrOfIds as $key) {
		
			$prOpId = $productOption->getRelationids($productId , $key['optionsId']);
			array_push($prOpIdsArr , $prOpId['id'] );
		
	}
	$_SESSION['arrids'] = $prOpIdsArr;
	Helper::view('retrieveValues' , $arrOfOptionsData );
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue'].$GLOBALS['insert']){

	Helper::includeClass('product/productOptionsValue');
	$valueObj = new ProductOptionsValue();
	$valueObj->insertValues($_SESSION['arrids'],$_POST);
	Helper::route('../product');
}



