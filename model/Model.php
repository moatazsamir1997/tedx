<?php

require_once('app/Controllers/Controller.php');

class Model
{
	protected $config;

	public function __construct(){
		$this->config = new Controller();
	}
   
   public function getUserData($id){
	   
       $User = $this->config->getInstance();
       
       $query = $User->query("SELECT * FROM `User` WHERE `id` = '$id'");
     
	   
	   $data = $query->fetchAll(PDO::FETCH_ASSOC);
	   
	   return $data;	   
   }

   public function insert($columnNamesArr , $columnValuesArr , $tableName)
   {
        function quote($str) {
            if (is_string($str)) 
            {
                return sprintf("'%s'", $str);
            }
        }
        $Model = $this->config->getInstance();
   		$colString = implode(" , ", $columnNamesArr);
        $ValuesString = implode(' , ', array_map('quote', $columnValuesArr));
   		$query = $Model->query("INSERT INTO `$tableName` ($colString) VALUES ($ValuesString)");
            
    }

   

  

}

?>