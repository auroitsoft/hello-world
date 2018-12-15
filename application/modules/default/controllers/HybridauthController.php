<?php

class Default_HybridauthController extends Zend_Controller_Action{
	
	public function init()
	{
		$this->_options= $this->getInvokeArg('bootstrap')->getOptions();
	}

	/**
	 * @name authhibrAction
	 *
	 * This method is used to login through oAuth provider
	 *
	 *  @author Mainak
	 *  @version 1.0
	 */
	public function loginauthAction()
	{
		header("Location: http://www.google.com/");
		echo "hello i am in backend";
		// $this->view->gg = sapp_Hybridauth::_login();
		$email = $this->getRequest()->getParam('user_email');

		// if($msg !='')
		// $this->view->msg = $msg;

		// $this->view->messages = $this->_helper->flashMessenger->getMessages();


		//--------import user model---------//

		//---------query user model with email recieved in request-----//

		//---------if email is found, create session()---------//
		//---------redirect to /welcome-------//
		//--------else return error msg-------------//
			
	}
	/**
	 *

}

?>