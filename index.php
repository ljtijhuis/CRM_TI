<?php
	require_once "includes/conf.php";
	
	
	//filter info
	$filterTodosUserId = isset($_GET['filterTodosUserId']) && is_numeric($_GET['filterTodosUserId']) ? $_GET['filterTodosUserId'] : -1;
	$filterTodosCompanyId = isset($_GET['filterTodosCompanyId']) && is_numeric($_GET['filterTodosCompanyId']) ? $_GET['filterTodosCompanyId'] : -1;
	$filterTodosDescription = isset($_GET['filterTodosDescription']) ? $_GET['filterTodosDescription'] : "";
	
	$filterChancesCompanyId = isset($_GET['filterChancesCompanyId']) && is_numeric($_GET['filterChancesCompanyId']) ? $_GET['filterChancesCompanyId'] : -1;
	$filterChancesDescription = isset($_GET['filterChancesDescription']) ? $_GET['filterChancesDescription'] : "";
	
	$filterContactsPersonId = isset($_GET['filterContactsPersonId']) && is_numeric($_GET['filterContactsPersonId']) ? $_GET['filterContactsPersonId'] : -1;
	$filterContactsUserId = isset($_GET['filterContactsUserId']) && is_numeric($_GET['filterContactsUserId']) ? $_GET['filterContactsUserId'] : -1;
	$filterContactsCompanyId = isset($_GET['filterContactsCompanyId']) && is_numeric($_GET['filterContactsCompanyId']) ? $_GET['filterContactsCompanyId'] : -1;
	$filterContactsDescription = isset($_GET['filterContactsDescription']) ? $_GET['filterContactsDescription'] : "";
	

	//get pagination info
	$pageTodos = isset($_GET['pageTodos']) && is_numeric($_GET['pageTodos']) ? $_GET['pageTodos'] : 1;
	$pageChances = isset($_GET['pageChances']) && is_numeric($_GET['pageChances']) ? $_GET['pageChances'] : 1;
	$pageContacts = isset($_GET['pageContacts']) && is_numeric($_GET['pageContacts']) ? $_GET['pageContacts'] : 1;
	
	//sort info
	$sortTodos = isset($_GET['sortTodos']) ? $_GET['sortTodos'] : "";
	$sortChances = isset($_GET['sortChances']) ? $_GET['sortChances'] : "";
	$sortContacts = isset($_GET['sortContacts']) ? $_GET['sortContacts'] : "";
			
	fillTodosList($filterTodosUserId, $filterTodosCompanyId, $filterTodosDescription, $sortTodos, $pageTodos);
	fillChancesList($filterChancesCompanyId, $filterChancesDescription, $sortChances, $pageChances);
	fillContactsList($filterContactsPersonId, $filterContactsUserId, $filterContactsCompanyId, $filterContactsDescription, $sortContacts, $pageContacts);
	
	//virtuele omzet
	setVirtueleOmzetTotals($filterChancesCompanyId);	
	
	//Set filter fields
	fillUsersList();	
	fillCompaniesList();
	fillPersonsList();

	
	$smarty->assign("template", "home");
	
	$smarty->display('page.tpl');



?>