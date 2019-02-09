


<html>
	<body>
		<form method="POST" action="#">
			<h3>Add user</h3>
			<input type="text" name="name" placeholder="Enter username here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" action="#">
			<h3>Delete user</h3>
			<input type="text" name="delete" placeholder="Enter username here">
			<input type="submit" name="delete" value="delete">
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
	
	if(isset($_POST['delete']))
	{
		$requestedName = $_POST["delete"];
		if ($requestedName != "") {
			$delete="DELETE FROM `user` WHERE `name` = '$requestedName';";
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
	
?>