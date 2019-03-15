<?php
include('product\DBHellper.php');
class User extends DBHelper implements Icrud
{
	private $fname;  
	private $lname;  
	private $email; 
	private $pwd; 
	private $userTypeId; 
	private $userAddressId; 
	private $genderId; 
	private $deparmentId; 
	private $eventIdArr; 
   
	public function __construct()
	{
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

   public function getUserId($request)
   {
		$columnName = $request['columnName'];
		$columnValue =['columnValue'];
		$this->getId($this->tableName , $columnName , $columnValue)
   }

}

?>