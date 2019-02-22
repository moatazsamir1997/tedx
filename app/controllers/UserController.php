<?php

include('Controller.php');
include('UserModel.php');

class UserController
{
	private $id;
	private $fname;
	private $lname;
	private $genderId; 
	private $userTypeId; 
	private $userAddressId;
	private $User = new UserModel();

	public function addUser($request)
	{
		$this->fname = $request['fname'];
		$this->lname = $request['lname'];
		$this->genderId = $request['genderId'];
		$this->userAddressId = $request['userAddressId'];

		$Users = $this->User->store($request);

		$this->config->view('UserView');
		
	}
	
	if(isset($_POST['deleteAccount']))
	{
		$requestedName = $_POST["userName"];
		
		echo '<br>';
		if ($requestedName != "") {
			$delete="DELETE FROM `user` WHERE `name` = '".$requestedName."'";
			$result = mysqli_query($conn, $delete);	
		}
		
		
		$select="SELECT * FROM `user`";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row["name"]."<br>";
			}
		} 
		else {echo "0 results";}
	}	
	
	
	if(isset($_POST['updateAccount']))
	{
		$requestedName = $_POST["userName"];
		$updatedName = $_POST["updatedName"];
		
		
		echo '<br>';
		if ($requestedName != "") {
			$update="UPDATE `user`
			SET `name` = '$updatedName'
			WHERE `name` = '$requestedName' ;";
			$result = mysqli_query($conn, $update);	
		}
		
		
		$select="SELECT * FROM `user`";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row["name"]."<br>";
			}
		} 
		else {echo "0 results";}
	}	

	
	
	
	function read($tableName,$columnName)
	{
		$select="SELECT * FROM `$tableName`";
		$result = mysqli_query($GLOBALS['conn'] ,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row[$columnName]."<br>";
			}
		} 
		else {echo "0 results";}
	}
	
}