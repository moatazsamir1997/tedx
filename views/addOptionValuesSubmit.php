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
            <?php for ($i=0; $i <$numOfOptions; $i++) { ?>
            <label>Option name</label>
            <input type="text" name="optionName">
            <label>DataType</label>
            <select name = "DataType">  
                    <option value="button"> button</option>
                    <option value="checkbox"> checkbox</option>
                    <option value="color"> color</option>
                    <option value="date"> date</option>
                    <option value="datetime-local"> datetime-local</option>
                    <option value="email"> email</option>
                    <option value="file"> file</option>
                    <option value="hidden"> hidden</option>
                    <option value="image"> image</option>
                    <option value="month"> month</option>
                    <option value="number"> number</option>
                    <option value="password"> password</option>
                    <option value="radio"> radio</option>
                    <option value="range"> range</option>
                    <option value="reset"> reset</option>
                    <option value="search"> search</option>
                    <option value="submit"> submit</option>
                    <option value="tel"> tel</option>
                    <option value="text"> text</option>
                    <option value="time"> time</option>
                    <option value="url"> url</option>
                    <option value="week"> week</option>
            </select>
            <br>
            <?php } ?>

            <button type="submit" name="addOptionValues">submit</button>
        </form>

    </body>
 </html>
 