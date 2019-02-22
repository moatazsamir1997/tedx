<?php 
include("app\controllers\Controller.php");

$config = new Controller;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $var = "mohamed";
    echo $var;
    echo "<br>";
    echo $config->putQuatations($var, 4);

    ?>
    
</body>
</html>