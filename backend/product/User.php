<?php
include('product\DBHellper.php');
include('app\interface\Icrud.php');

class User extends DBHelper implements Icrud
{
	private $fname;  
	private $lname;  
	private $email; 
	private $pwd; 
	private $userTypeId; 
	private $userAddressId; 
	private $genderId; 
	private $departmentId; 
	private $eventIdArr; 
   
	public function __construct($id)
	{
		$this->id = $id;
		$this->tableName = 'User';
		$this->columnNamesArr = array('fname', 'lname', 'email', 'pwd', 'userTypeId', 'userAddressId', 'genderId', 'departmentId');
		$this->eventIdArr = [];

	}
	
	public function update($request){}
	public function delete($request){}
	public function search($request){}

   public function store($request)
   {   	
   		$this->fname = $request['fname'];
		$this->lname = $request['lname'];
		$this->columnNamesArr = array('fname','lname'); 		
		$this->columnValuesArr = array( $this->fname , $this->lname); 		
		$this->insert($this->columnNamesArr , $this->columnValuesArr , "user");
   }

   public function getEventsUserAttended($id)
   {
		$this->getAllById($this->tableName,$id);
   }

   public function getUserId($request)
   {
		$columnName = $request['columnName'];
		$columnValue =['columnValue'];
		$this->getId($this->tableName , $columnName , $columnValue)
   }

}

?>