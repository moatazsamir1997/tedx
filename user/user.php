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
					<p>password </p>
					<input type="password" name="password">

					<br><br><br>
					<input type="submit" name="submit" value="Login">
					<br><br><br>
				</form>	

		</div>
		<?php// deleting user ?>
		<div class="deleteAccount">
		<h1>Delete Here</h1>
		<br><br>
		
		<form name="deleteForm" action="" method="post">
           <b> Enter your password:</b>
            <input type="password" name="password" required>

            <b>Confirm your password:</b>
            <input type="password" name="confirmPassword" required>

            <input type="submit" name="submit" value="Delete Account" id="Delete_Button">
        </form>
		</div>
	<?php	if(isset($_POST['submit'])){

		$deleteAccount="DELETE FROM address WHERE userId = '".$_SESSION['userId']."' ";
	

		
	
}
}
mysqli_close($conn); ?>
<p>

</p>


	</body>
</html>