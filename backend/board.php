<?php
include('product\DBHelper.php');

class Board extends DBHelper implements Icrud
{
    private $openingDate
    private $closingDate
    private $departmentIdArray;

    public function __construct()
    {
        $this->tableName = 'Board';
        $this->columnNamesArr = array('openingDate','closingDate');
        $this->departmentIdArray = [];

    }


    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}

    
}
