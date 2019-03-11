<?php
include('model/Model.php');

class ContactNumber extends Model implements Icrud
{
    private $contactNumber;
    private $contactTypeId;

    public function __construct()
    {
        $this->tableName = 'contactNumber';
        $this->culomnNamesArr = array('contactNumber', 'contactTypeId');
    }

    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}


    
}
