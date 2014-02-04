<?php
class loginController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function indexAction(){
		$this->view->renderView();
	}
	public function forgetPasswordAction(){
		$this->view->renderView();
	}
}