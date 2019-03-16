<?php
include('product\DBHellper.php')
class Event extends DBHelper implements Icrud
{  
    private $date;
    private $eventStart;
    private $eventEnd;
    private $addressId;
    private $academicYearId;
    private $userId;
   


    public function __construct()
    {
        $this->tableName = 'event';
        $this->culomnNameArr = array('date', 'eventStart', 'eventEnd', 'addressId', 'academicYearId','userId');
    } 
    public function store($request){}
    public function update($request){}
    public function delete($request){}
    public function search($request){}
    

    
        
}
