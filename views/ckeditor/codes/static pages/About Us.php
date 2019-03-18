<?php

include('Database_Connection.php');

if (isset($_GET['delid']))
{
    $deluser = $_GET['delid'];
    $alertMessage="<div class='alert alert-danger'>
    <p> are you sure you want to delete this record?</p><br>
    <form action='".htmlspecialchars($_SERVER['PHP_SELF'])."?id=$deluser' method='post'>
    <input type='submit' class='btn btn-danger btn-sm'
    name='confirm-delete' value='Yes' delete!>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>x</a>
    </form>
    </div>
    ";
}



// if ($_POST['confirm-delete']) 
// {
//     $id = $_GET['id'];
    
//     $query ="delete from `links` where id='$id'";
    
//     $result= mysqli_query($conn,$query);
//     if (result) {
//         header('Location: About Us.php');
//     }else {
//         echo "Error";
//     }
// }
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>About Us</title>
</head>
<body>
<?php if (isset($alertMessage)) echo $alertMessage ?>
    <br>
    <!-- <a class="btn btn-success" href="Writing About Us.php">Writing</a>
    <a class="btn btn-success" href="About Us.php">Displaying</a> -->
    <br><br>

    <!-- <table class="table table-striped table-bordered">
    
    <tr>
    <th>ID</th>
    <th>Content</th>
    <th>Update</th>
    <th>Delete</th>
    
    
    </tr> -->
    <?php
    
    $query ="select * from `links` ";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)> 0) 
    {
        while ($row= mysqli_fetch_assoc($result))
        {
            // echo "<tr>";
            // /updateAboutUs.php
            // echo $row["id"];
            echo $row["htmlCode"];
            echo '<br><br><a href="ckeditor\codes\static pages\updateAboutUs.php?id='.$row['id'].'" type="button" class="btn btn-primary btn-sm">
            <span class="fa fa-edit"></span></a> ';
            
            // echo '<td><a href="About Us.php?delid='.$row['id'].'" type="button" class="btn btn-danger btn-sm">
            // <span class="fa fa-trash"></span></a> </td>';
            



          


        }
    }
    
    ?>
    
    <!-- </table> -->

</body>
</html>