<?php
class errorController extends MainController{
	public function __construct($url){
		parent::__construct($url);
	}
	public function indexAction(){
		$this->view->render(array(
			'my' => 'controller not found',			
		));
	}
	public function NotFoundAction(){
		$this->view->render(array(
			'title' => 'not found action',
			'controller' => $this->view->controller,
			'action' => $this->view->action,		
		));
	}
}