<?php


/**
 * Base static class for performing query and update operations on the 'organisatie' table.
 *
 * 
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseOrganisatiePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'CRM_TI';

	/** the table name for this class */
	const TABLE_NAME = 'organisatie';

	/** the related Propel class for this table */
	const OM_CLASS = 'Organisatie';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'CRM_TI.Organisatie';

	/** the related TableMap class for this table */
	const TM_CLASS = 'OrganisatieTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'organisatie.ID';

	/** the column name for the NAAM field */
	const NAAM = 'organisatie.NAAM';

	/** the column name for the POSTBUS_POST field */
	const POSTBUS_POST = 'organisatie.POSTBUS_POST';

	/** the column name for the POSTCODE_POST field */
	const POSTCODE_POST = 'organisatie.POSTCODE_POST';

	/** the column name for the STAD_POST field */
	const STAD_POST = 'organisatie.STAD_POST';

	/** the column name for the STRAAT_BEZOEK field */
	const STRAAT_BEZOEK = 'organisatie.STRAAT_BEZOEK';

	/** the column name for the NUMMER_BEZOEK field */
	const NUMMER_BEZOEK = 'organisatie.NUMMER_BEZOEK';

	/** the column name for the POSTCODE_BEZOEK field */
	const POSTCODE_BEZOEK = 'organisatie.POSTCODE_BEZOEK';

	/** the column name for the STAD_BEZOEK field */
	const STAD_BEZOEK = 'organisatie.STAD_BEZOEK';

	/** the column name for the TELEFOON_ALGEMEEN field */
	const TELEFOON_ALGEMEEN = 'organisatie.TELEFOON_ALGEMEEN';

	/** the column name for the WEBSITE field */
	const WEBSITE = 'organisatie.WEBSITE';

	/** the column name for the PROVINCIE_ID field */
	const PROVINCIE_ID = 'organisatie.PROVINCIE_ID';

	/** the column name for the TYPE_ID field */
	const TYPE_ID = 'organisatie.TYPE_ID';

	/** the column name for the DELETED_AT field */
	const DELETED_AT = 'organisatie.DELETED_AT';

	/**
	 * An identiy map to hold any loaded instances of Organisatie objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Organisatie[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Naam', 'PostbusPost', 'PostcodePost', 'StadPost', 'StraatBezoek', 'NummerBezoek', 'PostcodeBezoek', 'StadBezoek', 'TelefoonAlgemeen', 'Website', 'ProvincieId', 'TypeId', 'DeletedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'naam', 'postbusPost', 'postcodePost', 'stadPost', 'straatBezoek', 'nummerBezoek', 'postcodeBezoek', 'stadBezoek', 'telefoonAlgemeen', 'website', 'provincieId', 'typeId', 'deletedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAAM, self::POSTBUS_POST, self::POSTCODE_POST, self::STAD_POST, self::STRAAT_BEZOEK, self::NUMMER_BEZOEK, self::POSTCODE_BEZOEK, self::STAD_BEZOEK, self::TELEFOON_ALGEMEEN, self::WEBSITE, self::PROVINCIE_ID, self::TYPE_ID, self::DELETED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAAM', 'POSTBUS_POST', 'POSTCODE_POST', 'STAD_POST', 'STRAAT_BEZOEK', 'NUMMER_BEZOEK', 'POSTCODE_BEZOEK', 'STAD_BEZOEK', 'TELEFOON_ALGEMEEN', 'WEBSITE', 'PROVINCIE_ID', 'TYPE_ID', 'DELETED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'naam', 'postbus_post', 'postcode_post', 'stad_post', 'straat_bezoek', 'nummer_bezoek', 'postcode_bezoek', 'stad_bezoek', 'telefoon_algemeen', 'website', 'provincie_id', 'type_id', 'deleted_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Naam' => 1, 'PostbusPost' => 2, 'PostcodePost' => 3, 'StadPost' => 4, 'StraatBezoek' => 5, 'NummerBezoek' => 6, 'PostcodeBezoek' => 7, 'StadBezoek' => 8, 'TelefoonAlgemeen' => 9, 'Website' => 10, 'ProvincieId' => 11, 'TypeId' => 12, 'DeletedAt' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'naam' => 1, 'postbusPost' => 2, 'postcodePost' => 3, 'stadPost' => 4, 'straatBezoek' => 5, 'nummerBezoek' => 6, 'postcodeBezoek' => 7, 'stadBezoek' => 8, 'telefoonAlgemeen' => 9, 'website' => 10, 'provincieId' => 11, 'typeId' => 12, 'deletedAt' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAAM => 1, self::POSTBUS_POST => 2, self::POSTCODE_POST => 3, self::STAD_POST => 4, self::STRAAT_BEZOEK => 5, self::NUMMER_BEZOEK => 6, self::POSTCODE_BEZOEK => 7, self::STAD_BEZOEK => 8, self::TELEFOON_ALGEMEEN => 9, self::WEBSITE => 10, self::PROVINCIE_ID => 11, self::TYPE_ID => 12, self::DELETED_AT => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAAM' => 1, 'POSTBUS_POST' => 2, 'POSTCODE_POST' => 3, 'STAD_POST' => 4, 'STRAAT_BEZOEK' => 5, 'NUMMER_BEZOEK' => 6, 'POSTCODE_BEZOEK' => 7, 'STAD_BEZOEK' => 8, 'TELEFOON_ALGEMEEN' => 9, 'WEBSITE' => 10, 'PROVINCIE_ID' => 11, 'TYPE_ID' => 12, 'DELETED_AT' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'naam' => 1, 'postbus_post' => 2, 'postcode_post' => 3, 'stad_post' => 4, 'straat_bezoek' => 5, 'nummer_bezoek' => 6, 'postcode_bezoek' => 7, 'stad_bezoek' => 8, 'telefoon_algemeen' => 9, 'website' => 10, 'provincie_id' => 11, 'type_id' => 12, 'deleted_at' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. OrganisatiePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(OrganisatiePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(OrganisatiePeer::ID);
			$criteria->addSelectColumn(OrganisatiePeer::NAAM);
			$criteria->addSelectColumn(OrganisatiePeer::POSTBUS_POST);
			$criteria->addSelectColumn(OrganisatiePeer::POSTCODE_POST);
			$criteria->addSelectColumn(OrganisatiePeer::STAD_POST);
			$criteria->addSelectColumn(OrganisatiePeer::STRAAT_BEZOEK);
			$criteria->addSelectColumn(OrganisatiePeer::NUMMER_BEZOEK);
			$criteria->addSelectColumn(OrganisatiePeer::POSTCODE_BEZOEK);
			$criteria->addSelectColumn(OrganisatiePeer::STAD_BEZOEK);
			$criteria->addSelectColumn(OrganisatiePeer::TELEFOON_ALGEMEEN);
			$criteria->addSelectColumn(OrganisatiePeer::WEBSITE);
			$criteria->addSelectColumn(OrganisatiePeer::PROVINCIE_ID);
			$criteria->addSelectColumn(OrganisatiePeer::TYPE_ID);
			$criteria->addSelectColumn(OrganisatiePeer::DELETED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.NAAM');
			$criteria->addSelectColumn($alias . '.POSTBUS_POST');
			$criteria->addSelectColumn($alias . '.POSTCODE_POST');
			$criteria->addSelectColumn($alias . '.STAD_POST');
			$criteria->addSelectColumn($alias . '.STRAAT_BEZOEK');
			$criteria->addSelectColumn($alias . '.NUMMER_BEZOEK');
			$criteria->addSelectColumn($alias . '.POSTCODE_BEZOEK');
			$criteria->addSelectColumn($alias . '.STAD_BEZOEK');
			$criteria->addSelectColumn($alias . '.TELEFOON_ALGEMEEN');
			$criteria->addSelectColumn($alias . '.WEBSITE');
			$criteria->addSelectColumn($alias . '.PROVINCIE_ID');
			$criteria->addSelectColumn($alias . '.TYPE_ID');
			$criteria->addSelectColumn($alias . '.DELETED_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Organisatie
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = OrganisatiePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return OrganisatiePeer::populateObjects(OrganisatiePeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			OrganisatiePeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Organisatie $value A Organisatie object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Organisatie $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Organisatie object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Organisatie) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Organisatie object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Organisatie Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to organisatie
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = OrganisatiePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = OrganisatiePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				OrganisatiePeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Organisatie object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = OrganisatiePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = OrganisatiePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + OrganisatiePeer::NUM_COLUMNS;
		} else {
			$cls = OrganisatiePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			OrganisatiePeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Provincie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinProvincie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related OrganisatieType table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinOrganisatieType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Organisatie objects pre-filled with their Provincie objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Organisatie objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinProvincie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol = (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);
		ProvinciePeer::addSelectColumns($criteria);

		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = OrganisatiePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = OrganisatiePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				OrganisatiePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = ProvinciePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = ProvinciePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ProvinciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					ProvinciePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Organisatie) to $obj2 (Provincie)
				$obj2->addOrganisatie($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Organisatie objects pre-filled with their OrganisatieType objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Organisatie objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinOrganisatieType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol = (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);
		OrganisatieTypePeer::addSelectColumns($criteria);

		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = OrganisatiePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = OrganisatiePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				OrganisatiePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = OrganisatieTypePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = OrganisatieTypePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = OrganisatieTypePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					OrganisatieTypePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Organisatie) to $obj2 (OrganisatieType)
				$obj2->addOrganisatie($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of Organisatie objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Organisatie objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol2 = (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);

		ProvinciePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ProvinciePeer::NUM_COLUMNS - ProvinciePeer::NUM_LAZY_LOAD_COLUMNS);

		OrganisatieTypePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (OrganisatieTypePeer::NUM_COLUMNS - OrganisatieTypePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = OrganisatiePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = OrganisatiePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				OrganisatiePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Provincie rows

			$key2 = ProvinciePeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = ProvinciePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = ProvinciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ProvinciePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Organisatie) to the collection in $obj2 (Provincie)
				$obj2->addOrganisatie($obj1);
			} // if joined row not null

			// Add objects for joined OrganisatieType rows

			$key3 = OrganisatieTypePeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = OrganisatieTypePeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = OrganisatieTypePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					OrganisatieTypePeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (Organisatie) to the collection in $obj3 (OrganisatieType)
				$obj3->addOrganisatie($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related Provincie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptProvincie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related OrganisatieType table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptOrganisatieType(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			OrganisatiePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of Organisatie objects pre-filled with all related objects except Provincie.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Organisatie objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptProvincie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol2 = (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);

		OrganisatieTypePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (OrganisatieTypePeer::NUM_COLUMNS - OrganisatieTypePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(OrganisatiePeer::TYPE_ID, OrganisatieTypePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = OrganisatiePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = OrganisatiePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				OrganisatiePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined OrganisatieType rows

				$key2 = OrganisatieTypePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = OrganisatieTypePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = OrganisatieTypePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrganisatieTypePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Organisatie) to the collection in $obj2 (OrganisatieType)
				$obj2->addOrganisatie($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of Organisatie objects pre-filled with all related objects except OrganisatieType.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Organisatie objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptOrganisatieType(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol2 = (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);

		ProvinciePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (ProvinciePeer::NUM_COLUMNS - ProvinciePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(OrganisatiePeer::PROVINCIE_ID, ProvinciePeer::ID, $join_behavior);

		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled()) {
			$criteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = OrganisatiePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = OrganisatiePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				OrganisatiePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Provincie rows

				$key2 = ProvinciePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = ProvinciePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = ProvinciePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					ProvinciePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (Organisatie) to the collection in $obj2 (Provincie)
				$obj2->addOrganisatie($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseOrganisatiePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseOrganisatiePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new OrganisatieTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? OrganisatiePeer::CLASS_DEFAULT : OrganisatiePeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Organisatie or Criteria object.
	 *
	 * @param      mixed $values Criteria or Organisatie object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Organisatie object
		}

		if ($criteria->containsKey(OrganisatiePeer::ID) && $criteria->keyContainsValue(OrganisatiePeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrganisatiePeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Organisatie or Criteria object.
	 *
	 * @param      mixed $values Criteria or Organisatie object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(OrganisatiePeer::ID);
			$value = $criteria->remove(OrganisatiePeer::ID);
			if ($value) {
				$selectCriteria->add(OrganisatiePeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(OrganisatiePeer::TABLE_NAME);
			}

		} else { // $values is Organisatie object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the organisatie table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doForceDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(OrganisatiePeer::TABLE_NAME, $con, OrganisatiePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			OrganisatiePeer::clearInstancePool();
			OrganisatiePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Organisatie or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Organisatie object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doForceDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			OrganisatiePeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Organisatie) { // it's a model object
			// invalidate the cache for this single object
			OrganisatiePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OrganisatiePeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				OrganisatiePeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			OrganisatiePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Organisatie object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Organisatie $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Organisatie $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(OrganisatiePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(OrganisatiePeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::NAAM))
			$columns[OrganisatiePeer::NAAM] = $obj->getNaam();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::POSTBUS_POST))
			$columns[OrganisatiePeer::POSTBUS_POST] = $obj->getPostbusPost();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::POSTCODE_POST))
			$columns[OrganisatiePeer::POSTCODE_POST] = $obj->getPostcodePost();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::STAD_POST))
			$columns[OrganisatiePeer::STAD_POST] = $obj->getStadPost();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::STRAAT_BEZOEK))
			$columns[OrganisatiePeer::STRAAT_BEZOEK] = $obj->getStraatBezoek();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::NUMMER_BEZOEK))
			$columns[OrganisatiePeer::NUMMER_BEZOEK] = $obj->getNummerBezoek();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::POSTCODE_BEZOEK))
			$columns[OrganisatiePeer::POSTCODE_BEZOEK] = $obj->getPostcodeBezoek();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::STAD_BEZOEK))
			$columns[OrganisatiePeer::STAD_BEZOEK] = $obj->getStadBezoek();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::TELEFOON_ALGEMEEN))
			$columns[OrganisatiePeer::TELEFOON_ALGEMEEN] = $obj->getTelefoonAlgemeen();

		if ($obj->isNew() || $obj->isColumnModified(OrganisatiePeer::WEBSITE))
			$columns[OrganisatiePeer::WEBSITE] = $obj->getWebsite();

		}

		return BasePeer::doValidate(OrganisatiePeer::DATABASE_NAME, OrganisatiePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Organisatie
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = OrganisatiePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(OrganisatiePeer::DATABASE_NAME);
		$criteria->add(OrganisatiePeer::ID, $pk);

		$v = OrganisatiePeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(OrganisatiePeer::DATABASE_NAME);
			$criteria->add(OrganisatiePeer::ID, $pks, Criteria::IN);
			$objs = OrganisatiePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// soft_delete behavior
	
	/**
	 * Enable the soft_delete behavior for this model
	 */
	public static function enableSoftDelete()
	{
		OrganisatieQuery::enableSoftDelete();
		// some soft_deleted objects may be in the instance pool
		OrganisatiePeer::clearInstancePool();
	}
	
	/**
	 * Disable the soft_delete behavior for this model
	 */
	public static function disableSoftDelete()
	{
		OrganisatieQuery::disableSoftDelete();
	}
	
	/**
	 * Check the soft_delete behavior for this model
	 * @return boolean true if the soft_delete behavior is enabled
	 */
	public static function isSoftDeleteEnabled()
	{
		return OrganisatieQuery::isSoftDeleteEnabled();
	}
	
	/**
	 * Soft delete records, given a Organisatie or Criteria object OR a primary key value.
	 *
	 * @param			 mixed $values Criteria or Organisatie object or primary key or array of primary keys
	 *							which is used to create the DELETE statement
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doSoftDelete($values, PropelPDO $con = null)
	{
		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Organisatie) {
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OrganisatiePeer::ID, (array) $values, Criteria::IN);
		}
		$criteria->add(OrganisatiePeer::DELETED_AT, time());
		return OrganisatiePeer::doUpdate($criteria, $con);
	}
	
	/**
	 * Delete or soft delete records, depending on OrganisatiePeer::$softDelete
	 *
	 * @param			 mixed $values Criteria or Organisatie object or primary key or array of primary keys
	 *							which is used to create the DELETE statement
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDelete($values, PropelPDO $con = null)
	{
		if (OrganisatiePeer::isSoftDeleteEnabled()) {
			return OrganisatiePeer::doSoftDelete($values, $con);
		} else {
			return OrganisatiePeer::doForceDelete($values, $con);
		} 
	}
	/**
	 * Method to soft delete all rows from the organisatie table.
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doSoftDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(OrganisatiePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$selectCriteria = new Criteria();
		$selectCriteria->add(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		$selectCriteria->setDbName(OrganisatiePeer::DATABASE_NAME);
		$modifyCriteria = new Criteria();
		$modifyCriteria->add(OrganisatiePeer::DELETED_AT, time());
		return BasePeer::doUpdate($selectCriteria, $modifyCriteria, $con);
	}
	
	/**
	 * Delete or soft delete all records, depending on OrganisatiePeer::$softDelete
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if (OrganisatiePeer::isSoftDeleteEnabled()) {
			return OrganisatiePeer::doSoftDeleteAll($con);
		} else {
			return OrganisatiePeer::doForceDeleteAll($con);
		} 
	}

} // BaseOrganisatiePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOrganisatiePeer::buildTableMap();

