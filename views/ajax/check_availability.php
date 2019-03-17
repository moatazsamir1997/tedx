<?php

$conn=new mysqli("localhost","root","","ajax");
if (!empty($_POST["username"]))
{
	$query="SELECT * FROM user WHERE username='".$_POST["username"]."'";
	$result = mysqli_query($conn,$query);
	$user_count =mysqli_num_rows($result);
	if($user_count>0)
	{
		echo"<div class='username-taken'> Username taken, try another one.</div>";
	}
	else
	{
		echo "<div class='username-ok'> Username OK. </div>";
	}
}
?>
	