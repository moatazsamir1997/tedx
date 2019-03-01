<?php

require_once('app/Controllers/Controller.php');
 include('model\Model.php');
class UserModel extends Model
{
	private $id;  
	private $fname;  
	private $lname;  
	private $tableNames; 
   
	public function getUserData($id){
	   
		$User = $this->config->getInstance();
		
		$query = $User->query("SELECT * FROM `User` WHERE `id` = '$id'");
	  
		
		$data = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return $data;	   
	}

   public function store($request)
   {   	
   		$this->fname = $request['fname'];
		$this->lname = $request['lname'];
		$this->columnNamesArr = array('fname','lname'); 		
		$this->columnValuesArr = array( $this->fname , $this->lname); 		
		$this->insert($this->columnNamesArr , $this->columnValuesArr , "user");
   }

   

  

}

?>