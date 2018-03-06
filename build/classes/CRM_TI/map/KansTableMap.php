<?php



/**
 * This class defines the structure of the 'kans' table.
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
class KansTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'CRM_TI.map.KansTableMap';

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
		$this->setName('kans');
		$this->setPhpName('Kans');
		$this->setClassname('Kans');
		$this->setPackage('CRM_TI');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('DATUM', 'Datum', 'DATE', true, null, null);
		$this->addColumn('OMSCHRIJVING', 'Omschrijving', 'LONGVARCHAR', true, null, null);
		$this->addForeignKey('ORGANISATIE_ID', 'OrganisatieId', 'INTEGER', 'organisatie', 'ID', true, null, null);
		$this->addColumn('OMSCHRIJVING_PRODUCT', 'OmschrijvingProduct', 'LONGVARCHAR', false, null, null);
		$this->addColumn('WIJZE_AANBESTEDING', 'WijzeAanbesteding', 'VARCHAR', true, 128, null);
		$this->addColumn('PLANNING_UITVRAAG', 'PlanningUitvraag', 'DATE', true, null, null);
		$this->addColumn('BEDRAG', 'Bedrag', 'DECIMAL', true, null, null);
		$this->addColumn('KANS', 'Kans', 'DOUBLE', true, null, null);
		$this->addColumn('AFGEHANDELD', 'Afgehandeld', 'BOOLEAN', false, null, false);
		$this->addColumn('RESULTAAT', 'Resultaat', 'INTEGER', false, null, null);
		$this->addColumn('BEDRAG_INSCHRIJVING', 'BedragInschrijving', 'DECIMAL', false, null, null);
		$this->addColumn('BEDRAG_CONCURRENT', 'BedragConcurrent', 'DECIMAL', false, null, null);
		$this->addColumn('GEMIST_OPMERKING', 'GemistOpmerking', 'LONGVARCHAR', false, null, null);
		// validators
		$this->addValidator('DATUM', 'required', 'propel.validator.RequiredValidator', '', 'De datum opgeven is verplicht');
		$this->addValidator('OMSCHRIJVING', 'required', 'propel.validator.RequiredValidator', '', 'Een omschrijving opgeven is verplicht');
		$this->addValidator('ORGANISATIE_ID', 'required', 'propel.validator.RequiredValidator', '', 'Een organisatie opgeven is verplicht');
		$this->addValidator('WIJZE_AANBESTEDING', 'required', 'propel.validator.RequiredValidator', '', 'De wijze van aanbesteden opgeven is verplicht');
		$this->addValidator('WIJZE_AANBESTEDING', 'maxLength', 'propel.validator.MaxLengthValidator', '128', 'De wijze van aanbesteding mag niet langer dan 128 tekens zijn');
		$this->addValidator('PLANNING_UITVRAAG', 'required', 'propel.validator.RequiredValidator', '', 'De datum voor planning uitvraag opgeven is verplicht');
		$this->addValidator('BEDRAG', 'required', 'propel.validator.RequiredValidator', '', 'Een bedrag opgeven is verplicht');
		$this->addValidator('KANS', 'required', 'propel.validator.RequiredValidator', '', 'Een kans (percentage) opgeven is verplicht');
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Organisatie', 'Organisatie', RelationMap::MANY_TO_ONE, array('organisatie_id' => 'id', ), null, null);
	} // buildRelations()

} // KansTableMap
