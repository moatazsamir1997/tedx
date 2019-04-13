<?php
include('model\DBHelper.php');
include('app\interface\Icrud.php');

class Department extends DBHelper implements Icrud
{
    
    private $jobDescribtion;
    private $boardId
    
    public function __construct(){
        $this->tableName = 'Department';
        $this->culomnNameArr = array('jobDescribtion','boardId');


    }

    public function getColumnData($columnName)
    {   
        return $this->getData($this->tableName ,  $columnName );
    }


   public function store($request)
   {
    //    $this->name = $request['productType'];
    //    $this->columnNamesArr = array('name'); 		
    //    $this->columnValuesArr = array( $this->name); 			
    //    $this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
   }

   public function update($request)
    {
        # code...
    }
    public function delete($request)
    {
        # code...
    }
    public function search($request)
    {
        # code...
    }


    
}
