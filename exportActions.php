<?php
	
error_reporting(E_ALL);
ini_set('display_errors', '1');

	require_once "includes/conf.php";
	require_once "includes/Spreadsheet/Excel/Writer.php";

	function exportActions($contacts, $todos, $chances) {
		global $contact_wijzes, $resultaat_opties;
		//echo "<pre>";
		//var_dump($contacts);
		//echo "</pre>";		
		// Creating a workbook
		$workbook = new Spreadsheet_Excel_Writer();
		
		// sending HTTP headers
		$workbook->send('export'.date("Ymd-His").'.xls');
		
		// Creating a worksheet
		$worksheet =& $workbook->addWorksheet('contactmomenten');
		
		// The headers
		$worksheet->write(0, 0, 'datum');
		$worksheet->write(0, 1, 'organisatie');
		$worksheet->write(0, 2, 'medewerker');
		$worksheet->write(0, 3, 'telefoon_primair');
		$worksheet->write(0, 4, 'telefoon_secundair');
		$worksheet->write(0, 5, 'email');
		$worksheet->write(0, 6, 'gebruiker');
		$worksheet->write(0, 7, 'contact_wijze');
		$worksheet->write(0, 8, 'opmerkingen');

		$row = 1;
		foreach($contacts as $c) {
			$worksheet->write($row, 0, $c->getDatum());
			$o = $c->getOrganisatie();
			if ($o != null){
				$worksheet->write($row, 1, $o->getNaam());
			}
			$m = $c->getPersoon();
			if ($m != null){
				$worksheet->write($row, 2, $m->getNaam());
				$worksheet->write($row, 3, $m->getTelefoonPrimair());
				$worksheet->write($row, 4, $m->getTelefoonSecundair());
				$worksheet->write($row, 5, $m->getEmail());
			}
			$g = $c->getGebruiker();
			if ($g != null){
				$worksheet->write($row, 6, $g->getNaam());
			}
			$worksheet->write($row, 7, $contact_wijzes[$c->getWijze()]);
			$worksheet->write($row, 8, $c->getAandachtspunten());
			
			$row++;
		}
		
		$worksheet =& $workbook->addWorksheet('vervolgacties');
		
		// The headers
		$worksheet->write(0, 0, 'deadline');
		$worksheet->write(0, 1, 'organisatie');
		$worksheet->write(0, 2, 'gebruiker');
		$worksheet->write(0, 3, 'afgehandeld');
		$worksheet->write(0, 4, 'omschrijving');

		$row = 1;
		foreach($todos as $t) {
			$worksheet->write($row, 0, $t->getDatum());
			$o = $t->getOrganisatie();
			if ($o != null){
				$worksheet->write($row, 1, $o->getNaam());
			}
			$g = $t->getGebruiker();
			if ($g != null){
				$worksheet->write($row, 2, $g->getNaam());
			}
			$worksheet->write($row, 3, $t->getAfgehandeld() ? "1" : "0");
			$worksheet->write($row, 4, $t->getOmschrijving());
			
			$row++;
		}
				
		$worksheet =& $workbook->addWorksheet('kansen');
		
		// The headers
		$worksheet->write(0, 0, 'planning_uitvraag');
		$worksheet->write(0, 1, 'datum');
		$worksheet->write(0, 2, 'organisatie');
		$worksheet->write(0, 3, 'wijze_aanbesteding');
		$worksheet->write(0, 4, 'kans');
		$worksheet->write(0, 5, 'bedrag');
		$worksheet->write(0, 6, 'virtuele_omzet');
		$worksheet->write(0, 7, 'omschrijving');
		$worksheet->write(0, 8, 'product_omschrijving');
		$worksheet->write(0, 9, 'afgehandeld');
		$worksheet->write(0, 10, 'resultaat');
		$worksheet->write(0, 11, 'bedrag_inschrijving');
		$worksheet->write(0, 12, 'bedrag_concurrent');
		$worksheet->write(0, 13, 'gemist_opmerking');

		$row = 1;
		foreach($chances as $c) {
			$worksheet->write($row, 0, $c->getPlanningUitvraag());
			$worksheet->write($row, 1, $c->getDatum());
			$o = $c->getOrganisatie();
			if ($o != null) {
				$worksheet->write($row, 2, $o->getNaam());
			}
			$worksheet->write($row, 3, $c->getWijzeAanbesteding());
			$worksheet->write($row, 4, $c->getKans()+"%");
			$worksheet->write($row, 5, $c->getBedrag());
			$worksheet->write($row, 6, $c->getVirtueleOmzet());
			$worksheet->write($row, 7, $c->getOmschrijving());
			$worksheet->write($row, 8, $c->getOmschrijvingProduct());
			$worksheet->write($row, 9, $c->getAfgehandeld() ? "1" : "0");
			$worksheet->write($row, 10, $resultaat_opties[$c->getResultaat()]);
			$worksheet->write($row, 11, $c->getBedragInschrijving());
			$worksheet->write($row, 12, $c->getBedragConcurrent());
			$worksheet->write($row, 13, $c->getGemistOpmerking());
			$row++;
		}
		
		// Let's send the file
		$workbook->close();

	}
	
	if (isset($_POST['export'])) {
	
		if (!isset($_POST['dateFrom']) || !strtotime($_POST['dateFrom']) ||
			!isset($_POST['dateTo']) || !strtotime($_POST['dateTo'])) {
			//invalid dates
			$smarty->assign("message", "<p class=\"error\">Geef een geldige \"van\" en \"tot\" datum op</p>");
					
		} else {
			//export
			$fromDate = strtotime($_POST['dateFrom']);
			$toDate = strtotime($_POST['dateTo']);
			
			//contactmomenten
			$keywordContacts = $_POST['keywordContacts'];

			//vervolgacties
			$keywordTodos = $_POST['keywordTodos'];
			$onlyOpenTodos = isset($_POST['onlyOpenTodos']);
			
			//kansen
			$keywordChances = $_POST['keywordChances'];
			$exportOpenChances = isset($_POST['exportOpenChances']);
			$exportOpdrachtChances = isset($_POST['exportOpdrachtChances']);
			$exportGemistChances = isset($_POST['exportGemistChances']);
			$exportVervallenChances = isset($_POST['exportVervallenChances']);
			
			$contacts = ContactQuery::create()
				->filterByDatum(array('min' => $fromDate, 'max' => $toDate))
				->filterByAandachtspunten("%".$keywordContacts."%")
				->orderByDatum()
				->find();
				
			$todos = VervolgactieQuery::create()
				->filterByDatum(array('min' => $fromDate, 'max' => $toDate));
			if ($onlyOpenTodos) {
				$todos = $todos->filterByAfgehandeld(false);
			}
			$todos = $todos->filterByOmschrijving("%".$keywordTodos."%")
						->orderByDatum()
						->find();
			
			$chances = KansQuery::create()
				->filterByPlanningUitvraag(array('min' => $fromDate, 'max' => $toDate));
			
			$results = array();
			
			if ($exportOpenChances) {
				$results[] = Kans::OPEN;
			}
			if ($exportOpdrachtChances) {
				$results[] = Kans::OPDRACHT;
			}
			if ($exportGemistChances) {
				$results[] = Kans::GEMIST;
			}
			if ($exportVervallenChances) {
				$results[] = Kans::VERVALLEN;
			}
			
			$chances = $chances->where("Kans.Resultaat IN ?", $results);
			$chances = $chances->condition('cond1', 'Kans.Omschrijving LIKE ?', "%".$keywordChances."%")
				->condition('cond2', 'Kans.OmschrijvingProduct LIKE ?', "%".$keywordChances."%")
				->condition('cond3', 'Kans.WijzeAanbesteding LIKE ?', "%".$keywordChances."%")
				->condition('cond4', 'Kans.GemistOpmerking LIKE ?', "%".$keywordChances."%")
				->where(array('cond1','cond2','cond3','cond4'),'or');
			$chances = $chances->orderByPlanningUitvraag()
				->find();
			
			exportActions($contacts, $todos, $chances);
		}
	}
	
	$smarty->assign("template", "export_actions");
	$smarty->display("page.tpl");
	
?>