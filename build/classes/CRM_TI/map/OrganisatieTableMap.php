<?php



/**
 * This class defines the structure of the 'organisatie' table.
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
class OrganisatieTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.OrganisatieTableMap';

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
		$this->setName('organisatie');
		$this->setPhpName('Organisatie');
		$this->setClassname('Organisatie');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAAM', 'Naam', 'VARCHAR', true, 255, null);
		$this->addColumn('POSTBUS_POST', 'PostbusPost', 'VARCHAR', false, 64, null);
		$this->addColumn('POSTCODE_POST', 'PostcodePost', 'VARCHAR', false, 16, null);
		$this->addColumn('STAD_POST', 'StadPost', 'VARCHAR', false, 255, null);
		$this->addColumn('STRAAT_BEZOEK', 'StraatBezoek', 'VARCHAR', false, 255, null);
		$this->addColumn('NUMMER_BEZOEK', 'NummerBezoek', 'VARCHAR', false, 16, null);
		$this->addColumn('POSTCODE_BEZOEK', 'PostcodeBezoek', 'VARCHAR', false, 16, null);
		$this->addColumn('STAD_BEZOEK', 'StadBezoek', 'VARCHAR', false, 255, null);
		$this->addColumn('TELEFOON_ALGEMEEN', 'TelefoonAlgemeen', 'VARCHAR', false, 32, null);
		$this->addColumn('WEBSITE', 'Website', 'VARCHAR', false, 255, null);
		$this->addForeignKey('PROVINCIE_ID', 'ProvincieId', 'INTEGER', 'provincie', 'ID', false, null, null);
		$this->addForeignKey('TYPE_ID', 'TypeId', 'INTEGER', 'organisatie_type', 'ID', false, null, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
		$this->addValidator('NAAM', 'unique', 'propel.validator.UniqueValidator', '', 'Organisatienamen mogen niet identiek zijn');
		$this->addValidator('NAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'De organisatienaam mag niet langer dan 255 tekens zijn');
		$this->addValidator('NAAM', 'required', 'propel.validator.RequiredValidator', '', 'De organisatienaam opgeven is verplicht');
		$this->addValidator('POSTBUS_POST', 'maxLength', 'propel.validator.MaxLengthValidator', '64', 'De postbus mag niet langer dan 64 tekens zijn');
		$this->addValidator('POSTCODE_POST', 'maxLength', 'propel.validator.MaxLengthValidator', '16', 'De postcode van het postadres mag niet langer dan 16 tekens zijn');
		$this->addValidator('STAD_POST', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'De stad van het postadres mag niet langer dan 255 tekens zijn');
		$this->addValidator('STRAAT_BEZOEK', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'De straatnaam van het bezoekadres mag niet langer dan 255 tekens zijn');
		$this->addValidator('NUMMER_BEZOEK', 'maxLength', 'propel.validator.MaxLengthValidator', '16', 'Het nummer van het bezoekadres mag niet langer dan 16 tekens zijn');
		$this->addValidator('POSTCODE_BEZOEK', 'maxLength', 'propel.validator.MaxLengthValidator', '16', 'De postcode van het bezoekadres mag niet langer dan 16 tekens zijn');
		$this->addValidator('STAD_BEZOEK', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'De stad van het bezoekadres mag niet langer dan 255 tekens zijn');
		$this->addValidator('TELEFOON_ALGEMEEN', 'maxLength', 'propel.validator.MaxLengthValidator', '32', 'Het algemene telefoonnummer mag niet langer dan 32 tekens zijn');
		$this->addValidator('WEBSITE', 'maxLength', 'propel.validator.MaxLengthValidator', '255', 'De website mag niet langer dan 255 tekens zijn');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Provincie', 'Provincie', RelationMap::MANY_TO_ONE, array('provincie_id' => 'id', ), null, null);
    $this->addRelation('OrganisatieType', 'OrganisatieType', RelationMap::MANY_TO_ONE, array('type_id' => 'id', ), null, null);
    $this->addRelation('Persoon', 'Persoon', RelationMap::ONE_TO_MANY, array('id' => 'organisatie_id', ), null, null);
    $this->addRelation('Contact', 'Contact', RelationMap::ONE_TO_MANY, array('id' => 'organisatie_id', ), null, null);
    $this->addRelation('Vervolgactie', 'Vervolgactie', RelationMap::ONE_TO_MANY, array('id' => 'organisatie_id', ), null, null);
    $this->addRelation('Kans', 'Kans', RelationMap::ONE_TO_MANY, array('id' => 'organisatie_id', ), null, null);
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

} // OrganisatieTableMap
