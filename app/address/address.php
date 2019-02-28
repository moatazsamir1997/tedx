<?php

/**
 *
 */
include "conn.php";
class Address
{
  public $id;
  public $name;
  public $parentId;
  

  function insert($address)
  {
    //$this->id=$address->$id;
    //$this->parentId=$address->$parentId;
    $sql = "INSERT INTO Tutorial2 (`name`,`parentId`)
    VALUES ('".$address->id."', '".$address->parentId."')";

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

$address= new Address;

$address->name= $_POST['streetName'];
$address->parentId=$_POST['city'];
$address->insert($address);
var_dump($address);
echo "<br>";
echo $_POST['streetName']."<br>".$_POST['city'];

// $sql = "INSERT INTO address (`name`, `parentId`)
// VALUES ('".$_POST['streetName']."', '".$_POST['city']."')";

// if (mysqli_query($conn, $sql)) {
// echo "New record created successfully";
// } else {
// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);

?> 

