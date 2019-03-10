<?php

require_once('app/Controllers/Controller.php');

class Model
{
    protected $config;
    protected $id;
    protected $name;
    protected $tableName;
    protected $columnNamesArr;
    protected $columnValuesArr;

	public function __construct(){
		$this->config = new Controller();
	}
   
    public function getData($tableName , $columnName )
    {    
        if ($this->config == NULL) {
            $this->config = new Controller();
        }
        $User = $this->config->getInstance();
        
        $query = $User->query("SELECT `id`, $columnName FROM `$tableName`");
         
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;	   
    }
    public function getUserData($id){
        
        $User = $this->config->getInstance();
        
        $query = $User->query("SELECT * FROM `User` WHERE `id` = '$id'");
      
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;	   
    }
    
   public function insert($columnNamesArr , $columnValuesArr , $tableName)
   {
    $this->config = new Controller();
    //MAKING QUOTATIONS
        function quote($str) {
            if (is_string($str)) 
            {
                return sprintf("'%s'", $str);
            }
        }
        $Model = $this->config->getInstance();
        //tokenizer
   		$colString = implode(" , ", $columnNamesArr);
        $ValuesString = implode(' , ', array_map('quote', $columnValuesArr));
   		$query = $Model->query("INSERT INTO `$tableName` ($colString) VALUES ($ValuesString)");
            
    }

   

  

}

?>