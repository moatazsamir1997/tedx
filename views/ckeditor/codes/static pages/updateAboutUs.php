<?php 
include('Database_Connection.php');

if ($_GET['id'])
{
    $id =$_GET['id'];
    $query="select * from `links` where id='$id'";
    $result= mysqli_query($conn,$query);
    
    if (mysqli_num_rows($result)>0) 
    {
        while ($row=mysqli_fetch_assoc($result))
        {
            $content=$row['htmlCode'];
        }
    }
    else {
        header('Location: writing About Us.php');
    }
}
 if (isset($_POST['submit'])) 
 {
    if (isset($_POST['editor']) && !empty($_POST['editor'])) 
    {
        $content = $_POST['editor'];
    }    
    else
     {
        $empty_error = '<b class="text-danger text-center>Please fill the textarea<b>';
    }
    if (isset($content) && !empty($content))
     {
        $insert_q = "update `links` set htmlCode ='$content' WHERE id='$id' ";
        if (mysqli_query($conn, $insert_q))
         {
                
        }
        else {
            $submit_error = '<b class="text-danger text-center">You are not able to submit. please try again</b>';
        }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="ckeditor/ckeditor.js"></script>
    <title>Writing About Us</title>
</head>
<body>

    <br>
    <a class="btn btn-success" href="Writing About Us.php">Writing</a>
    <a class="btn btn-success" href="About Us.php">Displaying</a>
    <br><br>
    <?php    if (isset($submit_error)) echo $submit_error;  ?>
    <?php    if (isset($empty_error)) echo $empty_error;  ?>
    

    <form action="" method="post" enctype="multipart/form-data">

                <textarea class="ckeditor" name="editor"><?php 
                if (isset($content)) echo $content;
                ?></textarea>

                <br>
                <button type="submit" name="submit" class="btn btn-success"><span class="fa fa-save"></span></button>

    </form>
</body>
</html>