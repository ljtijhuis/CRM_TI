<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

	set_include_path("/home/vhosting/i/vhost0022697/domains/larz.eu/propel/runtime/classes" . PATH_SEPARATOR . get_include_path());
	print get_include_path();
	require_once 'propel/Propel.php';
	
	Propel::init("./build/conf/CRM_TI-conf.php");

?>