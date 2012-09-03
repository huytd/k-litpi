<?php
Class Core_HelloWorld extends Core_Object
{
	private $strA = 'This is string A';
	private $strB = 'This is string B';
	
	public function getStringA()
	{
		return $this->strA;
	}
	
	public function getStringB()
	{
		return $this->strB;
	}
} 
?>