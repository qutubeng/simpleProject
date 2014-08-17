<?php
session_start();
$config = include  '../config/application.config.php';

/*
 * Handle error reporting, when the site is in live change error_reporting = false 
 * in application.config.php file
 */
if($config['error_reporting'] == true){
	ini_set('display_errors',1);
	error_reporting(E_ALL);
}
/**
 * Helper use auto load
 */
include $config['path']['project']['root']."/helper/HelperClass.php";
/**
 * Libs use auto load
 */
include $config['path']['project']['root']."/libs/Database.php";
include $config['path']['project']['root']."/libs/MainModel.php";
include $config['path']['project']['root']."/libs/MainController.php";
include $config['path']['project']['root']."/libs/MainView.php";

include $config['path']['project']['root']."/libs/FrontController.php";
// print_r($config);
$frontController = new FrontController($config);

$content = $frontController->run();
// echo "index.php";