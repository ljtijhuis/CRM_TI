<?php

require 'CRM_TI/om/BaseOrganisatie.php';


/**
 * Skeleton subclass for representing a row from the 'organisatie' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Organisatie extends BaseOrganisatie {
	
	public function getContacts() {
		$c = new Criteria();
		$c->addDescendingOrderByColumn(ContactPeer::DATUM);
		return parent::getContacts($c);
		/*$medewerkers = $this->getPersoons();
		$contacts = array();
		foreach($medewerkers as $medewerker) {
			$c = $medewerker->getContacts();
			foreach($c as $contact) {
				$contacts[] = $contact;
			}
		}
		return $contacts;	*/
	}
	
	public function getVervolgacties($afgehandeld = false) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(VervolgactiePeer::DATUM);
		$c->add(VervolgactiePeer::AFGEHANDELD, $afgehandeld);
		return parent::getVervolgacties($c);
	}

	public function getProvincie() {
		ProvincieQuery::disableSoftDelete();
		return parent::getProvincie();
	}

	public function getOrganisatieType() {
		OrganisatieTypeQuery::disableSoftDelete();
		return parent::getOrganisatieType();
	}
	
	public function getTotaleVirtueleOmzet() {
		$chances = $this->getKanss();
		$total = 0;
		foreach ($chances as $chance) {
			if (!$chance->getAfgehandeld()) {
				$total += $chance->getVirtueleOmzet();
			}
		}
		return $total;
	}
	
	public function getKanss($afgehandeld = false) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(KansPeer::PLANNING_UITVRAAG);
		$c->add(KansPeer::AFGEHANDELD, $afgehandeld);
		
		return parent::getKanss($c);
	}

} // Organisatie
