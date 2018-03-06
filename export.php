<?php
	
error_reporting(E_ALL);
ini_set('display_errors', '1');

	require_once "includes/conf.php";
	require_once "includes/Spreadsheet/Excel/Writer.php";

	function exportPersons($persons) {

		// Creating a workbook
		$workbook = new Spreadsheet_Excel_Writer();
		
		// sending HTTP headers
		$workbook->send('export'.date("Ymd-His").'.xls');
		
		// Creating a worksheet
		$worksheet =& $workbook->addWorksheet('export_data');
		
		// The headers
		$worksheet->write(0, 0, 'achternaam');
		$worksheet->write(0, 1, 'voorletters');
		$worksheet->write(0, 2, 'roepnaam');
		$worksheet->write(0, 3, 'functie');
		$worksheet->write(0, 4, 'geslacht');
		$worksheet->write(0, 5, 'actief');
		$worksheet->write(0, 6, 'telefoon_primair');
		$worksheet->write(0, 7, 'telefoon_secundair');
		$worksheet->write(0, 8, 'email');
		$worksheet->write(0, 9, 'kerstkaart');
		$worksheet->write(0, 10, 'mailing');
		$worksheet->write(0, 11, 'organisatie_naam');
		$worksheet->write(0, 12, 'organisatie_postbus_postadres');
		$worksheet->write(0, 13, 'organisatie_postcode_postadres');
		$worksheet->write(0, 14, 'organisatie_stad_postadres');
		$worksheet->write(0, 15, 'organisatie_straat_bezoekadres');
		$worksheet->write(0, 16, 'organisatie_nummer_bezoekadres');
		$worksheet->write(0, 17, 'organisatie_postcode_bezoekadres');
		$worksheet->write(0, 18, 'organisatie_stad_bezoekadres');
		$worksheet->write(0, 19, 'organisatie_tel_algemeen');
		$worksheet->write(0, 20, 'organisatie_website');
		$worksheet->write(0, 21, 'organisatie_provincie');
		$worksheet->write(0, 22, 'organisatie_type');
		
		$row = 1;
		foreach($persons as $p) {
			$worksheet->write($row, 0, $p->getAchternaam());
			$worksheet->write($row, 1, $p->getVoorletters());
			$worksheet->write($row, 2, $p->getRoepnaam());
			$worksheet->write($row, 3, $p->getFunctie());
			$worksheet->write($row, 4, $p->getGeslacht()?"v":"m");
			$worksheet->write($row, 5, $p->getActief()?"1":"0");
			$worksheet->write($row, 6, $p->getTelefoonPrimair());
			$worksheet->write($row, 7, $p->getTelefoonSecundair());
			$worksheet->write($row, 8, $p->getEmail());
			$worksheet->write($row, 9, $p->getKerstkaart()?"1":"0");
			$worksheet->write($row, 10, $p->getMailing()?"1":"0");
			$o = $p->getOrganisatie();
			if ($o != null) {
				$worksheet->write($row, 11, $o->getNaam());
				$worksheet->write($row, 12, $o->getPostbusPost());
				$worksheet->write($row, 13, $o->getPostcodePost());
				$worksheet->write($row, 14, $o->getStadPost());
				$worksheet->write($row, 15, $o->getStraatBezoek());
				$worksheet->write($row, 16, $o->getNummerBezoek());
				$worksheet->write($row, 17, $o->getPostcodeBezoek());
				$worksheet->write($row, 18, $o->getStadBezoek());
				$worksheet->write($row, 19, $o->getTelefoonAlgemeen());
				$worksheet->write($row, 20, $o->getWebsite());
				$prov = $o->getProvincie();
				if ($prov != null) {
					$worksheet->write($row, 21, $prov->getNaam());
				}
				$otype = $o->getOrganisatieType();
				if ($otype != null) {
					$worksheet->write($row, 22, $otype->getNaam());
				}
			}
			$row++;
		}
			
		// Let's send the file
		$workbook->close();

	}
	
	
	/*print "check:" . (isset($_POST['postCheck']) ? "ja" : "nee");
	print "<pre>";
	var_dump($_POST);
	print "</pre>";
	*/
	if (isset($_POST['postCheck'])) {//export'])) {
	
		$provinces = isset($_POST['provinces']) ? $_POST['provinces'] : array();
		$organisation_types = isset($_POST['organisation_types']) ? $_POST['organisation_types'] : array();
		$companies = isset($_POST['companies']) ? $_POST['companies'] : array();
		$persons = isset($_POST['persons']) ? $_POST['persons'] : array();
		
		$kerstkaart = isset($_POST['kerstkaart']);
		$mailing = isset($_POST['mailing']);
		$actief = isset($_POST['actief']);
		$needtohavecompany = isset($_POST['needtohavecompany']);
				
	/*	print "provincies: "; var_dump($provinces); print "<br><br>";
		print "type: "; var_dump($organisation_types);print "<br><br>";
		print "bedrijven: "; var_dump($companies);print "<br><br>";
		print "personen: "; var_dump($persons);print "<br><br>";
		
		print "kerstkaart: "; var_dump($kerstkaart);print "<br><br>";
		print "mailing: "; var_dump($mailing);print "<br><br>";
		print "actief: "; var_dump($actief);print "<br><br>";
	*/	
		$selectedPersons = PersoonQuery::create()->findPKs($persons);
		
		$exportPersons = array();
		
		foreach ($selectedPersons as $p) {

			$kkaart = $p->getKerstkaart();
			$mail = $p->getMailing();
			$active = $p->getActief();
			
			$organisation = $p->getOrganisatie();
			if ($organisation == null && $needtohavecompany) continue;
			
			if ($organisation != null) {
				$organisation_id = $organisation->getId();
							
				$province = $organisation->getProvincieId();
				$organisation_type = $organisation->getTypeId();
	
				if (in_array($province, $provinces) &&
					in_array($organisation_type, $organisation_types) &&
					in_array($organisation_id, $companies) &&
					($kkaart == $kerstkaart || $kkaart) &&
					($mail == $mailing || $mail) &&
					($active == $actief || $active)) {
					$exportPersons[] = $p;
					//print "ADDED! ".$p->getNaam()."<br>";
				}
			} else {
				if (($kkaart == $kerstkaart || $kkaart) &&
					($mail == $mailing || $mail) &&
					($active == $actief || $active)) {
					$exportPersons[] = $p;
					//print "ADDED! ".$p->getNaam()."<br>";
				}
			}
		}
		exportPersons($exportPersons);
	}
	
	fillProvinciesList();
	fillTypesList();
	fillCompaniesList();
	fillPersonsList();
	
	$smarty->assign("template", "export");
	$smarty->display("page.tpl");
	
?>