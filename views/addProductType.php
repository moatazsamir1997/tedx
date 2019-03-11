<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Product Type</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action ="<?php echo $GLOBALS['ASSET'].$GLOBALS['addProduct']?>" method="POST">
            add new product Type:<input type="text" name="productType">
            <button type="submit" name="addType">submit</button>
        </form>
    </body>
</html>
