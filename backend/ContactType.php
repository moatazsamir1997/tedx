<?php
include('model/Model');

class ContactType extends DBHelper implements Icrud
{


    public function __construct()
    {
        $this->tableName = 'contactType';
        $this->culomnNamesArr = array();
    }


    
}
