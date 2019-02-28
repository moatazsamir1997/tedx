

<?php

require('PDOConnection.php');

class user
{

    private $fname;
    private $lname;
    private $email;
    private $password;
    private $bday;

    public function signup($request)
    {
        $instance = new DB_Connect();
        $User = $instance;
        
        $this->fname = $request['firstlabel']; 
        $this->lname = $request['secondlabel'];
        $this->email = $request['email'];
        $this->password = $request['pass'];
        $bday = $request['bday'];
        $query = $User->query("INSERT INTO `User` (`fname`,`lname`,`email`,`password`,`bday`) VALUES ('$this->fname','$this->lname','$this->email','$this->password','$this->bday')");
    }
    public function disp()
    {
        $instance = new DB_Connect();
 $display = $instance;
 
 
 $query=$display->query("SELECT * FROM 'User'");
 include("display.php");
    }
   public function login()
   {
    $instance = new DB_Connect();
    $User = $instance;
    
   
   
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
       
       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       
       $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $active = $row['active'];
       
       $count = mysqli_num_rows($result);
       
       // If result matched $myusername and $mypassword, table row must be 1 row
         
       if($count == 1) {
          session_register("myusername");
          $_SESSION['login_user'] = $myusername;
          
          header("location: welcome.php");
       }else {
          $error = "Your Login Name or Password is invalid";
       }
    }


   } 
    }

    ?>