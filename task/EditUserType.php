<?php
$id=$_GET['id'];

$name='';
$age='';

$con=new mysqli("localhost","root","","crudtask");
$sql="SELECT *FROM usertype WHERE id=$id";
$result = mysqli_query($con,$sql);
if($row=mysqli_fetch_array($result))
{
	
	$name=$row['name'];
	

	
	
}






?>
<form action="applyedit.php" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
