<?php
$con = mysqli_connect("localhost","root","","ajax");
$sql ="Select user.FirstName, user.LastName, course.Name, grade.Grade from user inner join grade on student_id=user.id inner join course on course_Id=course.ID";
$term=$_POST['term'];
echo"<table border=1 width=100%>
		<tr><th>First Name</th><th> Last Name </th><th> Course </th><th>Grade</th></tr>";
		if(!empty($term)){
			$sql=$sql." WHERE FirstName LIKE'%".$term."%' or LastName LIKE'%"
			.$term."%' or Course.Name LIKE '%".$term."%'";
		}
		if($result =mysqli_query($con,$sql)){
			if(mysqli_num_rows($result)>0)
			{ 
				while($row = mysqli_fetch_array($result)){
				echo"<tr><td>".$row['FirstName']."</td><td>".
				$row['LastName']."</td><td>".$row["Name"]."</td><td>".
				$row["Grade"]."</td></tr>";
				}
			}
			else{
				echo"<tr><td colspan=4>NO matches found</td></tr>";
			}
		}
		else{
			echo "<tr><td colspan=4> ERROR: Could not able to excute $sql. " . 
			mysqli_error($con)."</td></tr>";
		}
		echo"</table>";
		mysqli_close($con);
		?>