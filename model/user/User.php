<?php
require_once('model\DBHelper.php');
class User extends DBHelper implements Icrud
{
    private $fname;            
    private $lname;        
    private $userName;
    private $email;
    private $pwd;
    private $userTypeId;
    private $userAddressId;
    private $genderId;
    private $departmentId;
    private $eventId;



    public function __construct()
    {
        $this->tableName = 'user';
        $this->columnNamesArr = array('name','userName','email','userTypeId','userAddressId','genderId','departmentId','eventId');
    }

    public function store($request)
    {
        // $this->name = $request['name'];
        // $this->price = $request['price'];
        // $this->quantity = $request['quantity'];
        // $this->productTypeId = $request['productTypeId'];
		// $this->columnValuesArr = array( $this->name, $this->price, $this->quantity, $this->productTypeId); 		
		// $this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
    }

    public function update($request)
    {
        // $valueArr = array('ss', 50, 100, 44);
        // $this->dynamicUpdate($this->tableName, $this->columnNamesArr, $valueArr , $where = 'id = 1' );
    }

    public function delete($request)
    {
        # code...
    }
    public function search($request)
    {
        # code...
    }

    
}
