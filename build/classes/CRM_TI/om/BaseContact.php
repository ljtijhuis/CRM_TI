<?php


/**
 * Base class that represents a row from the 'contact' table.
 *
 * 
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseContact extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ContactPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ContactPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the datum field.
	 * @var        string
	 */
	protected $datum;

	/**
	 * The value for the wijze field.
	 * @var        int
	 */
	protected $wijze;

	/**
	 * The value for the aandachtspunten field.
	 * @var        string
	 */
	protected $aandachtspunten;

	/**
	 * The value for the persoon_id field.
	 * @var        int
	 */
	protected $persoon_id;

	/**
	 * The value for the gebruiker_id field.
	 * @var        int
	 */
	protected $gebruiker_id;

	/**
	 * The value for the organisatie_id field.
	 * @var        int
	 */
	protected $organisatie_id;

	/**
	 * @var        Persoon
	 */
	protected $aPersoon;

	/**
	 * @var        Gebruiker
	 */
	protected $aGebruiker;

	/**
	 * @var        Organisatie
	 */
	protected $aOrganisatie;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [optionally formatted] temporal [datum] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDatum($format = 'Y-m-d H:i:s')
	{
		if ($this->datum === null) {
			return null;
		}


		if ($this->datum === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->datum);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datum, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [wijze] column value.
	 * 
	 * @return     int
	 */
	public function getWijze()
	{
		return $this->wijze;
	}

	/**
	 * Get the [aandachtspunten] column value.
	 * 
	 * @return     string
	 */
	public function getAandachtspunten()
	{
		return $this->aandachtspunten;
	}

	/**
	 * Get the [persoon_id] column value.
	 * 
	 * @return     int
	 */
	public function getPersoonId()
	{
		return $this->persoon_id;
	}

	/**
	 * Get the [gebruiker_id] column value.
	 * 
	 * @return     int
	 */
	public function getGebruikerId()
	{
		return $this->gebruiker_id;
	}

	/**
	 * Get the [organisatie_id] column value.
	 * 
	 * @return     int
	 */
	public function getOrganisatieId()
	{
		return $this->organisatie_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ContactPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Sets the value of [datum] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setDatum($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->datum !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->datum !== null && $tmpDt = new DateTime($this->datum)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->datum = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ContactPeer::DATUM;
			}
		} // if either are not null

		return $this;
	} // setDatum()

	/**
	 * Set the value of [wijze] column.
	 * 
	 * @param      int $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setWijze($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->wijze !== $v) {
			$this->wijze = $v;
			$this->modifiedColumns[] = ContactPeer::WIJZE;
		}

		return $this;
	} // setWijze()

	/**
	 * Set the value of [aandachtspunten] column.
	 * 
	 * @param      string $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setAandachtspunten($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->aandachtspunten !== $v) {
			$this->aandachtspunten = $v;
			$this->modifiedColumns[] = ContactPeer::AANDACHTSPUNTEN;
		}

		return $this;
	} // setAandachtspunten()

	/**
	 * Set the value of [persoon_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setPersoonId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->persoon_id !== $v) {
			$this->persoon_id = $v;
			$this->modifiedColumns[] = ContactPeer::PERSOON_ID;
		}

		if ($this->aPersoon !== null && $this->aPersoon->getId() !== $v) {
			$this->aPersoon = null;
		}

		return $this;
	} // setPersoonId()

	/**
	 * Set the value of [gebruiker_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setGebruikerId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->gebruiker_id !== $v) {
			$this->gebruiker_id = $v;
			$this->modifiedColumns[] = ContactPeer::GEBRUIKER_ID;
		}

		if ($this->aGebruiker !== null && $this->aGebruiker->getId() !== $v) {
			$this->aGebruiker = null;
		}

		return $this;
	} // setGebruikerId()

	/**
	 * Set the value of [organisatie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Contact The current object (for fluent API support)
	 */
	public function setOrganisatieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->organisatie_id !== $v) {
			$this->organisatie_id = $v;
			$this->modifiedColumns[] = ContactPeer::ORGANISATIE_ID;
		}

		if ($this->aOrganisatie !== null && $this->aOrganisatie->getId() !== $v) {
			$this->aOrganisatie = null;
		}

		return $this;
	} // setOrganisatieId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->datum = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->wijze = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->aandachtspunten = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->persoon_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->gebruiker_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->organisatie_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = ContactPeer::NUM_COLUMNS - ContactPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Contact object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aPersoon !== null && $this->persoon_id !== $this->aPersoon->getId()) {
			$this->aPersoon = null;
		}
		if ($this->aGebruiker !== null && $this->gebruiker_id !== $this->aGebruiker->getId()) {
			$this->aGebruiker = null;
		}
		if ($this->aOrganisatie !== null && $this->organisatie_id !== $this->aOrganisatie->getId()) {
			$this->aOrganisatie = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ContactPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aPersoon = null;
			$this->aGebruiker = null;
			$this->aOrganisatie = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ContactQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				ContactPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aPersoon !== null) {
				if ($this->aPersoon->isModified() || $this->aPersoon->isNew()) {
					$affectedRows += $this->aPersoon->save($con);
				}
				$this->setPersoon($this->aPersoon);
			}

			if ($this->aGebruiker !== null) {
				if ($this->aGebruiker->isModified() || $this->aGebruiker->isNew()) {
					$affectedRows += $this->aGebruiker->save($con);
				}
				$this->setGebruiker($this->aGebruiker);
			}

			if ($this->aOrganisatie !== null) {
				if ($this->aOrganisatie->isModified() || $this->aOrganisatie->isNew()) {
					$affectedRows += $this->aOrganisatie->save($con);
				}
				$this->setOrganisatie($this->aOrganisatie);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ContactPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ContactPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ContactPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += ContactPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aPersoon !== null) {
				if (!$this->aPersoon->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPersoon->getValidationFailures());
				}
			}

			if ($this->aGebruiker !== null) {
				if (!$this->aGebruiker->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aGebruiker->getValidationFailures());
				}
			}

			if ($this->aOrganisatie !== null) {
				if (!$this->aOrganisatie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrganisatie->getValidationFailures());
				}
			}


			if (($retval = ContactPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDatum();
				break;
			case 2:
				return $this->getWijze();
				break;
			case 3:
				return $this->getAandachtspunten();
				break;
			case 4:
				return $this->getPersoonId();
				break;
			case 5:
				return $this->getGebruikerId();
				break;
			case 6:
				return $this->getOrganisatieId();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = ContactPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDatum(),
			$keys[2] => $this->getWijze(),
			$keys[3] => $this->getAandachtspunten(),
			$keys[4] => $this->getPersoonId(),
			$keys[5] => $this->getGebruikerId(),
			$keys[6] => $this->getOrganisatieId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aPersoon) {
				$result['Persoon'] = $this->aPersoon->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aGebruiker) {
				$result['Gebruiker'] = $this->aGebruiker->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aOrganisatie) {
				$result['Organisatie'] = $this->aOrganisatie->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDatum($value);
				break;
			case 2:
				$this->setWijze($value);
				break;
			case 3:
				$this->setAandachtspunten($value);
				break;
			case 4:
				$this->setPersoonId($value);
				break;
			case 5:
				$this->setGebruikerId($value);
				break;
			case 6:
				$this->setOrganisatieId($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ContactPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDatum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setWijze($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAandachtspunten($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPersoonId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGebruikerId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOrganisatieId($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ContactPeer::DATABASE_NAME);

		if ($this->isColumnModified(ContactPeer::ID)) $criteria->add(ContactPeer::ID, $this->id);
		if ($this->isColumnModified(ContactPeer::DATUM)) $criteria->add(ContactPeer::DATUM, $this->datum);
		if ($this->isColumnModified(ContactPeer::WIJZE)) $criteria->add(ContactPeer::WIJZE, $this->wijze);
		if ($this->isColumnModified(ContactPeer::AANDACHTSPUNTEN)) $criteria->add(ContactPeer::AANDACHTSPUNTEN, $this->aandachtspunten);
		if ($this->isColumnModified(ContactPeer::PERSOON_ID)) $criteria->add(ContactPeer::PERSOON_ID, $this->persoon_id);
		if ($this->isColumnModified(ContactPeer::GEBRUIKER_ID)) $criteria->add(ContactPeer::GEBRUIKER_ID, $this->gebruiker_id);
		if ($this->isColumnModified(ContactPeer::ORGANISATIE_ID)) $criteria->add(ContactPeer::ORGANISATIE_ID, $this->organisatie_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ContactPeer::DATABASE_NAME);
		$criteria->add(ContactPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Contact (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDatum($this->datum);
		$copyObj->setWijze($this->wijze);
		$copyObj->setAandachtspunten($this->aandachtspunten);
		$copyObj->setPersoonId($this->persoon_id);
		$copyObj->setGebruikerId($this->gebruiker_id);
		$copyObj->setOrganisatieId($this->organisatie_id);

		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Contact Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     ContactPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ContactPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Persoon object.
	 *
	 * @param      Persoon $v
	 * @return     Contact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPersoon(Persoon $v = null)
	{
		if ($v === null) {
			$this->setPersoonId(NULL);
		} else {
			$this->setPersoonId($v->getId());
		}

		$this->aPersoon = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Persoon object, it will not be re-added.
		if ($v !== null) {
			$v->addContact($this);
		}

		return $this;
	}


	/**
	 * Get the associated Persoon object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Persoon The associated Persoon object.
	 * @throws     PropelException
	 */
	public function getPersoon(PropelPDO $con = null)
	{
		if ($this->aPersoon === null && ($this->persoon_id !== null)) {
			$this->aPersoon = PersoonQuery::create()->findPk($this->persoon_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aPersoon->addContacts($this);
			 */
		}
		return $this->aPersoon;
	}

	/**
	 * Declares an association between this object and a Gebruiker object.
	 *
	 * @param      Gebruiker $v
	 * @return     Contact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setGebruiker(Gebruiker $v = null)
	{
		if ($v === null) {
			$this->setGebruikerId(NULL);
		} else {
			$this->setGebruikerId($v->getId());
		}

		$this->aGebruiker = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Gebruiker object, it will not be re-added.
		if ($v !== null) {
			$v->addContact($this);
		}

		return $this;
	}


	/**
	 * Get the associated Gebruiker object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Gebruiker The associated Gebruiker object.
	 * @throws     PropelException
	 */
	public function getGebruiker(PropelPDO $con = null)
	{
		if ($this->aGebruiker === null && ($this->gebruiker_id !== null)) {
			$this->aGebruiker = GebruikerQuery::create()->findPk($this->gebruiker_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aGebruiker->addContacts($this);
			 */
		}
		return $this->aGebruiker;
	}

	/**
	 * Declares an association between this object and a Organisatie object.
	 *
	 * @param      Organisatie $v
	 * @return     Contact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setOrganisatie(Organisatie $v = null)
	{
		if ($v === null) {
			$this->setOrganisatieId(NULL);
		} else {
			$this->setOrganisatieId($v->getId());
		}

		$this->aOrganisatie = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Organisatie object, it will not be re-added.
		if ($v !== null) {
			$v->addContact($this);
		}

		return $this;
	}


	/**
	 * Get the associated Organisatie object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Organisatie The associated Organisatie object.
	 * @throws     PropelException
	 */
	public function getOrganisatie(PropelPDO $con = null)
	{
		if ($this->aOrganisatie === null && ($this->organisatie_id !== null)) {
			$this->aOrganisatie = OrganisatieQuery::create()->findPk($this->organisatie_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aOrganisatie->addContacts($this);
			 */
		}
		return $this->aOrganisatie;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->datum = null;
		$this->wijze = null;
		$this->aandachtspunten = null;
		$this->persoon_id = null;
		$this->gebruiker_id = null;
		$this->organisatie_id = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

		$this->aPersoon = null;
		$this->aGebruiker = null;
		$this->aOrganisatie = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseContact
