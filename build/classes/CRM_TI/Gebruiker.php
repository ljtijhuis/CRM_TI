<?php

require 'CRM_TI/om/BaseGebruiker.php';


/**
 * Skeleton subclass for representing a row from the 'gebruiker' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    CRM_TI
 */
class Gebruiker extends BaseGebruiker {

	public function getContacts() {
		$c = new Criteria();
		$c->addDescendingOrderByColumn(ContactPeer::DATUM);
		return parent::getContacts($c);
	}

	function getNaam(){
		return $this->getAchternaam(). ", " .$this->getVoornaam();
	}

	public function getVervolgacties($afgehandeld = false) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(VervolgactiePeer::DATUM);
		$c->add(VervolgactiePeer::AFGEHANDELD, $afgehandeld);
		return parent::getVervolgacties($c);
	}


} // Gebruiker
