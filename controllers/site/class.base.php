<?php

Abstract Class Controller_Site_Base Extends Controller_Core_Base 
{
	public $Model = 0;
	
	public function __construct($registry)
	{
		
		parent::__construct($registry);
		$modelN = 'Core_'.$registry['controller'];
		$this->Model = new $modelN();
	}

	protected function notfound()
	{
		
		die('Not found');
		exit();
	}
	
	protected function notpermission()
	{
		
		die('not permission');
		exit();
	}
	
}

?>