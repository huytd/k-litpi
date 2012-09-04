<?php 

Class Controller_Site_Helloworld Extends Controller_Site_Base
{
	// List models you wanna use in your controller here
	public $ModelList = array('Core_Session', 'Core_User', 'Core_ModeratorLog');
	function indexAction()
	{
		$this->setVars(array(	'stringA' 	=> $this->Model['helloworld']->getStringA(),
								'stringB'	=> $this->Model['helloworld']->getStringB()
						     ));
		$this->setView('index.tpl'); 
	}
}

?>