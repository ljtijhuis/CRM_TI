<?php

require 'CRM_TI/om/BaseContact.php';


/**
 * Skeleton subclass for representing a row from the 'contact' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Contact extends BaseContact {

	public function getPersoon() {
		PersoonQuery::disableSoftDelete();
		return parent::getPersoon();			
	}

	public function getGebruiker() {
		GebruikerQuery::disableSoftDelete();
		return parent::getGebruiker();
	}

	public function getOrganisatie() {
		OrganisatieQuery::disableSoftDelete();
		return parent::getOrganisatie();
	}

	public function getPersoonNaam() {
		$p = $this->getPersoon();
		return $p == null ? "" : $p->getNaam();
	}
	
	public function getOrganisatieNaam() {
		$org = $this->getOrganisatie();
		return $org == null ? "" : $org->getNaam();
	}
	
	public function getGebruikerNaam() {
		$g = $this->getGebruiker();
		return $g == null ? "" : $g->getNaam();
	}
	
} // Contact
