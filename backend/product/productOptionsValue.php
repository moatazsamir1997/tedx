<?php
include('backend\product\DBHelper.php');
include('app\interface\Icrud.php');
class ProductOptionsValue extends DBHelper implements Icrud
{
    private $value;
    private $PrOPId;
    private $purchaseId;

    public function __construct()
    {
        $this->tableName = "productoptionsvalue";
        $this->columnNamesArr = array('value', 'productSelectedOptionsId', 'purchaseId');
    }

    public function store($request)
    {
        # code...
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
