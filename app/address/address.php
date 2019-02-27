<?php

/**
 *
 */
 include_once ("conn.php");
class address
{
  public $id;
  public $fullname;
  public $email;
  public $dob;
  public $password;
  public $usertype_id;

  function insert($address)
  {
    $sql = "INSERT INTO Tutorial2 (ID, FullName, Email, DOB, Password, UserType_Id)
    VALUES ('".$user->id."', 'amr', 'amr@gmail.com' , '7-7-97' , '123', '1')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  }


}





 ?>
 <form  method="post" action=>


        <h3>Add address</h3>
        <form action="" method="post">
        <select>
  <option value="egypt">Egypt</option>
</select> 
<select name="city">
    <option value="10">Cairo</option>
    <option value="11">Alexandria</option>
</select>

      <input type="text" placeholder="enter street name" name="streetName">
      <input type="submit" class="Submit_Button" name="submit">
</form>


       <?php
      


$sql = "INSERT INTO address (`name`, `parentId`)
VALUES ('".$_POST['streetName']."', '".$_POST['city']."')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

       ?> 


