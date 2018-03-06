<?php	

	//contactwijze array
	$contact_wijzes = array(0 => "Telefoon", 1 => "Email", 2 => "Gesprek");
	$resultaat_opties = array(Kans::OPEN => "Open", Kans::OPDRACHT => "Opdracht", Kans::GEMIST => "Gemist", Kans::VERVALLEN => "Vervallen");
	
	$messages = array("c" => array("add" => "Contactmoment toegevoegd", "del" => "Contactmoment verwijderd", "edt" => "Contactmoment aangepast"),
					"t" => array("add" => "Vervolgactie toegevoegd", "del" => "Vervolgactie verwijderd", "edt" => "Vervolgactie aangepast", "fin" => "Vervolgactie afgehandeld"),
					"k" => array("add" => "Kans toegevoegd", "del" => "Kans verwijderd", "edt" => "Kans aangepast", "fin" => "Kans afgehandeld"));
	
	//messages checken
	if (isset($_GET['c'])) {
		global $smarty;
		$message = "<p>".$messages["c"][$_GET['c']]."</p>";
		$smarty->assign("message", $message);
	}
	if (isset($_GET['t'])) {
		global $smarty;
		$message = "<p>".$messages["t"][$_GET['t']]."</p>";
		$smarty->assign("message", $message);
	}
	if (isset($_GET['k'])) {
		global $smarty;
		$message = "<p>".$messages["k"][$_GET['k']]."</p>";
		$smarty->assign("message", $message);
	}
	
	function fillCompaniesList(){
		global $smarty;
		$c = new Criteria();
		$c->addAscendingOrderByColumn(OrganisatiePeer::NAAM);
		$companies = OrganisatiePeer::doSelect($c);
		
		$smarty->assign("bedrijven", $companies);
	}

	function fillProvinciesList(){
		global $smarty;
		$c = new Criteria();
		$c->addAscendingOrderByColumn(ProvinciePeer::NAAM);
		$provincies = ProvinciePeer::doSelect($c);
		
		$smarty->assign("provincies", $provincies);
	}
	
	function fillTypesList(){
		global $smarty;
		$c = new Criteria();
		$c->addAscendingOrderByColumn(OrganisatieTypePeer::NAAM);
		$types = OrganisatieTypePeer::doSelect($c);
		
		$smarty->assign("organisatie_types", $types);
	}
	
	function fillPersonsList(){
		global $smarty;
		$c = new Criteria();
		$c->addAscendingOrderByColumn(PersoonPeer::ACHTERNAAM);
		$persons = PersoonPeer::doSelect($c);

		$smarty->assign("personen", $persons);	
	}
	
	function fillUsersList(){
		global $smarty;
		$c = new Criteria();
		$c->addAscendingOrderByColumn(GebruikerPeer::ACHTERNAAM);
		$c->addAscendingOrderByColumn(GebruikerPeer::VOORNAAM);
		$users = GebruikerPeer::doSelect($c);
		
		$smarty->assign("gebruikers", $users);
	}
	
	function fillTodosList($filterTodosUserId, $filterTodosCompanyId, $filterTodosDescription, $sortTodos, $pageTodos){
		global $smarty;
			
		
		$todos = VervolgactieQuery::create()->filterByAfgehandeld(false);
		
		if ($filterTodosUserId != -1){
			$todos =  $todos->useGebruikerQuery()
								->filterById($filterTodosUserId)
							->endUse();
			$smarty->assign("selectedTodosUserId", $filterTodosUserId);
		}
		if ($filterTodosCompanyId != -1){
			$todos =  $todos->useOrganisatieQuery()
								->filterById($filterTodosCompanyId)
							->endUse();
			$smarty->assign("selectedTodosCompanyId", $filterTodosCompanyId);
		}
		if ($filterTodosDescription != ""){
			$todos = $todos->filterByOmschrijving("%".$filterTodosDescription."%");
			$smarty->assign("filterTodosDescription", $filterTodosDescription);
		}
		
		$todos = $todos->orderByDatum(Criteria::DESC);

		$todos = $todos->paginate($page = $pageTodos, $maxPerPage = PAGINATION_COUNT);
		
		
		$smarty->assign("todos", $todos);
	}
	
	function fillChancesList($filterChancesCompanyId, $filterChancesDescription, $sortChances, $pageChances){
		global $smarty;
		
		$chances = KansQuery::create();
		
		if ($filterChancesCompanyId != -1){
			$chances =  $chances->useOrganisatieQuery()
									->filterById($filterChancesCompanyId)
								->endUse();
			$smarty->assign("selectedChancesCompanyId", $filterChancesCompanyId);
		}
		if ($filterChancesDescription != ""){
			$chances = $chances->filterByOmschrijving("%".$filterChancesDescription."%");
			$smarty->assign("filterChancesDescription", $filterChancesDescription);
		}
		
		$chances = $chances->filterByAfgehandeld(false);
		$chances = $chances->orderByPlanningUitvraag();

		$chances = $chances->paginate($page = $pageChances, $maxPerPage = PAGINATION_COUNT);
		
		
		$smarty->assign("chances", $chances);
	}
	
	function setVirtueleOmzetTotals($filterChancesCompanyId) {
		global $smarty;
	
		$chances = KansQuery::create();
		
		if ($filterChancesCompanyId != -1){
			$chances =  $chances->useOrganisatieQuery()
									->filterById($filterChancesCompanyId)
								->endUse();
		}
		
		//only open chances
		$chances = $chances->filterByAfgehandeld(false);
		$chances = $chances->orderByPlanningUitvraag();
		$chances = $chances->find();
		
		//get total and per period
		$total = 0;
		$periodsAndAmounts = array();
		
		foreach ($chances as $chance) {
			$total += $chance->getVirtueleOmzet();
			$d = $chance->getPlanningUitvraagFormatted();
			
			if ($d != "") {
				if (isset($periodsAndAmounts[$d])) {
					$periodsAndAmounts[$d] = $periodsAndAmounts[$d] + $chance->getVirtueleOmzet();
				} else {
					$periodsAndAmounts[$d] = $chance->getVirtueleOmzet();
				}
			}
		}
		
		$smarty->assign("totalVirtueleOmzet", $total);
		$smarty->assign("periodsAndAmounts", $periodsAndAmounts);
	}
	
	function fillContactsList($filterContactsPersonId, $filterContactsUserId, $filterContactsCompanyId, $filterContactsDescription, $sortContacts, $pageContacts){
		global $smarty;
		
		$contacts = ContactQuery::create();
		
		if ($filterContactsPersonId != -1){
			$contacts = $contacts->usePersoonQuery()
									->filterById($filterContactsPersonId)
								 ->endUse();
			$smarty->assign("selectedContactsPersonId", $filterContactsPersonId);
		}
		if ($filterContactsUserId != -1){
			$contacts = $contacts->useGebruikerQuery()
									->filterById($filterContactsUserId)
								 ->endUse();
			$smarty->assign("selectedContactsUserId", $filterContactsUserId);
		}
		if ($filterContactsCompanyId != -1){
			$contacts = $contacts->useOrganisatieQuery()
									->filterById($filterContactsCompanyId)
								 ->endUse();
			$smarty->assign("selectedContactsCompanyId", $filterContactsCompanyId);
		}
		if ($filterContactsDescription != ""){
			$contacts = $contacts->filterByAandachtspunten("%".$filterContactsDescription."%");
			$smarty->assign("filterContactsDescription", $filterContactsDescription);
		}
		
		
		$contacts = $contacts->orderByDatum(Criteria::DESC);
		
		$contacts = $contacts->paginate($page = $pageContacts, $maxPerPage = PAGINATION_COUNT);
		
	$smarty->assign("contacts", $contacts);
	}

	
	function makeTimeStamp($date, $hours, $minutes){
		return $date." ".$hours.":".$minutes;
	}
?>