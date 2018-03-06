<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
	require_once "includes/conf.php";
	
	isset($_GET['p']) ? $page = $_GET['p'] : $page = "overview";
	
	
	switch ($page) {
	
		case "overview":
			$smarty->assign("template","users");
			
			if (isset($_POST['addUser'])) {
				//form is gesubmit
				$id = $_POST['id'];

				$user = ($id == -1 ? new Gebruiker() : GebruikerPeer::retrieveByPk($id));

				$user->setVoornaam($_POST['voornaam']);
				$user->setAchternaam($_POST['achternaam']);
				
				GebruikerQuery::disableSoftDelete();
				$old_user = GebruikerQuery::create()
					->filterByVoornaam($user->getVoornaam())
					->filterByAchternaam($user->getAchternaam())
					->filterByDeletedAt(null, Criteria::NOT_EQUAL)
					->findOne();
				
				if ($old_user != null) {
					$old_user->setDeletedAt(null);
					$old_user->save();
					$smarty->assign("message", ($id == -1 ? "<p>Gebruiker toegevoegd.</p>" : "<p>Gebruiker aangepast.</p>"));
				} else if((!$user->validate() && count($user->getValidationFailures()) == 2)) {
					$smarty->assign("message", "<p class=\"error\">Een gebruiker met dezelfde voornaam en achternaam bestaat al</p>");
				}
				else{
					$user->save();
					$smarty->assign("message", ($id == -1 ? "<p>Gebruiker toegevoegd.</p>" : "<p>Gebruiker aangepast.</p>"));
				}
			}
			
		break;
		case "form":
			if (isset($_GET['id'])) {
				$user = GebruikerPeer::retrieveByPk($_GET['id']);

				$smarty->assign("user", $user);
				$smarty->assign("titel", "Gebruiker aanpassen");
			} else {
				$dummy = new Gebruiker();
				$dummy->setId(-1);
				$smarty->assign("user", $dummy);
				$smarty->assign("titel", "Gebruiker toevoegen");
			}
			
			
			$smarty->assign("template", "user_form");
			
		break;
		case "user":
			if (isset($_GET['id'])) {
				$user = GebruikerPeer::retrieveByPk($_GET['id']);
				if ($user != null) {
					$smarty->assign("contact_wijzes", $contact_wijzes);
					$smarty->assign("gebruiker", $user);
					$smarty->assign("template", "user_overview");
				} else {
					$smarty->assign("template", "invalid_page");
				}
			} else {
				$smarty->assign("template", "invalid_page");
			}
		break;
		case "delete":
			if (isset($_GET['id'])) {
				$user = GebruikerPeer::retrieveByPk($_GET['id']);
				
				if ($user != null) {
					if (isset($_GET['bevestig']) && $_GET['bevestig'] == "t") {
						//verwijderen bevestigd
						$user->delete();
						$smarty->assign("message", "<p>Gebruiker verwijderd.</p>");
					} else {
						$smarty->assign("message", "<p class=\"error\">Bevestig dat u de gebruiker '".$user->getNaam()."' wilt verwijderen door <a href=\"user.php?p=delete&id=".$user->getId()."&bevestig=t\">hier te klikken.</a></p>");
					}
					
				}
				else {
					$smarty->assign("message", "<p class=\"error\">Verwijderen mislukt.</p>");
				}
				$smarty->assign("template","users");
			}
			else {
				$smarty->assign("message", "<p>U bent op een foute manier op deze pagina terecht gekomen. Ga naar de vorige pagina</p>");
			}
		break;
		default:
			$smarty->assign("template", "invalid_page");
		break;
	}
	
	//Lijst met gebruikers vullen. Na editen/deleten!
	fillUsersList();
	
	$smarty->display("page.tpl");
?>