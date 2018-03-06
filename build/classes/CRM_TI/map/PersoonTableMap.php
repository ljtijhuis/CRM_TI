<?php



/**
 * This class defines the structure of the 'persoon' table.
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
class PersoonTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.PersoonTableMap';

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
		$this->setName('persoon');
		$this->setPhpName('Persoon');
		$this->setClassname('Persoon');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('ACHTERNAAM', 'Achternaam', 'VARCHAR', true, 128, null);
		$this->addColumn('VOORLETTERS', 'Voorletters', 'VARCHAR', false, 16, null);
		$this->addColumn('ROEPNAAM', 'Roepnaam', 'VARCHAR', false, 128, null);
		$this->addColumn('FUNCTIE', 'Functie', 'VARCHAR', false, 128, null);
		$this->addColumn('GESLACHT', 'Geslacht', 'BOOLEAN', false, null, null);
		$this->addColumn('ACTIEF', 'Actief', 'BOOLEAN', false, null, true);
		$this->addColumn('TELEFOON_PRIMAIR', 'TelefoonPrimair', 'VARCHAR', false, 32, null);
		$this->addColumn('TELEFOON_SECUNDAIR', 'TelefoonSecundair', 'VARCHAR', false, 32, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 64, null);
		$this->addForeignKey('ORGANISATIE_ID', 'OrganisatieId', 'INTEGER', 'organisatie', 'ID', false, null, null);
		$this->addColumn('KERSTKAART', 'Kerstkaart', 'BOOLEAN', false, null, null);
		$this->addColumn('MAILING', 'Mailing', 'BOOLEAN', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
		$this->addValidator('ACHTERNAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De achternaam mag niet langer dan 128 tekens zijn');
		$this->addValidator('ACHTERNAAM', 'required', 'propel.validator.RequiredValidator', '', 'De achternaam opgeven is verplicht');
		$this->addValidator('VOORLETTERS', 'maxLength', 'propel.validator.MaxLengthValidator', '16', 'De voorletters mogen niet langer dan 16 tekens zijn');
		$this->addValidator('ROEPNAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De roepnaam mag niet langer dan 128 tekens zijn');
		$this->addValidator('FUNCTIE', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De functie mag niet langer dan 128 tekens zijn');
		$this->addValidator('TELEFOON_PRIMAIR', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Het primaire telefoonnummer mag niet langer dan 32 tekens zijn');
		$this->addValidator('TELEFOON_SECUNDAIR', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Het secundaire telefoonnummer mag niet langer dan 32 tekens zijn');
		$this->addValidator('EMAIL', 'maxLength', 'propel.validator.MaxLengthValidator', '64', 'Het emailadres mag niet langer dan 64 tekens zijn');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Organisatie', 'Organisatie', RelationMap::MANY_TO_ONE, array('organisatie_id' => 'id', ), null, null);
    $this->addRelation('Contact', 'Contact', RelationMap::ONE_TO_MANY, array('id' => 'persoon_id', ), null, null);
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

} // PersoonTableMap
