<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add new Product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="<?php echo $GLOBALS['ASSET'].$GLOBALS['addOptions'].$GLOBALS['submit']?>" method="POST">
            <br><br><br>
            <label>Add number of options:</label>
            <input type="number" name="numOfOptions" >
            <button type="submit" name="Options">submit</button>
        </form>

    </body>
 </html>
 