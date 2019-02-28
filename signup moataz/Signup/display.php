<!DOCTYPE html>
<?php
include('user.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>display</title>
    
</head>
<body>
<?php
 
 foreach($data as $user)
 {
 ?>
              <p><?php echo $user['fname'] ?></p>
              <p><?php echo $user['lname'] ?></p>
              <p><?php echo $user['email'] ?></p>
              <p><?php echo $user['password'] ?></p>
              <p><?php echo $user['bday'] ?></p>
     <?php } ?>
    

</body>
</html>