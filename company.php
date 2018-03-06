<?php
	
	require_once "includes/conf.php";
	
/* Test contact
	$c = new Contact();
	$c->setDatum(Date("d-m-Y H:i:s"));
	$c->setWijze(0);
	$c->setAandachtspunten("Gehad over eventuele samenwerkingsmogelijkheden. Gehad over eventuele samenwerkingsmogelijkheden. Gehad over eventuele samenwerkingsmogelijkheden. Gehad over eventuele samenwerkingsmogelijkheden. Gehad over eventuele samenwerkingsmogelijkheden. ");
	$c->setPersoonId(1);
	$c->setGebruikerId(1);
	$c->save();
	*/
	
/* Test vervolgactie
	$v = new Vervolgactie();
	$v->setDatum(Date("d-m-Y"));
	$v->setOmschrijving("Heleboel proggen voor CRM! Heleboel proggen voor CRM! Heleboel proggen voor CRM! Heleboel proggen voor CRM! Heleboel proggen voor CRM! Heleboel proggen voor CRM!");
	$v->setGebruikerId(1);
	$v->setOrganisatieId(1);
	$v->save();
	*/

/* Test Kans
	$k = new Kans();
	$k->setDatum(Date("d-m-Y"));
	$k->setOmschrijving("Goed bestuurtje dit jaar! Goed bestuurtje dit jaar! Goed bestuurtje dit jaar! Goed bestuurtje dit jaar! Goed bestuurtje dit jaar! Goed bestuurtje dit jaar! ");
	$k->setOrganisatieId(1);
	$k->save();
	*/
	
	$page = isset($_GET['p']) ? $_GET['p'] : "overview";
		
	//set result options
	$smarty->assign("opdracht", Kans::OPDRACHT);
	$smarty->assign("gemist", Kans::GEMIST);
	$smarty->assign("vervallen", Kans::VERVALLEN);
	
	switch ($page) {
		case "manage":
		case "overview":
			$smarty->assign("template", "companies");
			
			if (isset($_POST['addCompany'])) {
				//form is gesubmit
				$id = $_POST['id'];
				
				$company = ($id == -1 ? new Organisatie() : OrganisatiePeer::retrieveByPk($id));
				
				$company->setNaam($_POST['naam']);
				
				OrganisatieQuery::disableSoftDelete();
				$old_company = OrganisatieQuery::create()
					->filterByNaam($company->getNaam())
					->filterByDeletedAt(null, Criteria::NOT_EQUAL)
					->findOne();
				
				if ($old_company != null) {
					$old_company->setDeletedAt(null);
					$company = $old_company;
				}
					
				$company->setPostbusPost($_POST['postbus_post']);
				$company->setPostcodePost($_POST['postcode_post']);
				$company->setStadPost($_POST['stad_post']);
				$company->setStraatBezoek($_POST['straat_bezoek']);
				$company->setNummerBezoek($_POST['nummer_bezoek']);
				$company->setPostcodeBezoek($_POST['postcode_bezoek']);
				$company->setStadBezoek($_POST['stad_bezoek']);
				$company->setTelefoonAlgemeen($_POST['telefoon_algemeen']);
				$company->setWebsite($_POST['website']);
				$company->setProvincie(ProvinciePeer::retrieveByPk($_POST['provincie_id']));
				$company->setOrganisatieType(OrganisatieTypePeer::retrieveByPk($_POST['type_id']));

				if ($company->validate()) {
					$company->save();

					//medewerkers verwijderen
					$medewerkers = $company->getPersoons();
					
					foreach($medewerkers as $p){
						$p->setOrganisatie(null);
						$p->save();
					}
					
					if (isset($_POST['medewerkers'])) {
						$medewerkers = $_POST['medewerkers'];
						//medewerkers toevoegen
						foreach($medewerkers as $medewerker){
							$p = PersoonPeer::retrieveByPk($medewerker);
							$p->setOrganisatie($company);
							$p->save();
						}
					}
						
					$smarty->assign("message", ($id == -1 ? "<p>Organisatie toegevoegd.</p>" : "<p>Organisatie aangepast.</p>"));
				} else {
					$fails = $company->getValidationFailures();
					$msg = "<p class=\"error\">Organisatie kon niet worden ".($id == -1 ? "toegevoegd" : "aangepast" )." om de volgende redenen:<br/>\n<ul class=\"error\">";
					foreach ($fails as $fail) {
						$msg .= "<li>".$fail."</li>";
					}
					$msg .= "</ul>\n</p>";
					$smarty->assign("message", $msg);
					
					if (!($company->getId() >= 0)) {
						$company->setId(-1);
					}
					
					fillProvinciesList();
					fillTypesList();
					$smarty->assign("template", "company_form");
					$smarty->assign("bedrijf", $company);		
					
					$smarty->assign("titel", ($id == -1 ? "Organisatie toevoegen" : "Organisatie aanpassen"));
				}
				

			}
			
		break;
		case "form":
			
			fillProvinciesList();
			fillTypesList();
			fillPersonsList();
			$smarty->assign("template", "company_form");

			if (isset($_GET['id'])) {
				$organisatie = OrganisatiePeer::retrieveByPk($_GET['id']);
				
				$smarty->assign("bedrijf", $organisatie);
				$smarty->assign("titel", "Organisatie aanpassen");
			}
			else {
				$dummy = new Organisatie();
				$dummy->setId("-1");
				$smarty->assign("bedrijf", $dummy);
				$smarty->assign("titel", "Organisatie toevoegen");
			}
		break;
		case "company":
			if (isset($_GET['id'])) {
				$organisatie = OrganisatiePeer::retrieveByPk($_GET['id']);

				if ($organisatie != null) {
					$smarty->assign("contact_wijzes", $contact_wijzes);
					$smarty->assign("resultaat_opties", $resultaat_opties);
					$smarty->assign("bedrijf", $organisatie);
					$smarty->assign("template", "company_overview");
				} else {
					$smarty->assign("template", "invalid_page");
				}
			} else {
				$smarty->assign("template", "invalid_page");
			}
		break;
		case "delete":
			if (isset($_GET['id'])) {
				$organisatie = OrganisatiePeer::retrieveByPk($_GET['id']);
				if ($organisatie != null) {
					if (isset($_GET['bevestig']) && $_GET['bevestig'] == "t") {
						//verwijderen bevestigd
						$contacts = $organisatie->getContacts();
						foreach ($contacts as $c) {
							$c->delete();
						}
						$vervolgacties = $organisatie->getVervolgacties();
						foreach ($vervolgacties as $v) {
							$v->delete();
						}
						$kansen = $organisatie->getKanss();
						foreach ($kansen as $k) {
							$k->delete();
						}
						$employees = $organisatie->getPersoons();
						foreach ($employees as $e) {
							$e->setOrganisatie(null);
							$e->save();
						}
						
						$organisatie->delete();
						$smarty->assign("message", "<p>Organisatie verwijderd.</p>");
					} else {
						$smarty->assign("message", "<p class=\"error\">Bevestig dat u de organisatie '".$organisatie->getNaam()."' wilt verwijderen door <a href=\"company.php?p=delete&id=".$organisatie->getId()."&bevestig=t\">hier te klikken.</a></p>");
					}
				}
				else {
					$smarty->assign("message", "<p class=\"error\">Verwijderen mislukt.</p>");
				}
				$smarty->assign("template","companies");
			}
			else {
				$smarty->assign("message", "<p>U bent op een foute manier op deze pagina terecht gekomen. Ga naar de vorige pagina</p>");
			}
		break;
		default:
			$smarty->assign("template", "invalid_page");
		break;
	}
	
	fillCompaniesList();
	
	$smarty->display("page.tpl");

?>