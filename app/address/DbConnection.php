<?php
Class DbConnection{
    function getdbconnect(){
        $conn = mysqli_connect("localhost","root","","crudtask") or die("Couldn't connect");

        return $conn;
    }
}
?>