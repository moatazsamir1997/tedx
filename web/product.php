<?php

if (isset($_POST['next1']) && !empty($_POST['optionNumbers'])) {
    $numOfOptions = (integer)$_POST['optionNumbers'];
	include('views/'.'addOptionDetails'.".php");
}
if (isset($_POST['next2'])) {
   
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
    $multiArr = array('name' => $name , 'datatype' => $datatype );
    include('views/'.'addOptionValues'.".php");
}