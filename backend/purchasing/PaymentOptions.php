<?php 
include('model/model.php');

class PaymentOptions extends Model implements Icrud
{
    private $dataType;

    public function __construct()
    {
        $this->tableName = 'PaymentOptions';
        $this->columnNamesArr = array('id' , 'name' , 'dataType');
    }

    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}

}
