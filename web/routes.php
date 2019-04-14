<?php

$config = new Controller();
require('app\controllers\linksController.php');
$linksController = new linksController();

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





/** Functional routes **/


if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct']){
	
	Controller::includeClass('product\productType');
	$ProductType = new ProductType();
	$ProductTypes = $ProductType->getAllTypes();
	Controller::view('addProduct' , $ProductTypes);
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['addNewProduct'].$GLOBALS['submit']){
	echo 1;
	Controller::includeClass('product/ProductOptions');
	echo 1;
	Controller::includeClass('product/Product');
	echo 1;
	$Product = new Product();
	$obj = new ProductOptions();
	$Product->store($_POST);
	$obj->insertOptionsData($_POST , $Product);
	
	$productId = $Product->getProductId($_POST['name']);
	
	$obj->insertProductId($productId['id']);

	Controller::route('product');
	
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType']){
	
	Controller::includeClass('product\productType');
	$productTypes = (new ProductType())->getAllTypes();
	Controller::view('addProductType' , $productTypes);
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType'].$GLOBALS['submit']){
	
	Controller::includeClass('product/ProductType');
    $productType = new ProductType();
    $productType->store($_POST);
	Controller::route('product');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue']){
	

	Controller::includeClass('product\product');
	$product = (new Product())->getProducts();
	Controller::view('addValues',$product);
}


else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue'].$GLOBALS['submit']){
	

	Controller::includeClass('product\ProductOptions');
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
	Controller::view('retrieveValues' , $arrOfOptionsData );
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['product'].'/'.$GLOBALS['addValue'].$GLOBALS['insert']){
	

	Controller::includeClass('product/productOptionsValue');
	$valueObj = new ProductOptionsValue();
	$valueObj->insertValues($_SESSION['arrids'],$_POST);
	Controller::route('../product');
}



else {
	$link = $linksController->getPhysicalName($_SERVER['REQUEST_URI']);
	include($link);
}