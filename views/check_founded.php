@@ -1,87 +0,0 @@
<?php

    session_start();
    require_once("Database_Connection.php");
 
    
      
       
            
            echo '<button type="button"  name="messageTo" id="messagingTo"  ">message</button>';
		
            echo'<div id="msg"></div><br>';

    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

  </body>


  <script type="text/javascript">
      $(document).ready(function(){
          $("#messagingTo").click(function(){

              $.ajax({
                  type: 'POST',
                  url: 'getId.php',
                  success: function(data) {
					  
                      $("#msg").html(data);
		
				
                  }
              });
     });
  });
  


  $(document).ready(function(){
   $("#sendingInvitation").click(function(){

       $.ajax({
           type: 'POST',
           url: 'sendInvitation.php',
           success: function() {
    
              
  

           },
           error:function()
           {
            alert("error");
           }
       });
 });
 });
 function checkFounded(){
    jQuery.ajax(
            {
                url: "check_Founded.php",
                data: 'email='+$("#email").val(),
                type: "POST",

                success:function(data){
                    $("#msg").html(data);
                },
                error:function(){
                    $("#msg").html("error");
                }
            });
    }
    
  </script>
  </html>

