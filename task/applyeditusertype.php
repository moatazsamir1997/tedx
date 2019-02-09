<?php
$con=new mysqli("localhost","root","","crudtask");
if(isset($_POST['submit']))
{
	$name1=$_POST['name'];
	$id=$_POST ['id'];
	
	$sql="UPDATE client SET name='$name1' WHERE ID=$id";
	$result = mysqli_query($con,$sql);
	
	header("Location:display.php");
}
?> 