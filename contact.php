<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
	require_once "includes/conf.php";
	
	//source array
	$sources = array(0 => "company.php?p=overview", 1 => "company.php?p=company", 
					2 => "person.php?p=overview", 3 => "person.php?p=person");
	
	$smarty->assign("contact_wijzes", $contact_wijzes);
	
	if (isset($_POST['addContact'])) {
		//form is gesubmit
		
		$sourceId = $_POST['source'];
		$source = $sources[$sourceId];

		$id = $_POST['id'];
		
		$source .= ($id == -1 ? "&c=add" : "&c=edt");
		
		$contact = ($id == -1 ? new Contact() : ContactPeer::retrieveByPk($id));
		
		$datum = makeTimeStamp($_POST['datum'], $_POST['uur'], $_POST['minuten']);
		
		$contact->setDatum($datum);
		$contact->setWijze($_POST['wijze']);
		$contact->setAandachtspunten($_POST['aandachtspunten']);
		$contact->setGebruikerId($_POST['gebruiker_id']);
		
		$person = PersoonPeer::retrieveByPk($_POST['persoon_id']);		
		$contact->setPersoon($person);

		if ($person != null) {
			$contact->setOrganisatie($person->getOrganisatie());
			
			//id van person/organisatie toevoegen voor terugsturen naar goede pagina
			if ($sourceId == 3) {
				$source .= "&id=".$person->getId();
			} else if ($sourceId == 1) {
				$source .= "&id=".$person->getOrganisatieId();
			}
		}
				
		if ($contact->validate()) {
			$contact->save();
			
			//terug naar oorspronkelijke source, message wordt automatisch gezet door GET variabelen
			header("Location:".$source);	
		} else {
			$fails = $contact->getValidationFailures();
			$msg = "<p class=\"error\">Contactmoment kon niet worden ".($id == -1 ? "toegevoegd" : "aangepast" )." om de volgende redenen:<br/>\n<ul class=\"error\">";
			foreach ($fails as $fail) {
				$msg .= "<li>".$fail."</li>";
			}
			$msg .= "</ul>\n</p>";
			$smarty->assign("message", $msg);
			
			$id = $contact->getId();
			if (!isset($id) || !($id >= 0)) {
				$contact->setId(-1);
			}
			
			fillPersonsList();
			fillUsersList();
			$smarty->assign("template", "contact_form");
			$smarty->assign("contact", $contact);
			$smarty->assign("source", $sourceId);
			$smarty->assign("titel", ($id == -1 ? "Contactmoment toevoegen" : "Contactmoment aanpassen"));
		}
		

	} else if (isset($_GET['action']) && $_GET['action'] == "del") {
		//contactmoment verwijderen
		if (isset($_GET['id'])){			
			$contact = ContactPeer::retrieveByPk($_GET['id']);
			if ($contact != null) {
				//source bepalen
				if (isset($_GET['source'])) {
					$sourceId = $_GET['source'];
					$source = $sources[$sourceId]."&c=del";
					if ($sourceId == 3) {
						 $source .= "&id=".$contact->getPersoonId();
					} else if ($sourceId == 1) {
						 $source .= "&id=".$contact->getOrganisatieId();
					}
				}
					
				//verwijderen
				$contact->delete();
				
				//redirecten naar source
				header("Location:".$source);
			}
			
			
		} else {
			$smarty->assign("template", "invalid_page");
		}
		
	} else {
		$contact_id = (isset($_GET['id']) ? $_GET['id'] : -1);
		if ($contact_id == -1) {
			$contact = new Contact();
			$contact->setId(-1);
		} else {
			$contact = ContactPeer::retrieveByPk($contact_id);
		}
		$source = (isset($_GET['source']) ? $_GET['source'] : 0);
		
		if (isset($_GET['company'])) {
			$org = OrganisatiePeer::retrieveByPk($_GET['company']);
			if ($org != null) {
				$smarty->assign("personen", $org->getPersoons());
			}
		}
		if ($smarty->get_template_vars("personen") === null) {
			fillPersonsList();
		}
		
		fillUsersList();
		$smarty->assign("template", "contact_form");
		$smarty->assign("titel", ($contact_id == -1 ? "Contactmoment toevoegen" : "Contactmoment aanpassen"));
		$smarty->assign("source", $source);
		$smarty->assign("contact", $contact);		
	}
	
	$smarty->display("page.tpl");

?>