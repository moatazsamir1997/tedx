<?php
	$con=new mysqli("localhost","root","","crudtask");
	
	
	if(isset($_POST['submit']))
	{
		$requestedName = $_POST["name"];
	
		$insert="INSERT INTO user (name , userTypeId) VALUES ('$requestedName' , 1);";
		
		$result2 = mysqli_query($con, $insert);	
		
		$select="SELECT * FROM user";
		
		$result = mysqli_query($con,$select);	
		if ($result->num_rows > 0) {
		
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{	
				echo $row["name"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}	
	}

?>


<html>
	<body>
		<div class="Loginform">	
			<h1>Login here</h1>
					<br><br>		
				<form method="POST" action="#">
					<p>user name </p>
					<input type="text" name="name" placeholder="Enter username here">
					<br><br><br>
					<input type="submit" name="submit" value="Login">
					<br><br><br>
				</form>	
		</div>

<p>

</p>


	</body>
</html>