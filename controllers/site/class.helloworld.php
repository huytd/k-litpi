<?php 

Class Controller_Site_Helloworld Extends Controller_Site_Base
{
	function indexAction()
	{
		$this->registry->smarty->assign(array(	'stringA' 	=> $this->Model->getStringA(),
												'stringB'	=> $this->Model->getStringB()
											  ));
		
		$this->registry->smarty->assign('contents', $this->registry->smarty->fetch($this->registry->smartyControllerContainer . 'index.tpl'));
		$this->registry->smarty->display($this->registry->smartyControllerGroupContainer.'index.tpl'); 
	}
}

?>