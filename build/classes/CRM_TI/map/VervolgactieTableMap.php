<?php



/**
 * This class defines the structure of the 'vervolgactie' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.CRM_TI.map
 */
class VervolgactieTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.VervolgactieTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('vervolgactie');
		$this->setPhpName('Vervolgactie');
		$this->setClassname('Vervolgactie');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('DATUM', 'Datum', 'DATE', false, null, null);
		$this->addColumn('OMSCHRIJVING', 'Omschrijving', 'LONGVARCHAR', true, null, null);
		$this->addForeignKey('GEBRUIKER_ID', 'GebruikerId', 'INTEGER', 'gebruiker', 'ID', true, null, null);
		$this->addForeignKey('ORGANISATIE_ID', 'OrganisatieId', 'INTEGER', 'organisatie', 'ID', true, null, null);
		$this->addColumn('AFGEHANDELD', 'Afgehandeld', 'BOOLEAN', false, null, false);
		// validators
		$this->addValidator('DATUM', 'required', 'propel.validator.RequiredValidator', '', 'De datum opgeven is verplicht');
		$this->addValidator('OMSCHRIJVING', 'required', 'propel.validator.RequiredValidator', '', 'Een omschrijving opgeven is verplicht');
		$this->addValidator('GEBRUIKER_ID', 'required', 'propel.validator.RequiredValidator', '', 'De gebruiker opgeven is verplicht');
		$this->addValidator('ORGANISATIE_ID', 'required', 'propel.validator.RequiredValidator', '', 'De organisatie opgeven is verplicht');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Gebruiker', 'Gebruiker', RelationMap::MANY_TO_ONE, array('gebruiker_id' => 'id', ), null, null);
    $this->addRelation('Organisatie', 'Organisatie', RelationMap::MANY_TO_ONE, array('organisatie_id' => 'id', ), null, null);
	} // buildRelations()

} // VervolgactieTableMap
