<?php
include('model/Model.php')
class DatePurchase extends Model implements Icrud
{  
    private $dateTime

    public function __construct()
    {
        $this->tableName = 'DatePurchase';
        $this->culomnNameArr = array('dateTime');
    } 
    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
    
     
}
