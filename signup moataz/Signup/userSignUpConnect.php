<?php

include('user.php');
$useroObj= new user;


if (isset($_GET['submit'])) 
{
    $useroObj->store($_GET);
}


//assossiative array
// $arrayName = array('moataz' => 22 );
// $arrayssss = array( 22 );
// $arrayssss[0];
// $arrayName ['moataz']
