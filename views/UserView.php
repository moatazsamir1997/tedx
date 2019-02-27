<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user</title>
  </head>
  <body>  
    
    

    <div>
      <form action="<?php echo $GLOBALS['ASSET'].$GLOBALS['user'] ?>" method="POST">
        <h3>Add user</h3>
        <input type="text" name="fname" placeholder="Enter fname here">
        <input type="text" name="lname" placeholder="Enter lname here">
        <input type="submit" name="insert" value="insert">
      </form>	
      </div>
      <div>
      <form action="<?php echo $GLOBALS['ASSET'].$GLOBALS['userSubmit']?>" method="POST">
        <h3>view user</h3>
        <input type="text" name="id" placeholder="Enter id here">
        <input type="submit" value="add">
      </form>	
    </div>
    
  </body>
</html>

