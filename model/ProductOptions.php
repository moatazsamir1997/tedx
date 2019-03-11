<?php
include('model.php');
include('app\interface\Icrud.php');
class ProductOptions extends Model implements Icrud
{
    private $dataType;

    public function __construct()
    {
        $this->tableName = "productoptions";
        $this->columnNamesArr = array('name','dataType');
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
