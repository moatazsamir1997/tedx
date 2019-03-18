<?php
require_once('backend\product\DBHelper.php');
include('app\interface\Icrud.php');
class Product extends DBHelper implements Icrud
{
    private $price;
    private $quantity;
    private $currencyId;
    private $productTypeId;
    private $productOptionsIds;

    public function __construct()
    {
        $this->tableName = 'Product';
        $this->productOptionsIds = [];
        $this->columnNamesArr = array('name','price','quantity','productTypeId');
    }
    
    public function store($request)
    {
        $this->name = $request['name'];
        $this->price = $request['price'];
        $this->quantity = $request['quantity'];
        $this->productTypeId = $request['productTypeId'];
		$this->columnValuesArr = array( $this->name, $this->price, $this->quantity, $this->productTypeId); 		
		$this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
    }

    public function update($request)
    {
        $valueArr = array('ss', 50, 100, 44);
        $this->dynamicUpdate($this->tableName, $this->columnNamesArr, $valueArr , $where = 'id = 1' );
    }

    public function getProducts()
    {
        return $this->getData($this->tableName , 'name');
    }

    public function delete($request){}
    public function search($request){}

   
    
}
