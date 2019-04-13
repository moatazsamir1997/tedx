<?php

require_once('app/controllers/controller.php');

require('model/Links.php');

class linksController
{
	private $config;
	private $links;
	public function __construct(){	
		$this->config = new DBHelper();
		$this->links = new links();
	}

	public function index()
	{
		// $this->config->view('linksView');
	}
	public function getPhysicalName($linkName)
	{
		$link = $this->links->getPhysicalName($linkName);
		
		return $link[0]["physicalName"];
		
	}
    
	public function store($request)
	{

		$link = $this->links->store($request);
	}
	
}


