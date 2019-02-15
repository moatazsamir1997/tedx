<!DOCTYPE html>
<html>
	<body>
		<form method="POST" action="#">
			<h3>Add user</h3>
			<input type="text" name="name" placeholder="Enter username here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" action="#">
			<h3>Delete user</h3>
			<input type="text" name="userName" placeholder="Enter username here">
			<input type="submit" name="deleteAccount" value="delete">
		</form>	
		
		<form method="POST" action="#">
			<h3>Update user</h3>
			<input type="text" name="userName" placeholder="Enter username here">
			<input type="text" name="updatedName" placeholder="Enter updated Name">
			<input type="submit" name="updateAccount" value="update">
		</form>	
		
	</body>
</html>


<?php

	$conn = new mysqli("localhost","root","","crudtask");
	
	if(isset($_POST['add']))
	{
		$requestedName = $_POST["name"];
		if ($requestedName != "") {
			$insert="INSERT INTO user (`name` , `userTypeId`) VALUES ('$requestedName' , 1);";
			$result = mysqli_query($conn, $insert);	
		}
		
		
		$select="SELECT * FROM user";
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
	
	if(isset($_POST['deleteAccount']))
	{
		$requestedName = $_POST["userName"];
		var_dump($requestedName);
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
		var_dump($requestedName);
		var_dump($updatedName);
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

	
	
?>


