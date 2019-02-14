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
	include('../Database_Connection.php');
	

	$conn = new mysqli("localhost","root","","crudtask");
	$tableName = "links";
	if(isset($_POST['add']))
	{
		$arrOfValues = array($_POST['physicalName'],$_POST['friendlyName']);
		echo "==========";var_dump($arrOfValues);echo "==========<br>";
		$arrOfcolumnNames = array("physicalName" , "friendlyName");
		if ($_POST["physicalName"] != "") {
			
			insert($conn , $GLOBALS['tableName'] , $arrOfcolumnNames ,$arrOfValues);
		}
		echo"<br>";
		read1($tableName,"physicalName","friendlyName");
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
	function read1($tableName,$columnName1,$columnName2)
	{
		$select="SELECT * FROM `$tableName`";
		$result = mysqli_query($GLOBALS['conn'] ,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {	
				echo $row[$columnName1]."  ".$row[$columnName2]."<br>";			
			}
		} 
		else {echo "0 results";}
	}
?>