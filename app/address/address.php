
<?php

/**
 *
 */


require_once('Dbconnection.php');
class Address
{
  public $id;
  public $name;
  public $parentId;
//   public $servername = "localhost";
//   public $username = "root";
//   public $password = "";
//   public $dbname = "crudtask";
//  // Create connection
//  public $conn = new mysqli($servername, $username, $password, $dbname);
//  // Check connection
//  if ($this->conn->connect_error) {
//      die("Connection failed: " . $this->conn->connect_error);
//  }
function getAddressInfo($address)
 {
  $Dbobj = new DbConnection(); 
  $query = mysqli_query($Dbobj->getdbconnect(), "SELECT * FROM `address` ");
  return mysqli_fetch_array($query);
 
 
 }
 
 //$this->conn->close();

  // function insert($address)
  // {
  //   //$this->id=$address->$id;
  //   //$this->parentId=$address->$parentId;
  //   $sql = "INSERT INTO Tutorial2 (`name`,`parentId`)
  //   VALUES ('".$address->id."', '".$address->parentId."')";

  //   if ($conn->query($sql) === TRUE) {
  //       echo "New record created successfully";
  //   } else {
  //       echo "Error: " . $sql . "<br>" . $conn->error;
  //   }

  //   $conn->close();

  // }


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
print_r($address->getAddressInfo( ));

if(isset($_POST['submit']))
{
$address->name= $_POST['streetName'];
$address->parentId=$_POST['city'];
echo '<br>';
//$address->insert($address);
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
}
?> 

