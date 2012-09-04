<?php
/*
 * Modified made by HuyTD
 * Changes List:
 * 	- add setView function to render with specified view (easier than use smarty directly)
 *  - add setVars function to pass variables from controller to view (easier than use smarty directly)
 *  - add array $ModelList and auto load model feature in Controller
 */
Abstract Class Controller_Site_Base Extends Controller_Core_Base 
{
	public $Model = array();
	public $ModelList = array();
	
	public function setView($view)
	{
		$this->registry->smarty->assign('contents', $this->registry->smarty->fetch($this->registry->smartyControllerContainer.$view));
		$this->registry->smarty->display($this->registry->smartyControllerGroupContainer.$view);
	}
	
	public function setVars($arr)
	{
		$this->registry->smarty->assign($arr);
	}
	
	public function __construct($registry)
	{
		
		parent::__construct($registry);
		array_push($this->ModelList, 'Core_'.$registry['controller']);
		foreach ($this->ModelList as $ClassModel)
		{
			if (class_exists($ClassModel)) 
			{
				$this->Model[substr(strtolower($ClassModel), 5)] = new $ClassModel();
				echo "<br/>Class <b>".$ClassModel."</b> inited as <b>".substr(strtolower($ClassModel), 5)."</b> !";
			}
		}
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