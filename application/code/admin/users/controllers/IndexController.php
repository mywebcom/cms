<?php 
class Users_IndexController
	extends CG_Controller_Action
{
	public function loginAction()
	{
		$this->_helper->layout()->disableLayout();
    	$this->_helper->viewRenderer->setNoRender(true);
	}
}