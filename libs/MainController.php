<?php
class MainController{
	public function __construct($url){
		$this->view = new MainView($url);
	}
}