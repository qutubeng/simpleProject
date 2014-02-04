<?php
class loginController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function indexAction(){
	
		$this->view->renderView(array(
			'title' => "Sign in at ".$this->view->config['domain']['name'],		
		));
	}
	public function forgetPasswordAction(){
		$this->view->renderView();
	}
}