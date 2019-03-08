<?php
include('model.php');

class ProductTypeModel extends Model
{
    
    private $columnName;
    public function __construct(){
        $this->tableName = 'ProductType';
    }

    public function getColumnData( $columnName)
    {   
        return $this->getData($this->tableName ,  $columnName );
    }


   public function store($request)
   {
       $this->name = $request['productType'];
       $this->columnNamesArr = array('name'); 		
       $this->columnValuesArr = array( $this->name); 			
       $this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
   }


    
}
