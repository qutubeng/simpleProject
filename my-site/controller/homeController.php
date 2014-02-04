<?php
class homeController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function indexAction(){
		$this->view->render();
	}
}