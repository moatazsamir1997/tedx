<html>
	<body>
		<form method="POST" action="#">
			<h3>Add IDs</h3>
			<input type="text" name="TypeId" placeholder="Enter user Type Id here">
			<input type="text" name="LinkId" placeholder="Enter user Link Id here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" action="#">
			<h3>Delete a row</h3>
			<input type="text" name="userTypeLinksId" placeholder="Enter userTypeLink Id here">
			<input type="text" name="LinkId" placeholder="Enter user Link Id here">
			<input type="submit" name="delete" value="delete">
		</form>	
		
		
		
		
		
		
		
		
	</body>
</html>


<?php
	


	$conn = new mysqli("localhost","root","","crudtask");
	if(isset($_POST['add']))
	{
		$requestedTypeId = $_POST["TypeId"];
		$requestedLinkId = $_POST["LinkId"];

		if ($requestedTypeId != "") 
		{
			$insert = 'INSERT INTO `usertypelinks` (`userTypeId`, `linkId`) VALUES ( "'.$requestedTypeId.'",  "'.$requestedLinkId.'")';
			$result = mysqli_query($conn, $insert);	
			
			$tableName = "usertypelinks";
			$columnName = "userTypeId";
			read($tableName,$columnName);
		}
		
	
	}	
	
	
	
	//............................................................
	
	if(isset($_POST['delete']))
	{
		$requestedLinkId = $_POST["LinkId"];
		$userTypeLinksId = $_POST['userTypeLinksId'];
		echo '<br>';
		if ($userTypeLinksId != "" && $requestedLinkId != "") {
			$delete="DELETE FROM `usertypelinks` WHERE `userTypeId` = '$userTypeLinksId' && `linkId` = '$requestedLinkId'";
			$result = mysqli_query($conn, $delete);	
			$tableName = "usertypelinks";
			$columnName = "userTypeid";
			read($tableName,$columnName);
		}
		
	
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