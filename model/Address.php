<?php
include('DBHelper.php');

class Address extends DBHelper implements Icrud
{

    private $parentId;

    public function __construct()
    {
        $this->tableName = 'Address';
        $this->columnNamesArr = array('name','parentId');
    }


    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}

    
}