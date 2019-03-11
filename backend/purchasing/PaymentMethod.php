<?php
include('model\model.php');
class PaymentMethod extends Model implements Icrud
{
    public function __construct()
    {
        $this->tableName = 'paymentMethod';
        $this->$columnNamesArr = array('id','name');
    }

    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
}