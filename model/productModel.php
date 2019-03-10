<?php
require_once('model\model.php');
class ProductModel extends Model
{
    private $price;
    private $quantity;
    private $currencyId;
    private $productTypeId;

    public function __construct()
    {
        $this->tableName = 'Product';
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

    
}
