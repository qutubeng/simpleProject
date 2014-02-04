<?php
session_start();
$config = include  '../../config/application.config.php';
/*
 * Handle error reporting
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

$frontController = new FrontController($config);

$content = $frontController->run();



// will remove this line later
// echo "<br />/index page content index";