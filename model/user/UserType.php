<?php
include('model\DBHelper.php');
include('app\interface\Icrud.php');

class UserType extends DBHelper implements Icrud
{
    
    private $parentId;
    private $linkIdArr;

    
    public function __construct(){
        $this->tableName = 'UserType';
        $this->linkIdArr = [];
        $this->columnNamesArr = array('parentId','linkId');

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
