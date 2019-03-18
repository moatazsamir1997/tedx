<?php

/*
include('app\helpers\helper.php');
// Helper::includeClass('product/Product');
// Helper::includeClass('product/ProductOptions');
// Helper::includeClass('product/ProductOptionsValue');

if (isset($_POST['next1']) && !empty($_POST['optionNumbers'])) {
    $numOfOptions = (integer)$_POST['optionNumbers'];
	include('views/'.'addOptionDetails'.".php");
}
if (isset($_POST['next2'])) 
{
    $name = [];
    $datatype = [];
    foreach ($_POST as $key => $value) {
        if (strpos($key , 'name') !== false){
            array_push($name,$value);
        } 
        elseif (strpos($key , 'datatype') !== false) {
            array_push($datatype,$value);
        }
    }
    include('views/'.'addOptionValues'.".php");
}
if (isset($_POST['submitProductTypeName'])) {
    Helper::includeClass('product/ProductType');
    $productType = new ProductType();
    $productType->store($_POST);
    include('views/'.'product'.".php");
}
*/