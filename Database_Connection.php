<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password,"crudtask");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }




    echo enterArgumentsAsUWant(array("a way to ", "enter arguments as many as u want in form of array"));


	function enterArgumentsAsUWant($var)
	{
		foreach ($var as $key) {
			echo "<br>".$key."<br>";
		}
	}

?>

