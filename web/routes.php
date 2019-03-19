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
$GLOBALS['signup'] = 'signup';
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
else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType']){
	Helper::view('addProductType');
}

else if($_SERVER['REQUEST_URI'] == $GLOBALS['tedx'].$GLOBALS['productType'].$GLOBALS['submit']){
	Helper::includeClass('product/ProductType');
    $productType = new ProductType();
    $productType->store($_POST);
	Helper::route('product');
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


elseif ($_SERVER['REQUEST_URI']  == $GLOBALS['tedx'].$GLOBALS['signup'] ) {

    // Helper::view('signup');
    include("views/signup.php");
}

elseif ($_SERVER['REQUEST_URI']  == $GLOBALS['tedx'].$GLOBALS['signup'].$GLOBALS['submit'] ) {

    require_once('backend\user\User.php'); 
    if(isset($_POST['submit']))
    {
        // echo "test";
      $user = new user;
      var_dump($user);
		$user->store($_POST);
		var_dump($user);
	}
	include("views/signup.php");
}
