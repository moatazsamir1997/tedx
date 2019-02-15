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


<<<<<<< HEAD


    echo enterArgumentsAsUWant(array("a way to ", "enter arguments as many as u want in form of array"));


	function enterArgumentsAsUWant($var)
	{
		foreach ($var as $key) {
			echo "<br>".$key."<br>";
		}
	}

=======
    function insert($conn , $tableName , $arrOfcolumnNames ,$arrOfValues)
    {
        
        $SqlStringOfColumnNames = arrToString($arrOfcolumnNames, "`" , "," , TRUE);
        $SqlStringOfvalues = arrToString($arrOfValues, "'" , "," , FALSE);
        $insert="INSERT INTO $tableName ($SqlStringOfColumnNames) VALUES ($SqlStringOfvalues);";
        mysqli_query($conn, $insert);	
    }



    
    function arrToString($arrayOfelements, $Quotation , $separatorType , $convertAllToStrings)
    {
        //$Quotation = shape_Of_Quotation_Surrounding_Word  // (`) wala (") wala (')
        //$separatorType stands for separatorType: for example is فصلة : $separatorType = ",";
        $myString = "";
        $st = $separatorType;
        $q = $Quotation;
        foreach ($arrayOfelements as $key) 
        {
            echo" quatation before = ";echo"( $q )";
            if (!$convertAllToStrings) 
            {
                if(!is_string($key)) 
                {
                    $q="";
                    echo "   key{";echo"$key";echo "}   ";
                }
                else {$q=$Quotation;}
            } 
            echo" quatation after = ";echo"( $q )";echo"<br>";
            if ($key != end($arrayOfelements)) {
                $myString .= "$q".$key."$q"."$st"; 
            }
            else {
                $myString .= "$q".$key."$q";
            }   
        }
		return $myString;
    }
>>>>>>> foad
?>

