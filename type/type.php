


<html>
	<body>
		<form method="POST" >
			<h3>Add type</h3>
			<input type="text" name="name" placeholder="Enter type here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" >
			<h3>Delete type</h3>
			<input type="text" name="deletedName" placeholder="Enter type here">
			<input type="submit" name="deleteType" value="delete">
		</form>	
		
		<form method="POST" >
			<h3>Update user</h3>
			<input type="text" name="typeName" placeholder="Enter username here">
			<input type="text" name="updatedName" placeholder="Enter updated Name">
			<input type="submit" name="updateType" value="update">
		</form>		

<p>

</p>


	</body>
</html>


<?php

	$conn = new mysqli("localhost","root","","crudtask");
	
	if(isset($_POST['add']))
	{
		$requestedName = $_POST["name"];
		var_dump($requestedName);
		if ($requestedName != "") {
			$insert="INSERT INTO usertype (`name`) VALUES ('$requestedName');";
			$result = mysqli_query($conn, $insert);	
		}
		
		
		$select="SELECT * FROM `usertype`";

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
	
	if(isset($_POST['deleteType']))
	{
		$requestedName = $_POST["deletedName"];
		echo '<br>';
		if ($requestedName != "") 
		{
			$select="SELECT `id`
					 FROM `usertype` 
					 WHERE `name`='$requestedName'";
			//user
			$delete2="DELETE FROM `user` WHERE `userTypeId` = ($select)";
			$result2 = mysqli_query($conn, $delete2);
			//usertypeLinks
			$delete3="DELETE FROM `usertypelinks` WHERE `userTypeId` = ($select)";
			$result3 = mysqli_query($conn, $delete3);	
			//usertype		 
			$delete="DELETE FROM `usertype` WHERE `name` = '$requestedName'";
			$result = mysqli_query($conn, $delete);	
		 
				
			
			if (mysqli_connect_errno()) {
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}
			
			if (!mysqli_query($conn, $delete)) {
				echo "<br>";
				printf("Errormessage: %s\n", mysqli_error($conn));
			}
			
		}
		
		echo "<br><br>";
		$select="SELECT * FROM `usertype`";
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

	if(isset($_POST['updateType']))
	{
		$requestedName = $_POST["typeName"];
		$updatedName = $_POST["updatedName"];
		var_dump($requestedName);
		var_dump($updatedName);
		echo '<br>';
		if ($requestedName != "") {
			$update="UPDATE `usertype`
			SET `name` = '$updatedName'
			WHERE `name` = '$requestedName' ;";
			$result = mysqli_query($conn, $update);	
		}
		
		
		$select="SELECT * FROM `usertype`";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row["name"]."<br>";
			}
		} 
		else {echo "0 results";
		}
	}	

	
?>