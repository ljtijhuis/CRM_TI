<?php


/**
 * Base class that represents a row from the 'persoon' table.
 *
 * 
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BasePersoon extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PersoonPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PersoonPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the achternaam field.
	 * @var        string
	 */
	protected $achternaam;

	/**
	 * The value for the voorletters field.
	 * @var        string
	 */
	protected $voorletters;

	/**
	 * The value for the roepnaam field.
	 * @var        string
	 */
	protected $roepnaam;

	/**
	 * The value for the functie field.
	 * @var        string
	 */
	protected $functie;

	/**
	 * The value for the geslacht field.
	 * @var        boolean
	 */
	protected $geslacht;

	/**
	 * The value for the actief field.
	 * Note: this column has a database default value of: true
	 * @var        boolean
	 */
	protected $actief;

	/**
	 * The value for the telefoon_primair field.
	 * @var        string
	 */
	protected $telefoon_primair;

	/**
	 * The value for the telefoon_secundair field.
	 * @var        string
	 */
	protected $telefoon_secundair;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the organisatie_id field.
	 * @var        int
	 */
	protected $organisatie_id;

	/**
	 * The value for the kerstkaart field.
	 * @var        boolean
	 */
	protected $kerstkaart;

	/**
	 * The value for the mailing field.
	 * @var        boolean
	 */
	protected $mailing;

	/**
	 * The value for the deleted_at field.
	 * @var        string
	 */
	protected $deleted_at;

	/**
	 * @var        Organisatie
	 */
	protected $aOrganisatie;

	/**
	 * @var        array Contact[] Collection to store aggregation of Contact objects.
	 */
	protected $collContacts;

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
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->actief = true;
	}

	/**
	 * Initializes internal state of BasePersoon object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

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
	 * Get the [achternaam] column value.
	 * 
	 * @return     string
	 */
	public function getAchternaam()
	{
		return $this->achternaam;
	}

	/**
	 * Get the [voorletters] column value.
	 * 
	 * @return     string
	 */
	public function getVoorletters()
	{
		return $this->voorletters;
	}

	/**
	 * Get the [roepnaam] column value.
	 * 
	 * @return     string
	 */
	public function getRoepnaam()
	{
		return $this->roepnaam;
	}

	/**
	 * Get the [functie] column value.
	 * 
	 * @return     string
	 */
	public function getFunctie()
	{
		return $this->functie;
	}

	/**
	 * Get the [geslacht] column value.
	 * 
	 * @return     boolean
	 */
	public function getGeslacht()
	{
		return $this->geslacht;
	}

	/**
	 * Get the [actief] column value.
	 * 
	 * @return     boolean
	 */
	public function getActief()
	{
		return $this->actief;
	}

	/**
	 * Get the [telefoon_primair] column value.
	 * 
	 * @return     string
	 */
	public function getTelefoonPrimair()
	{
		return $this->telefoon_primair;
	}

	/**
	 * Get the [telefoon_secundair] column value.
	 * 
	 * @return     string
	 */
	public function getTelefoonSecundair()
	{
		return $this->telefoon_secundair;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
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
	 * Get the [kerstkaart] column value.
	 * 
	 * @return     boolean
	 */
	public function getKerstkaart()
	{
		return $this->kerstkaart;
	}

	/**
	 * Get the [mailing] column value.
	 * 
	 * @return     boolean
	 */
	public function getMailing()
	{
		return $this->mailing;
	}

	/**
	 * Get the [optionally formatted] temporal [deleted_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDeletedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->deleted_at === null) {
			return null;
		}


		if ($this->deleted_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->deleted_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->deleted_at, true), $x);
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PersoonPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [achternaam] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setAchternaam($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->achternaam !== $v) {
			$this->achternaam = $v;
			$this->modifiedColumns[] = PersoonPeer::ACHTERNAAM;
		}

		return $this;
	} // setAchternaam()

	/**
	 * Set the value of [voorletters] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setVoorletters($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->voorletters !== $v) {
			$this->voorletters = $v;
			$this->modifiedColumns[] = PersoonPeer::VOORLETTERS;
		}

		return $this;
	} // setVoorletters()

	/**
	 * Set the value of [roepnaam] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setRoepnaam($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->roepnaam !== $v) {
			$this->roepnaam = $v;
			$this->modifiedColumns[] = PersoonPeer::ROEPNAAM;
		}

		return $this;
	} // setRoepnaam()

	/**
	 * Set the value of [functie] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setFunctie($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->functie !== $v) {
			$this->functie = $v;
			$this->modifiedColumns[] = PersoonPeer::FUNCTIE;
		}

		return $this;
	} // setFunctie()

	/**
	 * Set the value of [geslacht] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setGeslacht($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->geslacht !== $v) {
			$this->geslacht = $v;
			$this->modifiedColumns[] = PersoonPeer::GESLACHT;
		}

		return $this;
	} // setGeslacht()

	/**
	 * Set the value of [actief] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setActief($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->actief !== $v || $this->isNew()) {
			$this->actief = $v;
			$this->modifiedColumns[] = PersoonPeer::ACTIEF;
		}

		return $this;
	} // setActief()

	/**
	 * Set the value of [telefoon_primair] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setTelefoonPrimair($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telefoon_primair !== $v) {
			$this->telefoon_primair = $v;
			$this->modifiedColumns[] = PersoonPeer::TELEFOON_PRIMAIR;
		}

		return $this;
	} // setTelefoonPrimair()

	/**
	 * Set the value of [telefoon_secundair] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setTelefoonSecundair($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telefoon_secundair !== $v) {
			$this->telefoon_secundair = $v;
			$this->modifiedColumns[] = PersoonPeer::TELEFOON_SECUNDAIR;
		}

		return $this;
	} // setTelefoonSecundair()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = PersoonPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [organisatie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setOrganisatieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->organisatie_id !== $v) {
			$this->organisatie_id = $v;
			$this->modifiedColumns[] = PersoonPeer::ORGANISATIE_ID;
		}

		if ($this->aOrganisatie !== null && $this->aOrganisatie->getId() !== $v) {
			$this->aOrganisatie = null;
		}

		return $this;
	} // setOrganisatieId()

	/**
	 * Set the value of [kerstkaart] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setKerstkaart($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->kerstkaart !== $v) {
			$this->kerstkaart = $v;
			$this->modifiedColumns[] = PersoonPeer::KERSTKAART;
		}

		return $this;
	} // setKerstkaart()

	/**
	 * Set the value of [mailing] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setMailing($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->mailing !== $v) {
			$this->mailing = $v;
			$this->modifiedColumns[] = PersoonPeer::MAILING;
		}

		return $this;
	} // setMailing()

	/**
	 * Sets the value of [deleted_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Persoon The current object (for fluent API support)
	 */
	public function setDeletedAt($v)
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

		if ( $this->deleted_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->deleted_at !== null && $tmpDt = new DateTime($this->deleted_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->deleted_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = PersoonPeer::DELETED_AT;
			}
		} // if either are not null

		return $this;
	} // setDeletedAt()

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
			if ($this->actief !== true) {
				return false;
			}

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
			$this->achternaam = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->voorletters = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->roepnaam = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->functie = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->geslacht = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->actief = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->telefoon_primair = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->telefoon_secundair = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->organisatie_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->kerstkaart = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->mailing = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->deleted_at = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = PersoonPeer::NUM_COLUMNS - PersoonPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Persoon object", $e);
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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PersoonPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aOrganisatie = null;
			$this->collContacts = null;

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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// soft_delete behavior
			if (!empty($ret) && PersoonQuery::isSoftDeleteEnabled()) {
				$this->setDeletedAt(time());
				$this->save($con);
				$con->commit();
				PersoonPeer::removeInstanceFromPool($this);
				return;
			}
			if ($ret) {
				PersoonQuery::create()
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
			$con = Propel::getConnection(PersoonPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PersoonPeer::addInstanceToPool($this);
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

			if ($this->aOrganisatie !== null) {
				if ($this->aOrganisatie->isModified() || $this->aOrganisatie->isNew()) {
					$affectedRows += $this->aOrganisatie->save($con);
				}
				$this->setOrganisatie($this->aOrganisatie);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PersoonPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PersoonPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PersoonPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PersoonPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collContacts !== null) {
				foreach ($this->collContacts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->aOrganisatie !== null) {
				if (!$this->aOrganisatie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrganisatie->getValidationFailures());
				}
			}


			if (($retval = PersoonPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collContacts !== null) {
					foreach ($this->collContacts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = PersoonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAchternaam();
				break;
			case 2:
				return $this->getVoorletters();
				break;
			case 3:
				return $this->getRoepnaam();
				break;
			case 4:
				return $this->getFunctie();
				break;
			case 5:
				return $this->getGeslacht();
				break;
			case 6:
				return $this->getActief();
				break;
			case 7:
				return $this->getTelefoonPrimair();
				break;
			case 8:
				return $this->getTelefoonSecundair();
				break;
			case 9:
				return $this->getEmail();
				break;
			case 10:
				return $this->getOrganisatieId();
				break;
			case 11:
				return $this->getKerstkaart();
				break;
			case 12:
				return $this->getMailing();
				break;
			case 13:
				return $this->getDeletedAt();
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
		$keys = PersoonPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAchternaam(),
			$keys[2] => $this->getVoorletters(),
			$keys[3] => $this->getRoepnaam(),
			$keys[4] => $this->getFunctie(),
			$keys[5] => $this->getGeslacht(),
			$keys[6] => $this->getActief(),
			$keys[7] => $this->getTelefoonPrimair(),
			$keys[8] => $this->getTelefoonSecundair(),
			$keys[9] => $this->getEmail(),
			$keys[10] => $this->getOrganisatieId(),
			$keys[11] => $this->getKerstkaart(),
			$keys[12] => $this->getMailing(),
			$keys[13] => $this->getDeletedAt(),
		);
		if ($includeForeignObjects) {
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
		$pos = PersoonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAchternaam($value);
				break;
			case 2:
				$this->setVoorletters($value);
				break;
			case 3:
				$this->setRoepnaam($value);
				break;
			case 4:
				$this->setFunctie($value);
				break;
			case 5:
				$this->setGeslacht($value);
				break;
			case 6:
				$this->setActief($value);
				break;
			case 7:
				$this->setTelefoonPrimair($value);
				break;
			case 8:
				$this->setTelefoonSecundair($value);
				break;
			case 9:
				$this->setEmail($value);
				break;
			case 10:
				$this->setOrganisatieId($value);
				break;
			case 11:
				$this->setKerstkaart($value);
				break;
			case 12:
				$this->setMailing($value);
				break;
			case 13:
				$this->setDeletedAt($value);
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
		$keys = PersoonPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAchternaam($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setVoorletters($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRoepnaam($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFunctie($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGeslacht($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActief($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTelefoonPrimair($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTelefoonSecundair($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setOrganisatieId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setKerstkaart($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setMailing($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDeletedAt($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PersoonPeer::DATABASE_NAME);

		if ($this->isColumnModified(PersoonPeer::ID)) $criteria->add(PersoonPeer::ID, $this->id);
		if ($this->isColumnModified(PersoonPeer::ACHTERNAAM)) $criteria->add(PersoonPeer::ACHTERNAAM, $this->achternaam);
		if ($this->isColumnModified(PersoonPeer::VOORLETTERS)) $criteria->add(PersoonPeer::VOORLETTERS, $this->voorletters);
		if ($this->isColumnModified(PersoonPeer::ROEPNAAM)) $criteria->add(PersoonPeer::ROEPNAAM, $this->roepnaam);
		if ($this->isColumnModified(PersoonPeer::FUNCTIE)) $criteria->add(PersoonPeer::FUNCTIE, $this->functie);
		if ($this->isColumnModified(PersoonPeer::GESLACHT)) $criteria->add(PersoonPeer::GESLACHT, $this->geslacht);
		if ($this->isColumnModified(PersoonPeer::ACTIEF)) $criteria->add(PersoonPeer::ACTIEF, $this->actief);
		if ($this->isColumnModified(PersoonPeer::TELEFOON_PRIMAIR)) $criteria->add(PersoonPeer::TELEFOON_PRIMAIR, $this->telefoon_primair);
		if ($this->isColumnModified(PersoonPeer::TELEFOON_SECUNDAIR)) $criteria->add(PersoonPeer::TELEFOON_SECUNDAIR, $this->telefoon_secundair);
		if ($this->isColumnModified(PersoonPeer::EMAIL)) $criteria->add(PersoonPeer::EMAIL, $this->email);
		if ($this->isColumnModified(PersoonPeer::ORGANISATIE_ID)) $criteria->add(PersoonPeer::ORGANISATIE_ID, $this->organisatie_id);
		if ($this->isColumnModified(PersoonPeer::KERSTKAART)) $criteria->add(PersoonPeer::KERSTKAART, $this->kerstkaart);
		if ($this->isColumnModified(PersoonPeer::MAILING)) $criteria->add(PersoonPeer::MAILING, $this->mailing);
		if ($this->isColumnModified(PersoonPeer::DELETED_AT)) $criteria->add(PersoonPeer::DELETED_AT, $this->deleted_at);

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
		$criteria = new Criteria(PersoonPeer::DATABASE_NAME);
		$criteria->add(PersoonPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Persoon (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setAchternaam($this->achternaam);
		$copyObj->setVoorletters($this->voorletters);
		$copyObj->setRoepnaam($this->roepnaam);
		$copyObj->setFunctie($this->functie);
		$copyObj->setGeslacht($this->geslacht);
		$copyObj->setActief($this->actief);
		$copyObj->setTelefoonPrimair($this->telefoon_primair);
		$copyObj->setTelefoonSecundair($this->telefoon_secundair);
		$copyObj->setEmail($this->email);
		$copyObj->setOrganisatieId($this->organisatie_id);
		$copyObj->setKerstkaart($this->kerstkaart);
		$copyObj->setMailing($this->mailing);
		$copyObj->setDeletedAt($this->deleted_at);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getContacts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addContact($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


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
	 * @return     Persoon Clone of current object.
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
	 * @return     PersoonPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PersoonPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Organisatie object.
	 *
	 * @param      Organisatie $v
	 * @return     Persoon The current object (for fluent API support)
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
			$v->addPersoon($this);
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
				 $this->aOrganisatie->addPersoons($this);
			 */
		}
		return $this->aOrganisatie;
	}

	/**
	 * Clears out the collContacts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addContacts()
	 */
	public function clearContacts()
	{
		$this->collContacts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collContacts collection.
	 *
	 * By default this just sets the collContacts collection to an empty array (like clearcollContacts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initContacts()
	{
		$this->collContacts = new PropelObjectCollection();
		$this->collContacts->setModel('Contact');
	}

	/**
	 * Gets an array of Contact objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Persoon is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Contact[] List of Contact objects
	 * @throws     PropelException
	 */
	public function getContacts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collContacts) {
				// return empty collection
				$this->initContacts();
			} else {
				$collContacts = ContactQuery::create(null, $criteria)
					->filterByPersoon($this)
					->find($con);
				if (null !== $criteria) {
					return $collContacts;
				}
				$this->collContacts = $collContacts;
			}
		}
		return $this->collContacts;
	}

	/**
	 * Returns the number of related Contact objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Contact objects.
	 * @throws     PropelException
	 */
	public function countContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collContacts) {
				return 0;
			} else {
				$query = ContactQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPersoon($this)
					->count($con);
			}
		} else {
			return count($this->collContacts);
		}
	}

	/**
	 * Method called to associate a Contact object to this object
	 * through the Contact foreign key attribute.
	 *
	 * @param      Contact $l Contact
	 * @return     void
	 * @throws     PropelException
	 */
	public function addContact(Contact $l)
	{
		if ($this->collContacts === null) {
			$this->initContacts();
		}
		if (!$this->collContacts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collContacts[]= $l;
			$l->setPersoon($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persoon is new, it will return
	 * an empty collection; or if this Persoon has previously
	 * been saved, it will retrieve related Contacts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persoon.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Contact[] List of Contact objects
	 */
	public function getContactsJoinGebruiker($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ContactQuery::create(null, $criteria);
		$query->joinWith('Gebruiker', $join_behavior);

		return $this->getContacts($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Persoon is new, it will return
	 * an empty collection; or if this Persoon has previously
	 * been saved, it will retrieve related Contacts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Persoon.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Contact[] List of Contact objects
	 */
	public function getContactsJoinOrganisatie($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = ContactQuery::create(null, $criteria);
		$query->joinWith('Organisatie', $join_behavior);

		return $this->getContacts($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->achternaam = null;
		$this->voorletters = null;
		$this->roepnaam = null;
		$this->functie = null;
		$this->geslacht = null;
		$this->actief = null;
		$this->telefoon_primair = null;
		$this->telefoon_secundair = null;
		$this->email = null;
		$this->organisatie_id = null;
		$this->kerstkaart = null;
		$this->mailing = null;
		$this->deleted_at = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
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
			if ($this->collContacts) {
				foreach ((array) $this->collContacts as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collContacts = null;
		$this->aOrganisatie = null;
	}

	// soft_delete behavior
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of the current object
	 */
	public function forceDelete(PropelPDO $con = null)
	{
		PersoonPeer::disableSoftDelete();
		$this->delete($con);
	}
	
	/**
	 * Undelete a row that was soft_deleted
	 *
	 * @return		 int The number of rows affected by this update and any referring fk objects' save() operations.
	 */
	public function unDelete(PropelPDO $con = null)
	{
		$this->setDeletedAt(null);
		return $this->save($con);
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

} // BasePersoon
