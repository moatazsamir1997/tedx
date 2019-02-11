<html>
	<body>
		<form method="POST" action="#">
			<h3>Add IDs</h3>
			<input type="text" name="TypeId" placeholder="Enter user Type Id here">
			<input type="text" name="LinkId" placeholder="Enter user Link Id here">
			<input type="submit" name="add" value="insert">
		</form>	
		
		<form method="POST" action="#">
			<h3>Delete IDs</h3>
			<input type="text" name="TypeId" placeholder="Enter user Type Id here">
			<input type="text" name="LinkId" placeholder="Enter user Link Id here">
			<input type="submit" name="delete" value="delete">
		</form>	
		
		<form method="POST" action="#">
			<h3>Update user Type Id</h3>
			<input type="text" name="TypeId" placeholder="Enter user Type Id here">
			<input type="text" name="updatedTypeId" placeholder="Enter updated user Type Id">
			
			
			<input type="submit" name="UpdateTypeId" value="update">
		</form>	
		
		
		
		<form method="POST" action="#">
			<h3>Update Link Id</h3>
			<input type="text" name="LinkId" placeholder="Enter Link Id here">
			<input type="text" name="updatedLinkId" placeholder="Enter updated Link Id">
			
			
			<input type="submit" name="UpdateLinkId" value="update">
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
			$insert="INSERT INTO usertypelinks (`userTypeId` , `linkId`) VALUES ('$requestedTypeId' , requestedLinkId);";
			$result = mysqli_query($conn, $insert);	
		}
		
		
		
		
		$select="SELECT usertypelinks.userTypeId,
		usertypelinks.linkId,
		usertype.name,
		usertype.id,
		links.physicalName,
		links.friendlyName,
		links.id FROM
		(((usertypelinks INNER JOIN usertype on
		 usertypelinks.userTypeId = usertype.id)
		  INNER JOIN links ON
		   usertypelinks.linkId = links.id)";
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				echo $row["name"];
				echo $row["physicalName"];
				echo $row["friendlyName"];	
			}
		} 
		else {echo "0 results";}
	}	
	
	
	
	//............................................................
	
	if(isset($_POST['delete']))
	{
		$requestedTypeId = $_POST["TypeId"];
		$requestedLinkId = $_POST["LinkId"];
		var_dump($requestedLinkId);
		echo '<br>';
		if ($requestedLinkId != "") {
			$delete="DELETE FROM `user` WHERE `name` = '".$requestedLinkId."'";
			$result = mysqli_query($conn, $delete);	
		}
		
		
		$select="SELECT usertypelinks.userTypeId,usertypelinks.linkId,usertype.name,usertype.id,links.physicalName,links.friendlyName,links.id FROM  (((usertypelinks INNER JOIN usertype on usertypelinks.userTypeId = usertype.id)INNER JOIN links ON usertypelinks.linkId = links.id)";;
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {

				
				echo $row["name"].$row["physicalName"].$row["friendlyName"]. "<br>";
			}
		} 
		else {echo "0 results";}
	}	
	
	
	
	
	
	
	//.................................................................
	
	
	
	
	
	
	if(isset($_POST['UpdateTypeId']))
	{
		$requestedTypeId = $_POST["TypeId"];
		$UpdatedTypeId = $_POST["updatedTypeId"];
		var_dump($requestedTypeId);
		var_dump($UpdatedTypeId);
		echo '<br>';
		if ($requestedTypeId != "") {
			$update="UPDATE `usertypelinks`
			SET `userTypeId` = '$UpdatedTypeId'
			WHERE `userTypeId` = '$requestedTypeId' ;";
			$result = mysqli_query($conn, $update);	
		}
		
		
		$select="SELECT usertypelinks.userTypeId,usertypelinks.linkId,usertype.name,usertype.id,links.physicalName,links.friendlyName,links.id FROM  (((usertypelinks INNER JOIN usertype on usertypelinks.userTypeId = usertype.id)INNER JOIN links ON usertypelinks.linkId = links.id)";;
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {

				
				echo $row["name"].$row["physicalName"].$row["friendlyName"]. "<br>";
			}
		} 
		else {echo "0 results";}
	}	
	
	
	
	
	//....................................................................
	
	
	
	if(isset($_POST['UpdateLinkId']))
	{
		$requestedLinkId = $_POST["LinkId"];
		$UpdatedLinkId = $_POST["updatedLinkId"];
		var_dump($requestedLinkId);
		var_dump($UpdatedLinkId);
		echo '<br>';
		if ($requestedLinkId != "") {
			$update="UPDATE `usertypelinks`
			SET `linkId` = '$UpdatedLinkId'
			WHERE `linkId` = '$requestedLinkId' ;";
			$result = mysqli_query($conn, $update);	
		}
		
		
		$select="SELECT usertypelinks.userTypeId,usertypelinks.linkId,usertype.name,usertype.id,links.physicalName,links.friendlyName,links.id FROM  (((usertypelinks INNER JOIN usertype on usertypelinks.userTypeId = usertype.id)INNER JOIN links ON usertypelinks.linkId = links.id)";;
		$result = mysqli_query($conn,$select);	
		if ($result->num_rows > 0) 
		{
			// output data of each row
			while($row = $result->fetch_assoc()) {

				
				echo $row["name"].$row["physicalName"].$row["friendlyName"]. "<br>";
			}
		} 
		else {echo "0 results";}
	}	
	
	
	
	
	
	
	
?>