<?php
class pageController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function termsAction(){
		$this->view->render();
	}
	public function aboutAction(){
		$this->view->render();
	}
	public function contactAction(){
		$this->view->render();
	}
	public function enablejavascriptAction(){
		$this->view->render();
	}
}