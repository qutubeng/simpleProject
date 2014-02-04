<?php
include 'constant.php';
return array(
		'path' => array(
				'project' => array(
						'root' => PROJECT_ROOT,
						'public_html' => PUBLIC_ROOT,
				),
		),
		'src' => array(
				'site' => PROJECT_ROOT."/my-site", 	
				'admin' => PROJECT_ROOT."/my-admin",
		),		
		'domain' => array(
				'name' => 'My Default project',
				'url'  => 'http://www.defaultproject.loc',
		),
		'database' => array(
				'default' => array(
						'user_name' => 'root',
						'password' => 'jhgtfhj',
						'host' => 'localhost',
						'database_name' => 'personanalyser',
				),
		),
		'template' => array(
				'path' => './template',
				'name' => 'default',
				'admin' => array(
						'path' => '../template',
						'name' => 'jakkas',
				),
		),
		'error_reporting' => true,
);