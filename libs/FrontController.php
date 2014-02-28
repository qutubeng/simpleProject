<?php
/**
 * This FrontController is totally independent, it works with the patterns of the URI.
 * default language, controller and methods has set, if they are not provided.
 * rewrite the url if the pattern not matched // instantiate from the /index.php file only
 * @author Shamsul Alam
 * @email shamsuljewel@gmail.com
 */
class FrontController{
	protected  $urlArray;
	protected  $language = 'sv'; // default english use 'en'
	protected  $controller = 'login'; // default indexController
	protected  $action = 'index'; // default indexAction
	protected  $params = array();
	protected  $config;
	protected  $helper; // helper Object
	protected $obj;
	protected $src = 'site';
	
	public function __construct($config){
		$this->url = parse_url($_SERVER['REQUEST_URI']);
		
		$this->config = $config;
// 		print_r($this->url);
		/*
		 * path is the url before first '?' and query is the after '?'
		 * example chain.admin.twosell.se/se/?login/index/1/2/3
		 * path= /se/ and 
		 * query = login/index/1/2/3 again
		 * controller = login
		 * action = index
		 * parameters array{1,2,3} 
		 */
		// do not need the isset
		$path = $this->url['path'];
		
		if(isset($this->url['query']))
			$query = $this->url['query'];
		else
			$query = '';
// 		echo "<br />";
// 		echo $query;
		$path = trim($path, '/');
		
// 		print_r($path);
		$query = trim($query, '/');
		
		$query_list = explode('/', $query);
// 		echo "path=".$path."<br />query = ".$query."<br />";
		
		if(!empty($query)){
			header('Location: '.$config['domain']['url'].'/'.$path.'/'.$query);
		}
// 		die();
		$url = $path;
		// check the validation of the URL
		// a good format is: chain.admin.twosell.se/se/?login/index(optional: /1/2/3)
		$this->helper = new HelperClass();
		$url = $this->helper->urlMapper($url, $this->config);
		if(!is_array($url)){
			if($url == false)
				header('Location: '.$this->config['domain']['url'].'/'.$this->language.'/'.$this->controller.'/'.$this->action);
			else{
				header('Location: '.$this->config['domain']['url'].'/my-admin/'.$this->language.'/'.$this->controller.'/'.$this->action);
			}
		}
		if(!isset($url['src'])) $url['src'] = $this->src;
		else $this->src = $url['src'];
		
		if(!isset($url['language'])) $url['language'] = $this->language;
		else $this->language = $url['language'];
		
		if(!isset($url['controller'])) $url['controller'] = $this->controller;
		else $this->controller = $url['controller'];
		
		if(!isset($url['action'])) $url['action'] = $this->action;
		else $this->action = $url['action'];
		
		if(!isset($url['params'])) $url['params'] = $this->params;
		else $this->params = $url['params'];
		
		$this->urlArray = $url;
// 		print_r($this->urlArray);
// 		die();
		$this->controller = $this->controller."Controller";
		$this->action = $this->action."Action";
		/*
		 * Check if the corrosponding controller file exists and the class exists? if not exists, controllerClass = false;
		 * Controller = errorController and action = index.
		 * if method not found default action will be page not found
		 */
		$fileExists = false;
		$controllerClassExists = false;
		$actionExists = false;
		
		$fileExists = file_exists($this->config['src'][$url['src']]."/controller/".$this->controller.".php");
		if(!$fileExists){
			// if dont find the file then load errorController and indexAction
			$this->controller = "errorController";
			$this->action = "indexAction";
		}
		// now we have the controller file, so can include. assume errorController is there
		include $this->config['src'][$url['src']]."/controller/".$this->controller.".php";
		if(class_exists($this->controller)){
			$controllerClassExists = true;
		}else{
			// if the class name not found then again fix the controller to errorController and action to indexAction
			$this->controller = "errorController";
			$this->action = "indexAction";
			// again include the errorController.php
			include $this->config['src'][$url['src']]."/controller/".$this->controller.".php";
		}
		// now we can create the controller object
		$this->obj = new $this->controller($this->getUrl());
		// checking if the action is exists into the controllerClass
		if(method_exists($this->obj, $this->action)){
			$actionExists = true;
		}
		// if any of the file or class or method not found, false then we will bydefault load the error controller and index action
		if($fileExists==false || $controllerClassExists==false || $actionExists==false){
			$this->controller = "errorController";
			$this->action = "indexAction";
			
			if($actionExists==false){
				$this->action = "NotFoundAction";
				if(!class_exists('errorController')){
					include $this->config['src'][$url['src']]."/controller/".$this->controller.".php";
					$this->obj = new $this->controller($this->getUrl());
				}
			}
		}
		
// 		echo "file: ".$fileExists."<br />";
// 		echo "controllerClass: ".$controllerClassExists."<br />";
// 		echo "action: ".$actionExists."<br />";
//		print_r($url);
// 		echo "Language=".$this->language."<br />Controller=".$this->controller."<br />Action: ".$this->action."<br />";
// 		print_r($this->params);
	}
	public function run(){
		$action = $this->getAction();
		$controller = $this->getController();
		$obj = new $controller($this->getUrl());
		return $obj->$action($this->params);
	}
	public function getController(){
		return $this->controller;
	}
	public function getAction(){
		return $this->action;
	}
	public function getParams(){
		return $this->params;
	}
	public function getConfig(){
		return $this->config;
	}
	public function getUrlArray(){
		return $this->urlArray;
	}
	public function getUrl(){
		return array(
			'language' => $this->language,	
			'controller' => $this->controller,
			'action' => $this->action,
			'config' => $this->config,
			'params' => $this->params,
			'params_count' => count($this->params),
			'src' => $this->src,	
		);
	}
}