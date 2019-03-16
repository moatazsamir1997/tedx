<?php

require_once('app/Controllers/Controller.php');
 include('model\Model.php');
class UserModel extends Model
{
	private $id;  
	private $name;  
	private $parentId;  
   
	public function getAddress($id , $placeName ="")
	{
		$User = $this->config->getInstance();
		while($id != 0) 
		{
			$query = $User->query("SELECT `name` , `parentId` FROM `address` WHERE `id` = '$id'"); 
			$data = $query->fetch(PDO::FETCH_ASSOC);
			$id = $data['parentId'];
			$placeName .= $data['name']." ";
		}
		return $placeName;
		
	}


  

}

?>