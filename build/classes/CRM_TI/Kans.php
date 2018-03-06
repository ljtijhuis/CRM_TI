<?php

require 'CRM_TI/om/BaseKans.php';


/**
 * Skeleton subclass for representing a row from the 'kans' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Kans extends BaseKans {

	const OPEN = 0;
	const OPDRACHT = 1;
	const GEMIST = 2;
	const VERVALLEN = 3;

	public function doValidate($columns = null){
		$validationErrors = parent::doValidate($columns);
		
		$r = $this->getResultaat();
		if (($r == Kans::OPDRACHT || $r == Kans::GEMIST) && $this->getBedragInschrijving() == "") {
			$validationErrors[] = "Een inschrijf bedrag opgeven is verplicht";
		}
		if ($r == Kans::GEMIST && $this->getBedragConcurrent() == "") {
			$validationErrors[] = "Het bedrag van de concurrent opgeven is verplicht";
		}
		return $validationErrors;		
	}

	public function getOrganisatie() {
		OrganisatieQuery::disableSoftDelete();
		return parent::getOrganisatie();
	}

	public function getOrganisatieNaam() {
		$org = $this->getOrganisatie();
                return $org == null ? "" : $org->getNaam();
	}
	
	public function getResultaat() {
		$r = parent::getResultaat();
		return $r == null ? Kans::OPEN : $r;
	}
	
	public function getVirtueleOmzet() {
		$percentage = $this->getKans() / 100.00;
		return $this->getBedrag() * $percentage;
	}
	
	public function getPlanningUitvraagFormatted() {
		return $this->getPlanningUitvraag("M Y");
	}

} // Kans
