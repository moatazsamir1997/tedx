<?php
require_once('backend\product\DBHelper.php');
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
        $this->columnNamesArr = array('fname','lname','userName','email','pwd'
         ,'userTypeId','userAddressId','genderId','departmentId','eventId'
    );
    }

    public function store($request)
    {
        $this->fname = $request['fname'];
        $this->lname = $request['lname'];
        $this->fname = $request['userName'];
        $this->email = $request['email'];
        $this->pwd = $request['pwd'];
       
        $this->lname = $request['userTypeId'];
        $this->email = $request['userAddressId'];
        $this->pwd = $request['genderId'];
        $this->lname = $request['departmentId'];
        $this->email = $request['eventId'];
        $this->columnValuesArr = array( $this->fname, $this->lname,$this->userName, $this->email, $this->pwd
        ,$this->userTypeId,$this->userAddressId,$this->genderId,$this->departmentId,$this->eventId);	
		$this->insert($this->columnNamesArr , $this->columnValuesArr , $this->tableName);
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
