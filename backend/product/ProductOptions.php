<?php
include('backend\product\DBHelper.php');
include('app\interface\Icrud.php');
class ProductOptions extends DBHelper implements Icrud
{
    private $dataType;
    private $productIds[];

    public function __construct()
    {
        $this->tableName = "productoptions";
        $this->columnNamesArr = array('name','dataType');
        $this->productIds = [];
    }

    public function store($request)
    {
       $this->name = $_POST['name'];
       $this->dataType = $_POST['dataType'];
       $this->columnValuesArr = array( $this->name, $this->dataType); 		
       $this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);

    }

    public function update($request){}
    public function delete($request){}
    public function search($request){}
}
