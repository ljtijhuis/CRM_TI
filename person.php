<?php
	
error_reporting(E_ALL);
ini_set('display_errors', '1');
	require_once "includes/conf.php";
	
	$page = isset($_GET['p']) ? $_GET['p'] : "overview";
	
	switch ($page) {
		case "manage":
		case "overview":
			$smarty->assign("template", "persons");
			$smarty->assign("beheer", $page == "manage");
			
			if (isset($_POST['addPerson'])) {
				//form is gesubmit
				$id = $_POST['id'];
				
				$person = ($id == -1 ? new Persoon() : PersoonPeer::retrieveByPk($id));
				
				$person->setAchternaam($_POST['achternaam']);
				$person->setVoorletters($_POST['voorletters']);
				$person->setRoepnaam($_POST['roepnaam']);
				$person->setFunctie($_POST['functie']);
				$person->setGeslacht($_POST['geslacht']);
				$person->setActief($_POST['actief']);
				$person->setTelefoonPrimair($_POST['telefoon_primair']);
				$person->setTelefoonSecundair($_POST['telefoon_secundair']);
				$person->setEmail($_POST['email']);
				$person->setKerstkaart($_POST['kerstkaart']);
				$person->setMailing($_POST['mailing']);
				$person->setOrganisatie(isset($_POST['organisatie_id']) ? OrganisatiePeer::retrieveByPk($_POST['organisatie_id']) : null);
				
				if ($person->validate()) {
					$person->save();
					$smarty->assign("message", ($id == -1 ? "<p>Persoon toegevoegd.</p>" : "<p>Persoon aangepast.</p>"));
				} else {
					$fails = $person->getValidationFailures();
					$msg = "<p class=\"error\">Persoon kon niet worden ".($id == -1 ? "toegevoegd" : "aangepast" )." om de volgende redenen:<br/>\n<ul class=\"error\">";
					foreach ($fails as $fail) {
						$msg .= "<li>".$fail."</li>";
					}
					$msg .= "</ul>\n</p>";
					$smarty->assign("message", $msg);
					
					$id = $person->getId();
					if (!isset($id) || !($person->getId() >= 0)) {
						$person->setId(-1);
					}
					
					fillCompaniesList();
					$smarty->assign("template", "person_form");
					$smarty->assign("persoon", $person);
				
					$smarty->assign("titel", ($id == -1 ? "Persoon toevoegen" : "Persoon aanpassen"));
				}
				

			}
			
		break;
		case "form":
			
			fillCompaniesList();
			
			$smarty->assign("template", "person_form");

			if (isset($_GET['id'])) {
				$person = PersoonPeer::retrieveByPk($_GET['id']);
				$smarty->assign("persoon", $person);				
				$smarty->assign("titel", "Persoon aanpassen");
			}
			else {
				$dummy = new Persoon();
				$dummy->setId("-1");
				$smarty->assign("persoon", $dummy);
				$smarty->assign("titel", "Persoon toevoegen");
			}
		break;
		case "person":
			if (isset($_GET['id'])) {
				$person = PersoonPeer::retrieveByPk($_GET['id']);
				if ($person != null) {
					$smarty->assign("contact_wijzes", $contact_wijzes);
					$smarty->assign("persoon", $person);
					$smarty->assign("template", "person_overview");
				} else {
					$smarty->assign("template", "invalid_page");
				}
			} else {
				$smarty->assign("template", "invalid_page");
			}
		break;
		case "delete":
			if (isset($_GET['id'])) {
				$person = PersoonPeer::retrieveByPk($_GET['id']);
				
				if ($person != null) {
					if (isset($_GET['bevestig']) && $_GET['bevestig'] == "t") {
						//verwijderen bevestigd
						$person->delete();
						$smarty->assign("message", "<p>Persoon verwijderd.</p>");
					} else {
						$smarty->assign("message", "<p class=\"error\">Bevestig dat u de persoon '".$person->getNaam()."' wilt verwijderen door <a href=\"person.php?p=delete&id=".$person->getId()."&bevestig=t\">hier te klikken.</a></p>");
					}
				}
				else {
					$smarty->assign("message", "<p class=\"error\">Verwijderen mislukt.</p>");
				}
				$smarty->assign("template","persons");
			}
			else {
				$smarty->assign("message", "<p>U bent op een foute manier op deze pagina terecht gekomen. Ga naar de vorige pagina</p>");
			}
		break;
		default:
			$smarty->assign("template", "invalid_page");
		break;
	}
	
	fillPersonsList();
	
	$smarty->display("page.tpl");

?>