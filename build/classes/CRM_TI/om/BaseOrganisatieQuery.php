<?php


/**
 * Base class that represents a query for the 'organisatie' table.
 *
 * 
 *
 * @method     OrganisatieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     OrganisatieQuery orderByNaam($order = Criteria::ASC) Order by the naam column
 * @method     OrganisatieQuery orderByPostbusPost($order = Criteria::ASC) Order by the postbus_post column
 * @method     OrganisatieQuery orderByPostcodePost($order = Criteria::ASC) Order by the postcode_post column
 * @method     OrganisatieQuery orderByStadPost($order = Criteria::ASC) Order by the stad_post column
 * @method     OrganisatieQuery orderByStraatBezoek($order = Criteria::ASC) Order by the straat_bezoek column
 * @method     OrganisatieQuery orderByNummerBezoek($order = Criteria::ASC) Order by the nummer_bezoek column
 * @method     OrganisatieQuery orderByPostcodeBezoek($order = Criteria::ASC) Order by the postcode_bezoek column
 * @method     OrganisatieQuery orderByStadBezoek($order = Criteria::ASC) Order by the stad_bezoek column
 * @method     OrganisatieQuery orderByTelefoonAlgemeen($order = Criteria::ASC) Order by the telefoon_algemeen column
 * @method     OrganisatieQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method     OrganisatieQuery orderByProvincieId($order = Criteria::ASC) Order by the provincie_id column
 * @method     OrganisatieQuery orderByTypeId($order = Criteria::ASC) Order by the type_id column
 * @method     OrganisatieQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     OrganisatieQuery groupById() Group by the id column
 * @method     OrganisatieQuery groupByNaam() Group by the naam column
 * @method     OrganisatieQuery groupByPostbusPost() Group by the postbus_post column
 * @method     OrganisatieQuery groupByPostcodePost() Group by the postcode_post column
 * @method     OrganisatieQuery groupByStadPost() Group by the stad_post column
 * @method     OrganisatieQuery groupByStraatBezoek() Group by the straat_bezoek column
 * @method     OrganisatieQuery groupByNummerBezoek() Group by the nummer_bezoek column
 * @method     OrganisatieQuery groupByPostcodeBezoek() Group by the postcode_bezoek column
 * @method     OrganisatieQuery groupByStadBezoek() Group by the stad_bezoek column
 * @method     OrganisatieQuery groupByTelefoonAlgemeen() Group by the telefoon_algemeen column
 * @method     OrganisatieQuery groupByWebsite() Group by the website column
 * @method     OrganisatieQuery groupByProvincieId() Group by the provincie_id column
 * @method     OrganisatieQuery groupByTypeId() Group by the type_id column
 * @method     OrganisatieQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     OrganisatieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     OrganisatieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     OrganisatieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     OrganisatieQuery leftJoinProvincie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Provincie relation
 * @method     OrganisatieQuery rightJoinProvincie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Provincie relation
 * @method     OrganisatieQuery innerJoinProvincie($relationAlias = null) Adds a INNER JOIN clause to the query using the Provincie relation
 *
 * @method     OrganisatieQuery leftJoinOrganisatieType($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrganisatieType relation
 * @method     OrganisatieQuery rightJoinOrganisatieType($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrganisatieType relation
 * @method     OrganisatieQuery innerJoinOrganisatieType($relationAlias = null) Adds a INNER JOIN clause to the query using the OrganisatieType relation
 *
 * @method     OrganisatieQuery leftJoinPersoon($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persoon relation
 * @method     OrganisatieQuery rightJoinPersoon($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persoon relation
 * @method     OrganisatieQuery innerJoinPersoon($relationAlias = null) Adds a INNER JOIN clause to the query using the Persoon relation
 *
 * @method     OrganisatieQuery leftJoinContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contact relation
 * @method     OrganisatieQuery rightJoinContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contact relation
 * @method     OrganisatieQuery innerJoinContact($relationAlias = null) Adds a INNER JOIN clause to the query using the Contact relation
 *
 * @method     OrganisatieQuery leftJoinVervolgactie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vervolgactie relation
 * @method     OrganisatieQuery rightJoinVervolgactie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vervolgactie relation
 * @method     OrganisatieQuery innerJoinVervolgactie($relationAlias = null) Adds a INNER JOIN clause to the query using the Vervolgactie relation
 *
 * @method     OrganisatieQuery leftJoinKans($relationAlias = null) Adds a LEFT JOIN clause to the query using the Kans relation
 * @method     OrganisatieQuery rightJoinKans($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Kans relation
 * @method     OrganisatieQuery innerJoinKans($relationAlias = null) Adds a INNER JOIN clause to the query using the Kans relation
 *
 * @method     Organisatie findOne(PropelPDO $con = null) Return the first Organisatie matching the query
 * @method     Organisatie findOneOrCreate(PropelPDO $con = null) Return the first Organisatie matching the query, or a new Organisatie object populated from the query conditions when no match is found
 *
 * @method     Organisatie findOneById(int $id) Return the first Organisatie filtered by the id column
 * @method     Organisatie findOneByNaam(string $naam) Return the first Organisatie filtered by the naam column
 * @method     Organisatie findOneByPostbusPost(string $postbus_post) Return the first Organisatie filtered by the postbus_post column
 * @method     Organisatie findOneByPostcodePost(string $postcode_post) Return the first Organisatie filtered by the postcode_post column
 * @method     Organisatie findOneByStadPost(string $stad_post) Return the first Organisatie filtered by the stad_post column
 * @method     Organisatie findOneByStraatBezoek(string $straat_bezoek) Return the first Organisatie filtered by the straat_bezoek column
 * @method     Organisatie findOneByNummerBezoek(string $nummer_bezoek) Return the first Organisatie filtered by the nummer_bezoek column
 * @method     Organisatie findOneByPostcodeBezoek(string $postcode_bezoek) Return the first Organisatie filtered by the postcode_bezoek column
 * @method     Organisatie findOneByStadBezoek(string $stad_bezoek) Return the first Organisatie filtered by the stad_bezoek column
 * @method     Organisatie findOneByTelefoonAlgemeen(string $telefoon_algemeen) Return the first Organisatie filtered by the telefoon_algemeen column
 * @method     Organisatie findOneByWebsite(string $website) Return the first Organisatie filtered by the website column
 * @method     Organisatie findOneByProvincieId(int $provincie_id) Return the first Organisatie filtered by the provincie_id column
 * @method     Organisatie findOneByTypeId(int $type_id) Return the first Organisatie filtered by the type_id column
 * @method     Organisatie findOneByDeletedAt(string $deleted_at) Return the first Organisatie filtered by the deleted_at column
 *
 * @method     array findById(int $id) Return Organisatie objects filtered by the id column
 * @method     array findByNaam(string $naam) Return Organisatie objects filtered by the naam column
 * @method     array findByPostbusPost(string $postbus_post) Return Organisatie objects filtered by the postbus_post column
 * @method     array findByPostcodePost(string $postcode_post) Return Organisatie objects filtered by the postcode_post column
 * @method     array findByStadPost(string $stad_post) Return Organisatie objects filtered by the stad_post column
 * @method     array findByStraatBezoek(string $straat_bezoek) Return Organisatie objects filtered by the straat_bezoek column
 * @method     array findByNummerBezoek(string $nummer_bezoek) Return Organisatie objects filtered by the nummer_bezoek column
 * @method     array findByPostcodeBezoek(string $postcode_bezoek) Return Organisatie objects filtered by the postcode_bezoek column
 * @method     array findByStadBezoek(string $stad_bezoek) Return Organisatie objects filtered by the stad_bezoek column
 * @method     array findByTelefoonAlgemeen(string $telefoon_algemeen) Return Organisatie objects filtered by the telefoon_algemeen column
 * @method     array findByWebsite(string $website) Return Organisatie objects filtered by the website column
 * @method     array findByProvincieId(int $provincie_id) Return Organisatie objects filtered by the provincie_id column
 * @method     array findByTypeId(int $type_id) Return Organisatie objects filtered by the type_id column
 * @method     array findByDeletedAt(string $deleted_at) Return Organisatie objects filtered by the deleted_at column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseOrganisatieQuery extends ModelCriteria
{

	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BaseOrganisatieQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Organisatie', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new OrganisatieQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    OrganisatieQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof OrganisatieQuery) {
			return $criteria;
		}
		$query = new OrganisatieQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Organisatie|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = OrganisatiePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(OrganisatiePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(OrganisatiePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(OrganisatiePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the naam column
	 * 
	 * @param     string $naam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByNaam($naam = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($naam)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $naam)) {
				$naam = str_replace('*', '%', $naam);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::NAAM, $naam, $comparison);
	}

	/**
	 * Filter the query on the postbus_post column
	 * 
	 * @param     string $postbusPost The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPostbusPost($postbusPost = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postbusPost)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postbusPost)) {
				$postbusPost = str_replace('*', '%', $postbusPost);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::POSTBUS_POST, $postbusPost, $comparison);
	}

	/**
	 * Filter the query on the postcode_post column
	 * 
	 * @param     string $postcodePost The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPostcodePost($postcodePost = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcodePost)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcodePost)) {
				$postcodePost = str_replace('*', '%', $postcodePost);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::POSTCODE_POST, $postcodePost, $comparison);
	}

	/**
	 * Filter the query on the stad_post column
	 * 
	 * @param     string $stadPost The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByStadPost($stadPost = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stadPost)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stadPost)) {
				$stadPost = str_replace('*', '%', $stadPost);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::STAD_POST, $stadPost, $comparison);
	}

	/**
	 * Filter the query on the straat_bezoek column
	 * 
	 * @param     string $straatBezoek The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByStraatBezoek($straatBezoek = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($straatBezoek)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $straatBezoek)) {
				$straatBezoek = str_replace('*', '%', $straatBezoek);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::STRAAT_BEZOEK, $straatBezoek, $comparison);
	}

	/**
	 * Filter the query on the nummer_bezoek column
	 * 
	 * @param     string $nummerBezoek The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByNummerBezoek($nummerBezoek = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nummerBezoek)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nummerBezoek)) {
				$nummerBezoek = str_replace('*', '%', $nummerBezoek);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::NUMMER_BEZOEK, $nummerBezoek, $comparison);
	}

	/**
	 * Filter the query on the postcode_bezoek column
	 * 
	 * @param     string $postcodeBezoek The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPostcodeBezoek($postcodeBezoek = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcodeBezoek)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcodeBezoek)) {
				$postcodeBezoek = str_replace('*', '%', $postcodeBezoek);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::POSTCODE_BEZOEK, $postcodeBezoek, $comparison);
	}

	/**
	 * Filter the query on the stad_bezoek column
	 * 
	 * @param     string $stadBezoek The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByStadBezoek($stadBezoek = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stadBezoek)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stadBezoek)) {
				$stadBezoek = str_replace('*', '%', $stadBezoek);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::STAD_BEZOEK, $stadBezoek, $comparison);
	}

	/**
	 * Filter the query on the telefoon_algemeen column
	 * 
	 * @param     string $telefoonAlgemeen The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByTelefoonAlgemeen($telefoonAlgemeen = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefoonAlgemeen)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefoonAlgemeen)) {
				$telefoonAlgemeen = str_replace('*', '%', $telefoonAlgemeen);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::TELEFOON_ALGEMEEN, $telefoonAlgemeen, $comparison);
	}

	/**
	 * Filter the query on the website column
	 * 
	 * @param     string $website The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByWebsite($website = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($website)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $website)) {
				$website = str_replace('*', '%', $website);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::WEBSITE, $website, $comparison);
	}

	/**
	 * Filter the query on the provincie_id column
	 * 
	 * @param     int|array $provincieId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByProvincieId($provincieId = null, $comparison = null)
	{
		if (is_array($provincieId)) {
			$useMinMax = false;
			if (isset($provincieId['min'])) {
				$this->addUsingAlias(OrganisatiePeer::PROVINCIE_ID, $provincieId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($provincieId['max'])) {
				$this->addUsingAlias(OrganisatiePeer::PROVINCIE_ID, $provincieId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::PROVINCIE_ID, $provincieId, $comparison);
	}

	/**
	 * Filter the query on the type_id column
	 * 
	 * @param     int|array $typeId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByTypeId($typeId = null, $comparison = null)
	{
		if (is_array($typeId)) {
			$useMinMax = false;
			if (isset($typeId['min'])) {
				$this->addUsingAlias(OrganisatiePeer::TYPE_ID, $typeId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($typeId['max'])) {
				$this->addUsingAlias(OrganisatiePeer::TYPE_ID, $typeId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::TYPE_ID, $typeId, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 * 
	 * @param     string|array $deletedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(OrganisatiePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(OrganisatiePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(OrganisatiePeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related Provincie object
	 *
	 * @param     Provincie $provincie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByProvincie($provincie, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::PROVINCIE_ID, $provincie->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Provincie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinProvincie($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Provincie');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Provincie');
		}
		
		return $this;
	}

	/**
	 * Use the Provincie relation Provincie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProvincieQuery A secondary query class using the current class as primary query
	 */
	public function useProvincieQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinProvincie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Provincie', 'ProvincieQuery');
	}

	/**
	 * Filter the query by a related OrganisatieType object
	 *
	 * @param     OrganisatieType $organisatieType  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByOrganisatieType($organisatieType, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::TYPE_ID, $organisatieType->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the OrganisatieType relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinOrganisatieType($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('OrganisatieType');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'OrganisatieType');
		}
		
		return $this;
	}

	/**
	 * Use the OrganisatieType relation OrganisatieType object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieTypeQuery A secondary query class using the current class as primary query
	 */
	public function useOrganisatieTypeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinOrganisatieType($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'OrganisatieType', 'OrganisatieTypeQuery');
	}

	/**
	 * Filter the query by a related Persoon object
	 *
	 * @param     Persoon $persoon  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByPersoon($persoon, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::ID, $persoon->getOrganisatieId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Persoon relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinPersoon($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Persoon');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Persoon');
		}
		
		return $this;
	}

	/**
	 * Use the Persoon relation Persoon object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersoonQuery A secondary query class using the current class as primary query
	 */
	public function usePersoonQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinPersoon($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Persoon', 'PersoonQuery');
	}

	/**
	 * Filter the query by a related Contact object
	 *
	 * @param     Contact $contact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByContact($contact, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::ID, $contact->getOrganisatieId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Contact relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Contact');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Contact');
		}
		
		return $this;
	}

	/**
	 * Use the Contact relation Contact object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContactQuery A secondary query class using the current class as primary query
	 */
	public function useContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinContact($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Contact', 'ContactQuery');
	}

	/**
	 * Filter the query by a related Vervolgactie object
	 *
	 * @param     Vervolgactie $vervolgactie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByVervolgactie($vervolgactie, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::ID, $vervolgactie->getOrganisatieId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Vervolgactie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinVervolgactie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Vervolgactie');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Vervolgactie');
		}
		
		return $this;
	}

	/**
	 * Use the Vervolgactie relation Vervolgactie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VervolgactieQuery A secondary query class using the current class as primary query
	 */
	public function useVervolgactieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinVervolgactie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Vervolgactie', 'VervolgactieQuery');
	}

	/**
	 * Filter the query by a related Kans object
	 *
	 * @param     Kans $kans  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function filterByKans($kans, $comparison = null)
	{
		return $this
			->addUsingAlias(OrganisatiePeer::ID, $kans->getOrganisatieId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Kans relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function joinKans($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Kans');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Kans');
		}
		
		return $this;
	}

	/**
	 * Use the Kans relation Kans object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    KansQuery A secondary query class using the current class as primary query
	 */
	public function useKansQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinKans($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Kans', 'KansQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Organisatie $organisatie Object to remove from the list of results
	 *
	 * @return    OrganisatieQuery The current query, for fluid interface
	 */
	public function prune($organisatie = null)
	{
		if ($organisatie) {
			$this->addUsingAlias(OrganisatiePeer::ID, $organisatie->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

	/**
	 * Code to execute before every SELECT statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(OrganisatiePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			OrganisatiePeer::enableSoftDelete();
		}
		
		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		// soft_delete behavior
		if (OrganisatieQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			return $this->softDelete($con);
		} else {
			return $this->hasWhereClause() ? $this->forceDelete($con) : $this->forceDeleteAll($con);
		}
		
		return $this->preDelete($con);
	}

	// soft_delete behavior
	
	/**
	 * Temporarily disable the filter on deleted rows
	 * Valid only for the current query
	 * 
	 * @see OrganisatieQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return OrganisatieQuery The current query, for fuid interface
	 */
	public function includeDeleted()
	{
		$this->localSoftDelete = false;
		return $this;
	}
	
	/**
	 * Soft delete the selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of updated rows
	 */
	public function softDelete(PropelPDO $con = null)
	{
		return $this->update(array('DeletedAt' => time()), $con);
	}
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of the selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of deleted rows
	 */
	public function forceDelete(PropelPDO $con = null)
	{
		return OrganisatiePeer::doForceDelete($this, $con);
	}
	
	/**
	 * Bypass the soft_delete behavior and force a hard delete of all the rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int Number of deleted rows
	 */
	public function forceDeleteAll(PropelPDO $con = null)
	{
		return OrganisatiePeer::doForceDeleteAll($con);}
	
	/**
	 * Undelete selected rows
	 *
	 * @param			PropelPDO $con an optional connection object
	 *
	 * @return		int The number of rows affected by this update and any referring fk objects' save() operations.
	 */
	public function unDelete(PropelPDO $con = null)
	{
		return $this->update(array('DeletedAt' => null), $con);
	}
		
	/**
	 * Enable the soft_delete behavior for this model
	 */
	public static function enableSoftDelete()
	{
		self::$softDelete = true;
	}
	
	/**
	 * Disable the soft_delete behavior for this model
	 */
	public static function disableSoftDelete()
	{
		self::$softDelete = false;
	}
	
	/**
	 * Check the soft_delete behavior for this model
	 *
	 * @return boolean true if the soft_delete behavior is enabled
	 */
	public static function isSoftDeleteEnabled()
	{
		return self::$softDelete;
	}

} // BaseOrganisatieQuery
