<?php

require_once('app/Controllers/Controller.php');

class UserModel
{
	protected $config;

	public function __construct(){
		$this->config = new Controller();
	}
   
   public function getAllUser($id){
	   
       $User = $this->config->getInstance();
       
       $query = $User->query("SELECT * FROM `User` WHERE `id` = '$id'");
     
	   
	   $data = $query->fetchAll(PDO::FETCH_ASSOC);
	   
	   return $data;	   
   }

   public function store($request)
   {
   		$User = $this->config->getInstance();
   		
   		// $fname = filter_var($request['fname'], FILTER_SANITIZE_STRING);
   		// $lname = filter_var($request['lname'], FILTER_SANITIZE_STRING);
   		$fname = $request['fname'];
		$lname = $request['lname'];
		var_dump($request);
		
   		$query = $User->query("INSERT INTO `User` (`fname`,`lname`) VALUES ('$fname','$lname')");
   }

  

}

?>