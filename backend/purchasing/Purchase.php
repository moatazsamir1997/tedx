<?php
include('model/Model.php')
class Purchase extends Model implements Icrud
{  
    private $userId
    private $datePurchaseId
    private $manufactureId
    private $deliveryPersonId
    private $PaymentMethodId

    public function __construct()
    {
        $this->tableName = 'purchase';
        $this->culomnNameArr = array('userId', 'datePurchaseId', 'manufactureId', 'deliveryPersonId', 'PaymentMethodId');
    } 
    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
    

    
        
}
