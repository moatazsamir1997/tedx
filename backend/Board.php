<?php
require_once('backend\product\DBHelper.php');
class Board extends DBHelper implements Icrud
{
    private $academicYearId;            
    private $openingDate;        
    private $closingDate;



    public function __construct()
    {
        $this->tableName = 'board';
        $this->columnNamesArr = array('academicYearId','openingDate','closingDate');
    }

    public function store($request)
    {
        // $this->name = $request['name'];
        // $this->price = $request['price'];
        // $this->quantity = $request['quantity'];
        // $this->productTypeId = $request['productTypeId'];
		// $this->columnValuesArr = array( $this->name, $this->price, $this->quantity, $this->productTypeId); 		
		// $this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
    }

    public function update($request)
    {
        // $valueArr = array('ss', 50, 100, 44);
        // $this->dynamicUpdate($this->tableName, $this->columnNamesArr, $valueArr , $where = 'id = 1' );
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
