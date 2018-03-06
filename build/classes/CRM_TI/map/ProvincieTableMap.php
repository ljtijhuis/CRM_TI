<?php



/**
 * This class defines the structure of the 'provincie' table.
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
class ProvincieTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.ProvincieTableMap';

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
		$this->setName('provincie');
		$this->setPhpName('Provincie');
		$this->setClassname('Provincie');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAAM', 'Naam', 'VARCHAR', true, 128, null);
		$this->addColumn('DELETED_AT', 'DeletedAt', 'TIMESTAMP', false, null, null);
		// validators
		$this->addValidator('NAAM', 'unique', 'propel.validator.UniqueValidator', '', 'Provincies mogen niet identiek zijn');
		$this->addValidator('NAAM', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De provincie naam mag niet langer dan 128 tekens zijn');
		$this->addValidator('NAAM', 'required', 'propel.validator.RequiredValidator', '', 'Een naam opgeven is verplicht');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Organisatie', 'Organisatie', RelationMap::ONE_TO_MANY, array('id' => 'provincie_id', ), null, null);
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

} // ProvincieTableMap
