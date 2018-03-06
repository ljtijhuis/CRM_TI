<?php


/**
 * Base static class for performing query and update operations on the 'persoon' table.
 *
 * 
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BasePersoonPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'CRM_TI';

	/** the table name for this class */
	const TABLE_NAME = 'persoon';

	/** the related Propel class for this table */
	const OM_CLASS = 'Persoon';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'CRM_TI.Persoon';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PersoonTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'persoon.ID';

	/** the column name for the ACHTERNAAM field */
	const ACHTERNAAM = 'persoon.ACHTERNAAM';

	/** the column name for the VOORLETTERS field */
	const VOORLETTERS = 'persoon.VOORLETTERS';

	/** the column name for the ROEPNAAM field */
	const ROEPNAAM = 'persoon.ROEPNAAM';

	/** the column name for the FUNCTIE field */
	const FUNCTIE = 'persoon.FUNCTIE';

	/** the column name for the GESLACHT field */
	const GESLACHT = 'persoon.GESLACHT';

	/** the column name for the ACTIEF field */
	const ACTIEF = 'persoon.ACTIEF';

	/** the column name for the TELEFOON_PRIMAIR field */
	const TELEFOON_PRIMAIR = 'persoon.TELEFOON_PRIMAIR';

	/** the column name for the TELEFOON_SECUNDAIR field */
	const TELEFOON_SECUNDAIR = 'persoon.TELEFOON_SECUNDAIR';

	/** the column name for the EMAIL field */
	const EMAIL = 'persoon.EMAIL';

	/** the column name for the ORGANISATIE_ID field */
	const ORGANISATIE_ID = 'persoon.ORGANISATIE_ID';

	/** the column name for the KERSTKAART field */
	const KERSTKAART = 'persoon.KERSTKAART';

	/** the column name for the MAILING field */
	const MAILING = 'persoon.MAILING';

	/** the column name for the DELETED_AT field */
	const DELETED_AT = 'persoon.DELETED_AT';

	/**
	 * An identiy map to hold any loaded instances of Persoon objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Persoon[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Achternaam', 'Voorletters', 'Roepnaam', 'Functie', 'Geslacht', 'Actief', 'TelefoonPrimair', 'TelefoonSecundair', 'Email', 'OrganisatieId', 'Kerstkaart', 'Mailing', 'DeletedAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'achternaam', 'voorletters', 'roepnaam', 'functie', 'geslacht', 'actief', 'telefoonPrimair', 'telefoonSecundair', 'email', 'organisatieId', 'kerstkaart', 'mailing', 'deletedAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::ACHTERNAAM, self::VOORLETTERS, self::ROEPNAAM, self::FUNCTIE, self::GESLACHT, self::ACTIEF, self::TELEFOON_PRIMAIR, self::TELEFOON_SECUNDAIR, self::EMAIL, self::ORGANISATIE_ID, self::KERSTKAART, self::MAILING, self::DELETED_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ACHTERNAAM', 'VOORLETTERS', 'ROEPNAAM', 'FUNCTIE', 'GESLACHT', 'ACTIEF', 'TELEFOON_PRIMAIR', 'TELEFOON_SECUNDAIR', 'EMAIL', 'ORGANISATIE_ID', 'KERSTKAART', 'MAILING', 'DELETED_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'achternaam', 'voorletters', 'roepnaam', 'functie', 'geslacht', 'actief', 'telefoon_primair', 'telefoon_secundair', 'email', 'organisatie_id', 'kerstkaart', 'mailing', 'deleted_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Achternaam' => 1, 'Voorletters' => 2, 'Roepnaam' => 3, 'Functie' => 4, 'Geslacht' => 5, 'Actief' => 6, 'TelefoonPrimair' => 7, 'TelefoonSecundair' => 8, 'Email' => 9, 'OrganisatieId' => 10, 'Kerstkaart' => 11, 'Mailing' => 12, 'DeletedAt' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'achternaam' => 1, 'voorletters' => 2, 'roepnaam' => 3, 'functie' => 4, 'geslacht' => 5, 'actief' => 6, 'telefoonPrimair' => 7, 'telefoonSecundair' => 8, 'email' => 9, 'organisatieId' => 10, 'kerstkaart' => 11, 'mailing' => 12, 'deletedAt' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::ACHTERNAAM => 1, self::VOORLETTERS => 2, self::ROEPNAAM => 3, self::FUNCTIE => 4, self::GESLACHT => 5, self::ACTIEF => 6, self::TELEFOON_PRIMAIR => 7, self::TELEFOON_SECUNDAIR => 8, self::EMAIL => 9, self::ORGANISATIE_ID => 10, self::KERSTKAART => 11, self::MAILING => 12, self::DELETED_AT => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ACHTERNAAM' => 1, 'VOORLETTERS' => 2, 'ROEPNAAM' => 3, 'FUNCTIE' => 4, 'GESLACHT' => 5, 'ACTIEF' => 6, 'TELEFOON_PRIMAIR' => 7, 'TELEFOON_SECUNDAIR' => 8, 'EMAIL' => 9, 'ORGANISATIE_ID' => 10, 'KERSTKAART' => 11, 'MAILING' => 12, 'DELETED_AT' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'achternaam' => 1, 'voorletters' => 2, 'roepnaam' => 3, 'functie' => 4, 'geslacht' => 5, 'actief' => 6, 'telefoon_primair' => 7, 'telefoon_secundair' => 8, 'email' => 9, 'organisatie_id' => 10, 'kerstkaart' => 11, 'mailing' => 12, 'deleted_at' => 13, ),
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
	 * @param      string $column The column name for current table. (i.e. PersoonPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PersoonPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(PersoonPeer::ID);
			$criteria->addSelectColumn(PersoonPeer::ACHTERNAAM);
			$criteria->addSelectColumn(PersoonPeer::VOORLETTERS);
			$criteria->addSelectColumn(PersoonPeer::ROEPNAAM);
			$criteria->addSelectColumn(PersoonPeer::FUNCTIE);
			$criteria->addSelectColumn(PersoonPeer::GESLACHT);
			$criteria->addSelectColumn(PersoonPeer::ACTIEF);
			$criteria->addSelectColumn(PersoonPeer::TELEFOON_PRIMAIR);
			$criteria->addSelectColumn(PersoonPeer::TELEFOON_SECUNDAIR);
			$criteria->addSelectColumn(PersoonPeer::EMAIL);
			$criteria->addSelectColumn(PersoonPeer::ORGANISATIE_ID);
			$criteria->addSelectColumn(PersoonPeer::KERSTKAART);
			$criteria->addSelectColumn(PersoonPeer::MAILING);
			$criteria->addSelectColumn(PersoonPeer::DELETED_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.ACHTERNAAM');
			$criteria->addSelectColumn($alias . '.VOORLETTERS');
			$criteria->addSelectColumn($alias . '.ROEPNAAM');
			$criteria->addSelectColumn($alias . '.FUNCTIE');
			$criteria->addSelectColumn($alias . '.GESLACHT');
			$criteria->addSelectColumn($alias . '.ACTIEF');
			$criteria->addSelectColumn($alias . '.TELEFOON_PRIMAIR');
			$criteria->addSelectColumn($alias . '.TELEFOON_SECUNDAIR');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.ORGANISATIE_ID');
			$criteria->addSelectColumn($alias . '.KERSTKAART');
			$criteria->addSelectColumn($alias . '.MAILING');
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
		$criteria->setPrimaryTableName(PersoonPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersoonPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
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
	 * @return     Persoon
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PersoonPeer::doSelect($critcopy, $con);
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
		return PersoonPeer::populateObjects(PersoonPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PersoonPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
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
	 * @param      Persoon $value A Persoon object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Persoon $obj, $key = null)
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
	 * @param      mixed $value A Persoon object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Persoon) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Persoon object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Persoon Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to persoon
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
		$cls = PersoonPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PersoonPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PersoonPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PersoonPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Persoon object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PersoonPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PersoonPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PersoonPeer::NUM_COLUMNS;
		} else {
			$cls = PersoonPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PersoonPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related Organisatie table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinOrganisatie(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PersoonPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersoonPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PersoonPeer::ORGANISATIE_ID, OrganisatiePeer::ID, $join_behavior);

		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
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
	 * Selects a collection of Persoon objects pre-filled with their Organisatie objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Persoon objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinOrganisatie(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		PersoonPeer::addSelectColumns($criteria);
		$startcol = (PersoonPeer::NUM_COLUMNS - PersoonPeer::NUM_LAZY_LOAD_COLUMNS);
		OrganisatiePeer::addSelectColumns($criteria);

		$criteria->addJoin(PersoonPeer::ORGANISATIE_ID, OrganisatiePeer::ID, $join_behavior);

		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
		}
		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PersoonPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PersoonPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PersoonPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PersoonPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = OrganisatiePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = OrganisatiePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					OrganisatiePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (Persoon) to $obj2 (Organisatie)
				$obj2->addPersoon($obj1);

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
		$criteria->setPrimaryTableName(PersoonPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PersoonPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PersoonPeer::ORGANISATIE_ID, OrganisatiePeer::ID, $join_behavior);

		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
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
	 * Selects a collection of Persoon objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of Persoon objects.
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

		PersoonPeer::addSelectColumns($criteria);
		$startcol2 = (PersoonPeer::NUM_COLUMNS - PersoonPeer::NUM_LAZY_LOAD_COLUMNS);

		OrganisatiePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (OrganisatiePeer::NUM_COLUMNS - OrganisatiePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(PersoonPeer::ORGANISATIE_ID, OrganisatiePeer::ID, $join_behavior);

		// soft_delete behavior
		if (PersoonQuery::isSoftDeleteEnabled()) {
			$criteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
		}
		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PersoonPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PersoonPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PersoonPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PersoonPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined Organisatie rows

			$key2 = OrganisatiePeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = OrganisatiePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = OrganisatiePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					OrganisatiePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (Persoon) to the collection in $obj2 (Organisatie)
				$obj2->addPersoon($obj1);
			} // if joined row not null

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
	  $dbMap = Propel::getDatabaseMap(BasePersoonPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePersoonPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PersoonTableMap());
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
		return $withPrefix ? PersoonPeer::CLASS_DEFAULT : PersoonPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Persoon or Criteria object.
	 *
	 * @param      mixed $values Criteria or Persoon object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Persoon object
		}

		if ($criteria->containsKey(PersoonPeer::ID) && $criteria->keyContainsValue(PersoonPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersoonPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a Persoon or Criteria object.
	 *
	 * @param      mixed $values Criteria or Persoon object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PersoonPeer::ID);
			$value = $criteria->remove(PersoonPeer::ID);
			if ($value) {
				$selectCriteria->add(PersoonPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PersoonPeer::TABLE_NAME);
			}

		} else { // $values is Persoon object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the persoon table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doForceDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PersoonPeer::TABLE_NAME, $con, PersoonPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PersoonPeer::clearInstancePool();
			PersoonPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Persoon or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Persoon object or primary key or array of primary keys
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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PersoonPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Persoon) { // it's a model object
			// invalidate the cache for this single object
			PersoonPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PersoonPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				PersoonPeer::removeInstanceFromPool($singleval);
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
			PersoonPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Persoon object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Persoon $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Persoon $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PersoonPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PersoonPeer::TABLE_NAME);

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

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::ACHTERNAAM))
			$columns[PersoonPeer::ACHTERNAAM] = $obj->getAchternaam();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::VOORLETTERS))
			$columns[PersoonPeer::VOORLETTERS] = $obj->getVoorletters();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::ROEPNAAM))
			$columns[PersoonPeer::ROEPNAAM] = $obj->getRoepnaam();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::FUNCTIE))
			$columns[PersoonPeer::FUNCTIE] = $obj->getFunctie();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::TELEFOON_PRIMAIR))
			$columns[PersoonPeer::TELEFOON_PRIMAIR] = $obj->getTelefoonPrimair();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::TELEFOON_SECUNDAIR))
			$columns[PersoonPeer::TELEFOON_SECUNDAIR] = $obj->getTelefoonSecundair();

		if ($obj->isNew() || $obj->isColumnModified(PersoonPeer::EMAIL))
			$columns[PersoonPeer::EMAIL] = $obj->getEmail();

		}

		return BasePeer::doValidate(PersoonPeer::DATABASE_NAME, PersoonPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Persoon
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PersoonPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PersoonPeer::DATABASE_NAME);
		$criteria->add(PersoonPeer::ID, $pk);

		$v = PersoonPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PersoonPeer::DATABASE_NAME);
			$criteria->add(PersoonPeer::ID, $pks, Criteria::IN);
			$objs = PersoonPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// soft_delete behavior
	
	/**
	 * Enable the soft_delete behavior for this model
	 */
	public static function enableSoftDelete()
	{
		PersoonQuery::enableSoftDelete();
		// some soft_deleted objects may be in the instance pool
		PersoonPeer::clearInstancePool();
	}
	
	/**
	 * Disable the soft_delete behavior for this model
	 */
	public static function disableSoftDelete()
	{
		PersoonQuery::disableSoftDelete();
	}
	
	/**
	 * Check the soft_delete behavior for this model
	 * @return boolean true if the soft_delete behavior is enabled
	 */
	public static function isSoftDeleteEnabled()
	{
		return PersoonQuery::isSoftDeleteEnabled();
	}
	
	/**
	 * Soft delete records, given a Persoon or Criteria object OR a primary key value.
	 *
	 * @param			 mixed $values Criteria or Persoon object or primary key or array of primary keys
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
		} elseif ($values instanceof Persoon) {
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PersoonPeer::ID, (array) $values, Criteria::IN);
		}
		$criteria->add(PersoonPeer::DELETED_AT, time());
		return PersoonPeer::doUpdate($criteria, $con);
	}
	
	/**
	 * Delete or soft delete records, depending on PersoonPeer::$softDelete
	 *
	 * @param			 mixed $values Criteria or Persoon object or primary key or array of primary keys
	 *							which is used to create the DELETE statement
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDelete($values, PropelPDO $con = null)
	{
		if (PersoonPeer::isSoftDeleteEnabled()) {
			return PersoonPeer::doSoftDelete($values, $con);
		} else {
			return PersoonPeer::doForceDelete($values, $con);
		} 
	}
	/**
	 * Method to soft delete all rows from the persoon table.
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doSoftDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$selectCriteria = new Criteria();
		$selectCriteria->add(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		$selectCriteria->setDbName(PersoonPeer::DATABASE_NAME);
		$modifyCriteria = new Criteria();
		$modifyCriteria->add(PersoonPeer::DELETED_AT, time());
		return BasePeer::doUpdate($selectCriteria, $modifyCriteria, $con);
	}
	
	/**
	 * Delete or soft delete all records, depending on PersoonPeer::$softDelete
	 *
	 * @param			 PropelPDO $con the connection to use
	 * @return		 int	The number of affected rows (if supported by underlying database driver).
	 * @throws		 PropelException Any exceptions caught during processing will be
	 *							rethrown wrapped into a PropelException.
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if (PersoonPeer::isSoftDeleteEnabled()) {
			return PersoonPeer::doSoftDeleteAll($con);
		} else {
			return PersoonPeer::doForceDeleteAll($con);
		} 
	}

} // BasePersoonPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePersoonPeer::buildTableMap();

