<?php
class MainView{
	public $controller;
	public $action;
	public $params = array();
	public $params_count = 0;
	public $config;
	public $extractController;
	public $extractAction;
	public $language;
	public $src;
	public function __construct($url) {
// 		echo "this is main view";
		$this->controller = $url['controller'];
		$this->action = $url['action'];
		$this->params = $url['params'];
		$this->params_count = $url['params_count'];
		$this->config = $url['config'];
		$this->extractController = $this->extractController($this->controller);
		$this->extractAction = $this->extractAction($this->action);
		$this->language = $url['language'];
		$this->src = $url['src'];
// 		print_r($url);
	}
	public function render($content = false){
		if($this->src == 'admin'){
			include $this->config['template']['admin']['path'].'/'.$this->config['template']['admin']['name'].'/top-part.phtml';
			$view_file_path = '../my-admin/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
		}else{
			include $this->config['template']['path'].'/'.$this->config['template']['name'].'/top-part.phtml';
			$view_file_path = '../my-site/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
		}
		
		if(is_array($content)){
			extract($content);
		}
		
		if(!file_exists($view_file_path)){
			if(is_array($content)){
				print_r($content);
			}else{
				echo $content;
			}
		}
		else{
			include $view_file_path;
		}
		if($this->src == 'admin'){
			include $this->config['template']['admin']['path'].'/'.$this->config['template']['admin']['name'].'/bottom-part.phtml';
		}else{
			include $this->config['template']['path'].'/'.$this->config['template']['name'].'/bottom-part.phtml';
		}
		
	}
	/**
	 * Only shows the view file not the header and footer of the template or the other default template files
	 * @param unknown_type $content
	 */
	public function renderView($content = false){
		if(is_array($content)){
			extract($content);
		}
		if($this->src == 'admin'){
			$view_file_path = '../my-admin/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
		}else{
			$view_file_path = '../my-site/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
		}
	
		if(!file_exists($view_file_path)){
			if(is_array($content)){
				print_r($content);
			}else{
				echo $content;
			}
		}
		else{
			if($this->src == 'admin'){
				include '../my-admin/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
			}else{
				include '../my-site/view/'.$this->extractController.'/'.$this->extractAction.'.phtml';
			}
		}
	}
	public function extractController($controller){
		$length = strlen($controller);
		if(substr($controller, -10) === 'Controller'){
			$name= explode('Controller', $controller);
			//return $name;
			return $name[0];
		}else{
			return false;
		}
	}
	public function extractAction($action){
		$length = strlen($action);
		if(substr($action, -6) === 'Action'){
			$name= explode('Action', $action);
			//return $name;
			return $name[0];
		}else{
			return false;
		}
	}
	public function link($path){
		if($this->src == 'admin')
			return $this->config['domain']['url'].'/my-admin/'.$this->language.'/'.$path;
		else
			return $this->config['domain']['url'].'/'.$this->language.'/'.$path;
	}
}