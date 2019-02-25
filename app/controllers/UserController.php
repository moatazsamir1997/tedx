<?php

class UserController extends controller
{
	private $id;
	private $name;
	private $genderId; 
	private $userTypeId; 
	private $userAddressId;

	public function addUser($request)
	{
		$this->name = $request['name'];
		$this->genderId = $request['genderId'];
		$this->userTypeId = $request['userTypeId'];
		$this->userAddressId = $request['userAddressId'];

		$query = query("INSERT INTO `User` (`name`,``) VALUES ('$this->name','$this->lname')");
		var_dump($query);
		$this->config->view('UserView');
		
	}
	public function index()
	{
		$this->config->view('UserView');		
	}
}
	// if(isset($_POST['deleteAccount']))
	// {
	// 	$requestedName = $_POST["userName"];
		
	// 	echo '<br>';
	// 	if ($requestedName != "") {
	// 		$delete="DELETE FROM `user` WHERE `name` = '".$requestedName."'";
	// 		$result = mysqli_query($conn, $delete);	
	// 	}
		
		
	// 	$select="SELECT * FROM `user`";
	// 	$result = mysqli_query($conn,$select);	
	// 	if ($result->num_rows > 0) 
	// 	{
	// 		// output data of each row
	// 		while($row = $result->fetch_assoc()) {	
	// 			echo $row["name"]."<br>";
	// 		}
	// 	} 
	// 	else {echo "0 results";}
	// }	
	
	
	// if(isset($_POST['updateAccount']))
	// {
	// 	$requestedName = $_POST["userName"];
	// 	$updatedName = $_POST["updatedName"];
		
		
	// 	echo '<br>';
	// 	if ($requestedName != "") {
	// 		$update="UPDATE `user`
	// 		SET `name` = '$updatedName'
	// 		WHERE `name` = '$requestedName' ;";
	// 		$result = mysqli_query($conn, $update);	
	// 	}
		
		
	// 	$select="SELECT * FROM `user`";
	// 	$result = mysqli_query($conn,$select);	
	// 	if ($result->num_rows > 0) 
	// 	{
	// 		// output data of each row
	// 		while($row = $result->fetch_assoc()) {	
	// 			echo $row["name"]."<br>";
	// 		}
	// 	} 
	// 	else {echo "0 results";}
	// }	

	
	
	
	// function read($tableName,$columnName)
	// {
	// 	$select="SELECT * FROM `$tableName`";
	// 	$result = mysqli_query($GLOBALS['conn'] ,$select);	
	// 	if ($result->num_rows > 0) 
	// 	{
	// 		// output data of each row
	// 		while($row = $result->fetch_assoc()) {	
	// 			echo $row[$columnName]."<br>";
	// 		}
	// 	} 
	// 	else {echo "0 results";}
	// }


	
	
