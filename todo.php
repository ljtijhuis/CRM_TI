<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
	require_once "includes/conf.php";
	
	//source array
	$sources = array(0 => "company.php?p=overview", 1 => "company.php?p=company", 2 => "index.php?l=ol", 3 => "user.php?p=user");
	
	if (isset($_POST['addTodo'])) {
		//form is gesubmit
		
		$sourceId = $_POST['source'];
		$source = $sources[$sourceId];

		$id = $_POST['id'];
		
		$source .= ($id == -1 ? "&t=add" : "&t=edt");
		
		$todo = ($id == -1 ? new Vervolgactie() : VervolgactiePeer::retrieveByPk($id));
		
		$todo->setDatum($_POST['datum']);
		$todo->setOmschrijving($_POST['omschrijving']);
		$todo->setGebruikerId($_POST['gebruiker_id']);
		$todo->setOrganisatieId($_POST['organisatie_id']);		

		//organisatie id instellen voor terugsturen naar juiste pagina
		if ($sourceId == 1) {
			$source .= "&id=".$todo->getOrganisatieId();
		}
				
		if ($todo->validate()) {
			$todo->save();
			
			//terug naar oorspronkelijke source, message wordt automatisch gezet door GET variabelen
			header("Location:".$source);
			
		} else {
			$fails = $todo->getValidationFailures();
			$msg = "<p class=\"error\">Vervolgactie kon niet worden ".($id == -1 ? "toegevoegd" : "aangepast" )." om de volgende redenen:<br/>\n<ul class=\"error\">";
			foreach ($fails as $fail) {
				$msg .= "<li>".$fail."</li>";
			}
			$msg .= "</ul>\n</p>";
			$smarty->assign("message", $msg);
			
			$id = $todo->getId();
			if (!isset($id) || !($id >= 0)) {
				$todo->setId(-1);
			}
			
			if (isset($_POST['organisatie_id'])) {
				$org = OrganisatiePeer::retrieveByPk($_POST['organisatie_id']);
				if ($org != null) {
					$smarty->assign("organisatie", $org);
				} else {
					$smarty->assign("message", "<p class=\"error\">Fout: organisatie onbekend. Is deze verwijderd?</p>");
					$smarty->assign("template", "invalid_page");
				}
			} else {
				//problemen
				$smarty->assign("message", "<p class=\"error\">Fout: organisatie onbekend</p>");
				$smarty->assign("template", "invalid_page");
			}
			
			fillUsersList();
			$smarty->assign("template", "todo_form");
			$smarty->assign("todo", $todo);
			$smarty->assign("source", $sourceId);
			$smarty->assign("titel", ($id == -1 ? "Vervolgactie toevoegen" : "Vervolgactie aanpassen"));
		}
		

	} else if (isset($_GET['action'])) {
		
		if (isset($_GET['id'])){			
			$todo = VervolgactiePeer::retrieveByPk($_GET['id']);
			//source bepalen
			if (isset($_GET['source'])) {
				$sourceId = $_GET['source'];
				$source = $sources[$sourceId];
				if ($sourceId == 1) {
					 $source .= "&id=".$todo->getOrganisatieId();
				}
				
				if ($sourceId == 3) {
					$source .= "&id=".$todo->getGebruikerId();
				}
			}
			
			if ($todo != null) {
				if ($_GET['action'] == "del") {
					
					$source .= "&t=del";					
					//todo verwijderen
					$todo->delete();
					
				} else if ($_GET['action'] == "fin") {
					
					$source .= "&t=fin";
					//todo afvinken
					$todo->setAfgehandeld(true);
					$todo->save();
					
				}
			}
			//redirecten naar source
			header("Location:".$source);
		} else {
			$smarty->assign("template", "invalid_page");
		}
	} else {
		$todo_id = (isset($_GET['id']) ? $_GET['id'] : -1);
		if ($todo_id == -1) {
			$todo = new Vervolgactie();
			$todo->setId(-1);
		} else {
			$todo = VervolgactiePeer::retrieveByPk($todo_id);
		}
		$source = (isset($_GET['source']) ? $_GET['source'] : 0);
		
		if (isset($_GET['company'])) {
			$org = OrganisatiePeer::retrieveByPk($_GET['company']);
			if ($org != null) {
				$smarty->assign("organisatie", $org);
			} else {
				$smarty->assign("message", "<p class=\"error\">Fout: organisatie onbekend</p>");
				$smarty->assign("template", "invalid_page");
			}
		}
		
		fillUsersList();
		$smarty->assign("template", "todo_form");
		$smarty->assign("titel", ($todo_id == -1 ? "Vervolgactie toevoegen" : "Vervolgactie aanpassen"));
		$smarty->assign("source", $source);
		$smarty->assign("todo", $todo);		
	}
	
	$smarty->display("page.tpl");

?>