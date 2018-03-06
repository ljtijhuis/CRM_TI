<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
	require_once "includes/conf.php";
	
	//source array
	$sources = array(0 => "company.php?p=overview", 1 => "company.php?p=company");
	
	//set result options
	$smarty->assign("opdracht", Kans::OPDRACHT);
	$smarty->assign("gemist", Kans::GEMIST);
	$smarty->assign("vervallen", Kans::VERVALLEN);
	
	if (isset($_POST['addChance'])) {
		//form is gesubmit
		
		$sourceId = $_POST['source'];
		$source = $sources[$sourceId];

		$id = $_POST['id'];
		
		$source .= ($id == -1 ? "&k=add" : "&k=edt");
		
		$chance = ($id == -1 ? new Kans() : KansPeer::retrieveByPk($id));
		
		$chance->setDatum($_POST['datum']);
		$chance->setOmschrijving($_POST['omschrijving']);
		$chance->setOrganisatieId($_POST['organisatie_id']);
		
		$chance->setOmschrijvingProduct($_POST['omschrijving_product']);
		$chance->setWijzeAanbesteding($_POST['wijze_aanbesteding']);
		$chance->setPlanningUitvraag("01-".$_POST['planning_uitvraag']);
		$chance->setBedrag(str_replace(",", ".", $_POST['bedrag']));
		$chance->setKans(str_replace(",", ".", $_POST['kans']));

		//organisatie id instellen voor terugsturen naar juiste pagina
		if ($sourceId == 1) {
			$source .= "&id=".$chance->getOrganisatieId();
		}
				
		if ($chance->validate()) {
			$chance->save();
			
			//terug naar oorspronkelijke source, message wordt automatisch gezet door GET variabelen
			header("Location:".$source);
			
		} else {
			$fails = $chance->getValidationFailures();
			$msg = "<p class=\"error\">Vervolgactie kon niet worden ".($id == -1 ? "toegevoegd" : "aangepast" )." om de volgende redenen:<br/>\n<ul class=\"error\">";
			foreach ($fails as $fail) {
				$msg .= "<li>".$fail."</li>";
			}
			$msg .= "</ul>\n</p>";
			$smarty->assign("message", $msg);
			
			$id = $chance->getId();
			if (!isset($id) || !($id >= 0)) {
				$chance->setId(-1);
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
			
			$smarty->assign("template", "chance_form");
			$smarty->assign("chance", $chance);
			$smarty->assign("source", $sourceId);
			$smarty->assign("titel", ($id == -1 ? "Kans toevoegen" : "Kans aanpassen"));
		}
		

	} else if (isset($_POST['finishChance'])) {
		
		$source = $_POST['source'];//urldecode($_POST['source']);

		$id = $_POST['id'];
		$chance = KansPeer::retrieveByPk($id);
		
		if ($chance != null) {
			$chance->setAfgehandeld(true);
			$chance->setResultaat($_POST['resultaat']);
			$chance->setBedragInschrijving(null);
			$chance->setBedragConcurrent(null);
			$chance->setGemistOpmerking(null);
			
			switch ($_POST['resultaat']) {
				case 1:
					$chance->setBedragInschrijving($_POST['bedrag_inschrijving']);
					break;
				case 2:		
					$chance->setBedragInschrijving($_POST['bedrag_inschrijving']);					
					$chance->setBedragConcurrent($_POST['bedrag_concurrent']);
					$chance->setGemistOpmerking($_POST['gemist_opmerking']);
					break;
				case 3:
					break;
			}
			
			$chance->save();
			
			//redirecten naar source
			header("Location:".$source);
			
		} else {
			$smarty->assign("template", "invalid_page");
		}
		
		
	} else if (isset($_GET['action'])) {

		if (isset($_GET['id'])){			
			$chance = KansPeer::retrieveByPk($_GET['id']);
			if ($chance != null) {
			
				//source bepalen
				if (isset($_GET['source'])) {
					$sourceId = $_GET['source'];
					$source = $sources[$sourceId];
					if ($sourceId == 1) {
						 $source .= "&id=".$chance->getOrganisatieId();
					}
				}
			
				if ($_GET['action'] == "del"){
					//kans verwijderen
					$source .= "&k=del";				
					$chance->delete();
								
					//redirecten naar source
					header("Location:".$source);
					
				} else if ($_GET['action'] == "fin") {
					//kans afhandelen
					$source .= "&k=fin";
					//$encodedSource = urlencode($source);
					
					$smarty->assign("template", "chance_finish_form");
					$smarty->assign("source", $source);//$encodedSource);
					$smarty->assign("chance", $chance);	
				}

				
			}
			
			
		} else {
			$smarty->assign("template", "invalid_page");
		}	
	} else {
	
		//toevoegen of aanpassen
		$chance_id = (isset($_GET['id']) ? $_GET['id'] : -1);
		if ($chance_id == -1) {
			$chance = new Kans();
			$chance->setId(-1);
		} else {
			$chance = KansPeer::retrieveByPk($chance_id);
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
		
		$smarty->assign("template", "chance_form");
		$smarty->assign("titel", ($chance_id == -1 ? "Kans toevoegen" : "Kans aanpassen"));
		$smarty->assign("source", $source);
		$smarty->assign("chance", $chance);		
	}
	
	$smarty->display("page.tpl");

?>