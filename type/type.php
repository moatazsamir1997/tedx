


<html>
	<body>
		<form method="POST" action="#">
			<h3>Add type</h3>
			<input type="text" name="name" placeholder="Enter type here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" action="#">
			<h3>Delete type</h3>
			<input type="text" name="typeName" placeholder="Enter type here">
			<input type="submit" name="deleteType" value="delete">
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
			$insert="INSERT INTO type (`name`) VALUES ('$requestedName');";
			$result = mysqli_query($conn, $insert);	
		}
		
		
		$select="SELECT * FROM type";
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
		$requestedName = $_POST["typeName"];
		var_dump($requestedName);
		echo '<br>';
		if ($requestedName != "") {
			$delete="DELETE FROM `type` WHERE `name` = '".$requestedName."'";
			$result = mysqli_query($conn, $delete);	
		}
		
		
		$select="SELECT * FROM `type`";
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