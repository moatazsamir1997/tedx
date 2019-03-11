<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add option value</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form action="<?php echo $GLOBALS['ASSET'].$GLOBALS['addOptionValue'].$GLOBALS['submit']?>" method="POST">
            <br><br><br>
            <?php for ($i=0; $i <$numOfOptions ; $i++) { ?>
            <label>Option name</label>
            <input type="text" name="optionName">
            <label>Option dataType</label>
            <input type="text" name="optionDataType">
            <?php } ?>

            <button type="submit" name="addOptionValues">submit</button>
        </form>

    </body>
 </html>
 