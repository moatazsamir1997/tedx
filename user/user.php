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

if($_SESSION['password']==$_POST['password']){

	if($_POST['password']==$_POST['confirmPassword']){

		$sqlAdd="DELETE FROM address WHERE userId = '".$_SESSION['userId']."' ";
		if(mysqli_query($conn,$sqlAdd)){

			if($_SESSION['typeId']==2){

				$sqlParent="DELETE FROM parent WHERE userId = '".$_SESSION['userId']."' ";
				if(mysqli_query($conn,$sqlParent)){

					//Check if there a children for this account first:
					$child="SELECT * FROM child WHERE userId='".$_SESSION['userId']."'";
					if(mysqli_num_rows($child)>0){ 

						$sqlChild="DELETE FROM child WHERE userId = '".$_SESSION['userId']."' ";
						if(mysqli_query($conn,$sqlChild)){
							$check = 1;
						}
						else{
							echo "ERROR: Could not able to execute $sqlChild. ". mysqli_error($conn);
						}  
					}
					else if(mysqli_num_rows($child)==0){
						$check = 1;
					}          
				}
				else{
					echo "ERROR: Could not able to execute $sqlParent. ". mysqli_error($conn);
				}            
			}
			else if($_SESSION['typeId']==3){

				$sqlEmp="DELETE FROM employee WHERE userId = '".$_SESSION['userId']."' ";
				if(mysqli_query($conn,$sqlEmp)){

					$sqlUploads="DELETE FROM uploads WHERE userId = '".$_SESSION['userId']."' ";
					if(mysqli_query($conn,$sqlUploads)){
						$check = 1;
					}
					else{
						echo "ERROR: Could not able to execute $sqlUploads. ". mysqli_error($conn);
					}            
				}
				else{
					echo "ERROR: Could not able to execute $sqlEmp. ". mysqli_error($conn);
				}        
			}
		}
		else{
			echo "ERROR: Could not able to execute $sqlAdd. ". mysqli_error($conn);
		}

		
		if($check==1){

			$lastSql="DELETE FROM user WHERE id = '".$_SESSION['userId']."' ";
			if(mysqli_query($conn,$sqlUploads)){
				session_destroy();
				header("location:../html/Welcome_Page.php");
			}
			else{
				echo "ERROR: Could not able to execute $lastSql. ". mysqli_error($conn);
			}
		}
	}
	else{
		echo"Sorry, you have entered the password wrong<br>";
	}
}
}
mysqli_close($conn); ?>
<p>

</p>


	</body>
</html>