<?php
include('model/Model.php');

class PaymentMethodOptionValue extends Model implements Icrud
{
    public function __construct()
    {
        $this->tableName = 'paymentMethodOptionValue';
        $this->culomnNamesArr = array('paymentMethodOptionId' , 'purchaseId' , 'value');
    }

    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
}
