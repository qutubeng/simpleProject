<?php
class Database extends PDO{
	public function __construct($host, $dbname, $user, $password){
		parent::__construct('mysql:host='.$host.';dbname='.$dbname, $user, $password, 
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	}
}