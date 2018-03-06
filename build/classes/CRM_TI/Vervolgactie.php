<?php

require 'CRM_TI/om/BaseVervolgactie.php';


/**
 * Skeleton subclass for representing a row from the 'vervolgactie' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Vervolgactie extends BaseVervolgactie {

	
	public function getGebruikerNaam() {
		return $this->getGebruiker()->getNaam();
	}
	
	public function getOrganisatieNaam() {
		$org = $this->getOrganisatie();
		return $org == null ? "" : $org->getNaam();
	}

	public function getGebruiker() {
		GebruikerQuery::disableSoftDelete();
		return parent::getGebruiker();
	}

	public function getOrganisatie() {
		OrganisatieQuery::disableSoftDelete();
		return parent::getOrganisatie();
	}

} // Vervolgactie
