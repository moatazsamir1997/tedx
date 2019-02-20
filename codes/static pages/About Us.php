<?php

include('Database_Connection.php');

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
    <title>About Us</title>
</head>
<body>
    <br>
    <a class="btn btn-success" href="Writing About Us.php">Writing</a>
    <a class="btn btn-success" href="About Us.php">Displaying</a>
    <br><br>

    <table class="table table-striped table-bordered">
    
    <tr>
    <th>ID</th>
    <th>Content</th>
    <th>Delete</th>
    <th>Update</th>

    
    </tr>
    <?php
    
    $query ="select * from `links` ";
    $result=mysqli_query($conn,$query);
    if (mysqli_num_rows($result)> 0) 
    {
        while ($row= mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["htmlCode"]."</td>";
            echo '<td><a href="update.php?id='.$row['id'].'" type="button" class="btn btn-primary btn-sm">
            <span class="fa fa-edit"></span></a> </td>';
            
            echo '<td><a href="show.php?id='.$row['id'].'" type="button" class="btn btn-danger btn-sm">
            <span class="fa fa-trash"></span></a> </td>';
            



            echo "</tr>";


        }
    }
    
    ?>
    
    </table>

</body>
</html>