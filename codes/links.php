<html>
	<body>
		<form method="POST" action="#">
			<h3>Add link</h3>
			<input type="text" name="physicalName" placeholder="Enter Physical Name">
			<input type="text" name="friendlyName" placeholder="Enter Friendly Name">
			<input type="submit" name="add" value="insert">
		</form>	
		

		<form method="POST" action="#">
			<h3>Delete link</h3>
			<input type="text" name="physicallink" placeholder="Enter physical link">
			<input type="submit" name="deletelink" value="delete">
		</form>	
		
		<form method="POST" action="#">
			<h3>Update link</h3>
			<input type="text" name="link" placeholder="Enter Physical link">
			<input type="text" name="updatedLink" placeholder="Enter updated link">
			<input type="submit" name="updateAccount" value="update">
		</form>	
		
	</body>
</html>


<?php


	$conn = new mysqli("localhost","root","","crudtask");
	
	if(isset($_POST['add']))
	{
		$physicalName = $_POST["physicalName"];
		$friendlyName = $_POST["friendlyName"];
		if ($physicalName != "") {
			$insert="INSERT INTO links (`physicalName` , `friendlyName`) VALUES ('$physicalName' , '$friendlyName');";
			$result = mysqli_query($conn, $insert);	
		}
		$select="SELECT * FROM links";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row["physicalName"]."  ".$row["friendlyName"]."<br>";			
			}
		} 
		else {echo "0 results";}
	}	
	
	if(isset($_POST['deletelink']))
	{
		$requestedName = $_POST["physicallink"];
		echo '<br>';
		if ($requestedName != "") {
			$delete="DELETE FROM `links` WHERE `physicalName` = '".$requestedName."'";
			$result = mysqli_query($conn, $delete);	
		}
		$tableName = "links";
		$columnName = "physicalName";
		read($tableName,$columnName);
		
	}	
	
	
	if(isset($_POST['updateAccount']))
	{
		$requestedLink = $_POST["link"];
		$updatedLink = $_POST["updatedLink"];
	
		echo '<br>';
		if ($requestedLink != "") {
			$update="UPDATE `links`
			SET `physicalName` = '$updatedLink'
			WHERE `physicalName` = '$requestedLink';";
			$result = mysqli_query($conn, $update);	
		}
		
		
		$select="SELECT * FROM links";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row["physicalName"]."  ".$row["friendlyName"]."<br>";			
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
?>