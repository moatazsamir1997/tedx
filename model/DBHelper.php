<?php

require_once('app/controllers/controller.php');

class DBHelper
{
    protected $config;
    protected $id;
    protected $name;
    protected $tableName;
    protected $columnNamesArr;
    protected $columnValuesArr;
    protected $createdDate;
    protected $lastUpdatedDate;
    protected $isDeleted;

   
    public function getData($tableName , $columnName)
    {    
        $User = controller::getInstance();
        
        $query = $User->query("SELECT `id`, $columnName FROM `$tableName`");
         
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;	   
    }

    public function getId($tableName , $columnName , $columnValue)
    {
        
        $User = controller::getInstance();;
        
        $query = $User->query("SELECT `id` FROM `$tableName` WHERE `$columnName` = '$columnValue' ");
         
        $data = $query->fetch(PDO::FETCH_ASSOC);
        
        return $data;	   
    }

    public function getAllById($tableName,$id){
        
        $User = controller::getInstance();
        
        $query = $User->query("SELECT * FROM `$tableName` WHERE `id` = '$id'");
      
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;	   
    }
    public function getByColumn($tableName, $column , $vlaue , $columns = '*'){

        $User = controller::getInstance();
        $sql = "SELECT $columns FROM `$tableName` WHERE `$column` = '$vlaue'";
        $query = $User->query($sql);
      
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;	   
    }

    public function getSearchResults($tableName , $columnName , $searchString)
	{
        $DBInstance = controller::getInstance();
		$query = $DBInstance->query("SELECT * FROM `$tableName` WHERE `$columnName` LIKE '%$searchString%'");

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
    
   public function insert($columnNamesArr , $columnValuesArr , $tableName)
   {
        
        //MAKING QUOTATIONS
        function quote($str) {
            if (is_string($str)) 
            {
                return sprintf("'%s'", $str);
            }
        }
        $Model = controller::getInstance();
        //tokenizer
   		$colString = implode(" , ", $columnNamesArr);
        $ValuesString = implode(' , ', array_map('quote', $columnValuesArr));
        $sql = "INSERT INTO `$tableName` ($colString) VALUES ($ValuesString)";
        var_dump($sql);
   		$query = $Model->query("INSERT INTO `$tableName` ($colString) VALUES ($ValuesString)");
            
    }

    public function dynamicDelete($tableName, $columnName, $value)
    {
        if ($this->config == NULL) {
            
        }
        $model = controller::getInstance();
        $model->query("UPDATE `$tableName` SET `isDeleted`= 1 WHERE `$columnName` = $value");
    }
    
    
    
    public function dynamicUpdate($tableName, $columnNamesArr, $valueArr , $where = '1' )
    {
        if ($this->config == NULL) {
            
        }
        $model = controller::getInstance();
        $arraySET =[];
        //casting array elements
        for ($i=0; $i < count($columnNamesArr) ; $i++) { 
            if (is_string($valueArr[$i])) {
                $valueArr[$i] = sprintf("'%s'" , $valueArr[$i]);
            }
            $myString = $columnNamesArr[$i]. ' = ' .$valueArr[$i];
            array_push($arraySET , $myString);
        }
        $stringSET = implode(" , ", $arraySET);
        $sql = "UPDATE `$tableName` SET $stringSET WHERE $where ";
        
        $model->query($sql);
    }

    
    public function SimpleUpdate($tableName, $columnName, $value, $WHERE_ColumnName, $WHERE_Value)
    {
        $model = controller::getInstance();
        
        $model->query("UPDATE `$tableName` SET `$columnName` = $value WHERE `$WHERE_ColumnName` = $WHERE_Value");
    }
  

}








?>