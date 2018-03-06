<?php


/**
 * Base class that represents a row from the 'kans' table.
 *
 * 
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseKans extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'KansPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        KansPeer
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
	 * The value for the omschrijving field.
	 * @var        string
	 */
	protected $omschrijving;

	/**
	 * The value for the organisatie_id field.
	 * @var        int
	 */
	protected $organisatie_id;

	/**
	 * The value for the omschrijving_product field.
	 * @var        string
	 */
	protected $omschrijving_product;

	/**
	 * The value for the wijze_aanbesteding field.
	 * @var        string
	 */
	protected $wijze_aanbesteding;

	/**
	 * The value for the planning_uitvraag field.
	 * @var        string
	 */
	protected $planning_uitvraag;

	/**
	 * The value for the bedrag field.
	 * @var        string
	 */
	protected $bedrag;

	/**
	 * The value for the kans field.
	 * @var        double
	 */
	protected $kans;

	/**
	 * The value for the afgehandeld field.
	 * Note: this column has a database default value of: false
	 * @var        boolean
	 */
	protected $afgehandeld;

	/**
	 * The value for the resultaat field.
	 * @var        int
	 */
	protected $resultaat;

	/**
	 * The value for the bedrag_inschrijving field.
	 * @var        string
	 */
	protected $bedrag_inschrijving;

	/**
	 * The value for the bedrag_concurrent field.
	 * @var        string
	 */
	protected $bedrag_concurrent;

	/**
	 * The value for the gemist_opmerking field.
	 * @var        string
	 */
	protected $gemist_opmerking;

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
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->afgehandeld = false;
	}

	/**
	 * Initializes internal state of BaseKans object.
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
	 * Get the [optionally formatted] temporal [datum] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDatum($format = '%x')
	{
		if ($this->datum === null) {
			return null;
		}


		if ($this->datum === '0000-00-00') {
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
	 * Get the [omschrijving] column value.
	 * 
	 * @return     string
	 */
	public function getOmschrijving()
	{
		return $this->omschrijving;
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
	 * Get the [omschrijving_product] column value.
	 * 
	 * @return     string
	 */
	public function getOmschrijvingProduct()
	{
		return $this->omschrijving_product;
	}

	/**
	 * Get the [wijze_aanbesteding] column value.
	 * 
	 * @return     string
	 */
	public function getWijzeAanbesteding()
	{
		return $this->wijze_aanbesteding;
	}

	/**
	 * Get the [optionally formatted] temporal [planning_uitvraag] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPlanningUitvraag($format = '%x')
	{
		if ($this->planning_uitvraag === null) {
			return null;
		}


		if ($this->planning_uitvraag === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->planning_uitvraag);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->planning_uitvraag, true), $x);
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
	 * Get the [bedrag] column value.
	 * 
	 * @return     string
	 */
	public function getBedrag()
	{
		return $this->bedrag;
	}

	/**
	 * Get the [kans] column value.
	 * 
	 * @return     double
	 */
	public function getKans()
	{
		return $this->kans;
	}

	/**
	 * Get the [afgehandeld] column value.
	 * 
	 * @return     boolean
	 */
	public function getAfgehandeld()
	{
		return $this->afgehandeld;
	}

	/**
	 * Get the [resultaat] column value.
	 * 
	 * @return     int
	 */
	public function getResultaat()
	{
		return $this->resultaat;
	}

	/**
	 * Get the [bedrag_inschrijving] column value.
	 * 
	 * @return     string
	 */
	public function getBedragInschrijving()
	{
		return $this->bedrag_inschrijving;
	}

	/**
	 * Get the [bedrag_concurrent] column value.
	 * 
	 * @return     string
	 */
	public function getBedragConcurrent()
	{
		return $this->bedrag_concurrent;
	}

	/**
	 * Get the [gemist_opmerking] column value.
	 * 
	 * @return     string
	 */
	public function getGemistOpmerking()
	{
		return $this->gemist_opmerking;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = KansPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Sets the value of [datum] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Kans The current object (for fluent API support)
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

			$currNorm = ($this->datum !== null && $tmpDt = new DateTime($this->datum)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->datum = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = KansPeer::DATUM;
			}
		} // if either are not null

		return $this;
	} // setDatum()

	/**
	 * Set the value of [omschrijving] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setOmschrijving($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->omschrijving !== $v) {
			$this->omschrijving = $v;
			$this->modifiedColumns[] = KansPeer::OMSCHRIJVING;
		}

		return $this;
	} // setOmschrijving()

	/**
	 * Set the value of [organisatie_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setOrganisatieId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->organisatie_id !== $v) {
			$this->organisatie_id = $v;
			$this->modifiedColumns[] = KansPeer::ORGANISATIE_ID;
		}

		if ($this->aOrganisatie !== null && $this->aOrganisatie->getId() !== $v) {
			$this->aOrganisatie = null;
		}

		return $this;
	} // setOrganisatieId()

	/**
	 * Set the value of [omschrijving_product] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setOmschrijvingProduct($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->omschrijving_product !== $v) {
			$this->omschrijving_product = $v;
			$this->modifiedColumns[] = KansPeer::OMSCHRIJVING_PRODUCT;
		}

		return $this;
	} // setOmschrijvingProduct()

	/**
	 * Set the value of [wijze_aanbesteding] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setWijzeAanbesteding($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->wijze_aanbesteding !== $v) {
			$this->wijze_aanbesteding = $v;
			$this->modifiedColumns[] = KansPeer::WIJZE_AANBESTEDING;
		}

		return $this;
	} // setWijzeAanbesteding()

	/**
	 * Sets the value of [planning_uitvraag] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setPlanningUitvraag($v)
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

		if ( $this->planning_uitvraag !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->planning_uitvraag !== null && $tmpDt = new DateTime($this->planning_uitvraag)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->planning_uitvraag = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = KansPeer::PLANNING_UITVRAAG;
			}
		} // if either are not null

		return $this;
	} // setPlanningUitvraag()

	/**
	 * Set the value of [bedrag] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setBedrag($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bedrag !== $v) {
			$this->bedrag = $v;
			$this->modifiedColumns[] = KansPeer::BEDRAG;
		}

		return $this;
	} // setBedrag()

	/**
	 * Set the value of [kans] column.
	 * 
	 * @param      double $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setKans($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->kans !== $v) {
			$this->kans = $v;
			$this->modifiedColumns[] = KansPeer::KANS;
		}

		return $this;
	} // setKans()

	/**
	 * Set the value of [afgehandeld] column.
	 * 
	 * @param      boolean $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setAfgehandeld($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->afgehandeld !== $v || $this->isNew()) {
			$this->afgehandeld = $v;
			$this->modifiedColumns[] = KansPeer::AFGEHANDELD;
		}

		return $this;
	} // setAfgehandeld()

	/**
	 * Set the value of [resultaat] column.
	 * 
	 * @param      int $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setResultaat($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->resultaat !== $v) {
			$this->resultaat = $v;
			$this->modifiedColumns[] = KansPeer::RESULTAAT;
		}

		return $this;
	} // setResultaat()

	/**
	 * Set the value of [bedrag_inschrijving] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setBedragInschrijving($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bedrag_inschrijving !== $v) {
			$this->bedrag_inschrijving = $v;
			$this->modifiedColumns[] = KansPeer::BEDRAG_INSCHRIJVING;
		}

		return $this;
	} // setBedragInschrijving()

	/**
	 * Set the value of [bedrag_concurrent] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setBedragConcurrent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->bedrag_concurrent !== $v) {
			$this->bedrag_concurrent = $v;
			$this->modifiedColumns[] = KansPeer::BEDRAG_CONCURRENT;
		}

		return $this;
	} // setBedragConcurrent()

	/**
	 * Set the value of [gemist_opmerking] column.
	 * 
	 * @param      string $v new value
	 * @return     Kans The current object (for fluent API support)
	 */
	public function setGemistOpmerking($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gemist_opmerking !== $v) {
			$this->gemist_opmerking = $v;
			$this->modifiedColumns[] = KansPeer::GEMIST_OPMERKING;
		}

		return $this;
	} // setGemistOpmerking()

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
			if ($this->afgehandeld !== false) {
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
			$this->datum = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->omschrijving = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->organisatie_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->omschrijving_product = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->wijze_aanbesteding = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->planning_uitvraag = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->bedrag = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->kans = ($row[$startcol + 8] !== null) ? (double) $row[$startcol + 8] : null;
			$this->afgehandeld = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->resultaat = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->bedrag_inschrijving = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->bedrag_concurrent = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->gemist_opmerking = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = KansPeer::NUM_COLUMNS - KansPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Kans object", $e);
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
			$con = Propel::getConnection(KansPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = KansPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(KansPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				KansQuery::create()
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
			$con = Propel::getConnection(KansPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				KansPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = KansPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(KansPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.KansPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += KansPeer::doUpdate($this, $con);
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

			if ($this->aOrganisatie !== null) {
				if (!$this->aOrganisatie->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOrganisatie->getValidationFailures());
				}
			}


			if (($retval = KansPeer::doValidate($this, $columns)) !== true) {
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
		$pos = KansPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getOmschrijving();
				break;
			case 3:
				return $this->getOrganisatieId();
				break;
			case 4:
				return $this->getOmschrijvingProduct();
				break;
			case 5:
				return $this->getWijzeAanbesteding();
				break;
			case 6:
				return $this->getPlanningUitvraag();
				break;
			case 7:
				return $this->getBedrag();
				break;
			case 8:
				return $this->getKans();
				break;
			case 9:
				return $this->getAfgehandeld();
				break;
			case 10:
				return $this->getResultaat();
				break;
			case 11:
				return $this->getBedragInschrijving();
				break;
			case 12:
				return $this->getBedragConcurrent();
				break;
			case 13:
				return $this->getGemistOpmerking();
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
		$keys = KansPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDatum(),
			$keys[2] => $this->getOmschrijving(),
			$keys[3] => $this->getOrganisatieId(),
			$keys[4] => $this->getOmschrijvingProduct(),
			$keys[5] => $this->getWijzeAanbesteding(),
			$keys[6] => $this->getPlanningUitvraag(),
			$keys[7] => $this->getBedrag(),
			$keys[8] => $this->getKans(),
			$keys[9] => $this->getAfgehandeld(),
			$keys[10] => $this->getResultaat(),
			$keys[11] => $this->getBedragInschrijving(),
			$keys[12] => $this->getBedragConcurrent(),
			$keys[13] => $this->getGemistOpmerking(),
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
		$pos = KansPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setOmschrijving($value);
				break;
			case 3:
				$this->setOrganisatieId($value);
				break;
			case 4:
				$this->setOmschrijvingProduct($value);
				break;
			case 5:
				$this->setWijzeAanbesteding($value);
				break;
			case 6:
				$this->setPlanningUitvraag($value);
				break;
			case 7:
				$this->setBedrag($value);
				break;
			case 8:
				$this->setKans($value);
				break;
			case 9:
				$this->setAfgehandeld($value);
				break;
			case 10:
				$this->setResultaat($value);
				break;
			case 11:
				$this->setBedragInschrijving($value);
				break;
			case 12:
				$this->setBedragConcurrent($value);
				break;
			case 13:
				$this->setGemistOpmerking($value);
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
		$keys = KansPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDatum($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOmschrijving($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setOrganisatieId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setOmschrijvingProduct($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setWijzeAanbesteding($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPlanningUitvraag($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setBedrag($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setKans($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAfgehandeld($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setResultaat($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setBedragInschrijving($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setBedragConcurrent($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGemistOpmerking($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(KansPeer::DATABASE_NAME);

		if ($this->isColumnModified(KansPeer::ID)) $criteria->add(KansPeer::ID, $this->id);
		if ($this->isColumnModified(KansPeer::DATUM)) $criteria->add(KansPeer::DATUM, $this->datum);
		if ($this->isColumnModified(KansPeer::OMSCHRIJVING)) $criteria->add(KansPeer::OMSCHRIJVING, $this->omschrijving);
		if ($this->isColumnModified(KansPeer::ORGANISATIE_ID)) $criteria->add(KansPeer::ORGANISATIE_ID, $this->organisatie_id);
		if ($this->isColumnModified(KansPeer::OMSCHRIJVING_PRODUCT)) $criteria->add(KansPeer::OMSCHRIJVING_PRODUCT, $this->omschrijving_product);
		if ($this->isColumnModified(KansPeer::WIJZE_AANBESTEDING)) $criteria->add(KansPeer::WIJZE_AANBESTEDING, $this->wijze_aanbesteding);
		if ($this->isColumnModified(KansPeer::PLANNING_UITVRAAG)) $criteria->add(KansPeer::PLANNING_UITVRAAG, $this->planning_uitvraag);
		if ($this->isColumnModified(KansPeer::BEDRAG)) $criteria->add(KansPeer::BEDRAG, $this->bedrag);
		if ($this->isColumnModified(KansPeer::KANS)) $criteria->add(KansPeer::KANS, $this->kans);
		if ($this->isColumnModified(KansPeer::AFGEHANDELD)) $criteria->add(KansPeer::AFGEHANDELD, $this->afgehandeld);
		if ($this->isColumnModified(KansPeer::RESULTAAT)) $criteria->add(KansPeer::RESULTAAT, $this->resultaat);
		if ($this->isColumnModified(KansPeer::BEDRAG_INSCHRIJVING)) $criteria->add(KansPeer::BEDRAG_INSCHRIJVING, $this->bedrag_inschrijving);
		if ($this->isColumnModified(KansPeer::BEDRAG_CONCURRENT)) $criteria->add(KansPeer::BEDRAG_CONCURRENT, $this->bedrag_concurrent);
		if ($this->isColumnModified(KansPeer::GEMIST_OPMERKING)) $criteria->add(KansPeer::GEMIST_OPMERKING, $this->gemist_opmerking);

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
		$criteria = new Criteria(KansPeer::DATABASE_NAME);
		$criteria->add(KansPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Kans (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDatum($this->datum);
		$copyObj->setOmschrijving($this->omschrijving);
		$copyObj->setOrganisatieId($this->organisatie_id);
		$copyObj->setOmschrijvingProduct($this->omschrijving_product);
		$copyObj->setWijzeAanbesteding($this->wijze_aanbesteding);
		$copyObj->setPlanningUitvraag($this->planning_uitvraag);
		$copyObj->setBedrag($this->bedrag);
		$copyObj->setKans($this->kans);
		$copyObj->setAfgehandeld($this->afgehandeld);
		$copyObj->setResultaat($this->resultaat);
		$copyObj->setBedragInschrijving($this->bedrag_inschrijving);
		$copyObj->setBedragConcurrent($this->bedrag_concurrent);
		$copyObj->setGemistOpmerking($this->gemist_opmerking);

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
	 * @return     Kans Clone of current object.
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
	 * @return     KansPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new KansPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Organisatie object.
	 *
	 * @param      Organisatie $v
	 * @return     Kans The current object (for fluent API support)
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
			$v->addKans($this);
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
				 $this->aOrganisatie->addKanss($this);
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
		$this->omschrijving = null;
		$this->organisatie_id = null;
		$this->omschrijving_product = null;
		$this->wijze_aanbesteding = null;
		$this->planning_uitvraag = null;
		$this->bedrag = null;
		$this->kans = null;
		$this->afgehandeld = null;
		$this->resultaat = null;
		$this->bedrag_inschrijving = null;
		$this->bedrag_concurrent = null;
		$this->gemist_opmerking = null;
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
		} // if ($deep)

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

} // BaseKans
