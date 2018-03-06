<?php

require 'CRM_TI/om/BasePersoon.php';


/**
 * Skeleton subclass for representing a row from the 'persoon' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Persoon extends BasePersoon {

	public function getNaam() {
		return $this->getAchternaam(). ", " .$this->getRoepnaam();
	}

	public function getOrganisatie() {
		OrganisatieQuery::disableSoftDelete();
		return parent::getOrganisatie();
	}

	public function getContacts() {
		$c = new Criteria();
		$c->addDescendingOrderByColumn(ContactPeer::DATUM);
		return parent::getContacts($c);
	}


} // Persoon
