<?php
class registerController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function indexAction(){
		$this->view->renderView();
	}
}