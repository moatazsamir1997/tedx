<?php
require_once('backend\product\DBHelper.php');
class Links extends DBHelper implements Icrud
{
    private $physicalName;        
    private $friendlyName;
    private $htmlCode;
    private $userTypeIdArr;

   


    public function __construct()
    {
        $this->tableName = 'Links';
        $this->userTypeIdArr = [];
        $this->columnNamesArr = array('physicalName','friendlyName','htmlCode');
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
