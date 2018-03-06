<?php



/**
 * This class defines the structure of the 'gebruiker' table.
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
class GebruikerTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.GebruikerTableMap';

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
		$this->setName('gebruiker');
		$this->setPhpName('Gebruiker');
		$this->setClassname('Gebruiker');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('VOORNAAM', 'Voornaam', 'VARCHAR', true, 128, null);
		$this->addColumn('ACHTERNAAM', 'Achternaam', 'VARCHAR', true, 128, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
		$this->addValidator('VOORNAAM', 'unique', 'propel.validator.UniqueValidator', '', 'Voornaam en achternaam mogen niet identiek zijn');
		$this->addValidator('VOORNAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De voornaam mag niet langer dan 128 tekens zijn');
		$this->addValidator('VOORNAAM', 'required', 'propel.validator.RequiredValidator', '', 'De voornaam opgeven is verplicht');
		$this->addValidator('ACHTERNAAM', 'unique', 'propel.validator.UniqueValidator', '', 'Voornaam en achternaam mogen niet identiek zijn');
		$this->addValidator('ACHTERNAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De achternaam mag niet langer dan 128 tekens zijn');
		$this->addValidator('ACHTERNAAM', 'required', 'propel.validator.RequiredValidator', '', 'De achternaam opgeven is verplicht');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Contact', 'Contact', RelationMap::ONE_TO_MANY, array('id' => 'gebruiker_id', ), null, null);
    $this->addRelation('Vervolgactie', 'Vervolgactie', RelationMap::ONE_TO_MANY, array('id' => 'gebruiker_id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'soft_delete' => array('deleted_column' => 'deleted_at', ),
		);
	} // getBehaviors()

} // GebruikerTableMap
