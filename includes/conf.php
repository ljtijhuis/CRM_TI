<?php

error_reporting(E_ALL ^ E_STRICT);
ini_set('display_errors', '1');
	// Set the include_path to include your generated OM 'classes' dir.
//	set_include_path("/home/vhosting/i/vhost0022697/domains/propel/runtime/classes" . PATH_SEPARATOR . get_include_path());
	set_include_path("./Smarty" . PATH_SEPARATOR . "./build/classes" . PATH_SEPARATOR . "./propel/runtime1.5.6" . PATH_SEPARATOR . "./includes" . PATH_SEPARATOR . "./pear/pear/share/pear" . PATH_SEPARATOR . get_include_path());
	
	//Set default timezone
	date_default_timezone_set("Europe/Amsterdam");
	
	require_once 'Propel.php';
	
	Propel::init("./build/conf/CRM_TI-conf.php");
	
	// put full path to Smarty.class.php
	require('Smarty.class.php');
	$smarty = new Smarty();
	
	$smarty->template_dir = 'templates';
	$smarty->compile_dir = 'templates_c';
	$smarty->cache_dir = 'cache';
	$smarty->config_dir = 'configs';
	
	define("PAGINATION_COUNT", 5);
	
	require_once 'functions.php';
	
	//check login
	session_start();
	
	//simple hardcoded username/password as it is hosted internally
	$userinfo = array(
                'YOUR_USERNAME'=>'YOUR_PASSWD'
                );

	//check if set username is correct
	if (!isset($_GET["notloggedin"]) && !isset($_SESSION["username"])) {
		header("Location: login.php?notloggedin=true");
		exit;
	}
	
?>
