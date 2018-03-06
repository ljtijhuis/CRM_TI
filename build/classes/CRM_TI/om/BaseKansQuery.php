<?php


/**
 * Base class that represents a query for the 'kans' table.
 *
 * 
 *
 * @method     KansQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     KansQuery orderByDatum($order = Criteria::ASC) Order by the datum column
 * @method     KansQuery orderByOmschrijving($order = Criteria::ASC) Order by the omschrijving column
 * @method     KansQuery orderByOrganisatieId($order = Criteria::ASC) Order by the organisatie_id column
 * @method     KansQuery orderByOmschrijvingProduct($order = Criteria::ASC) Order by the omschrijving_product column
 * @method     KansQuery orderByWijzeAanbesteding($order = Criteria::ASC) Order by the wijze_aanbesteding column
 * @method     KansQuery orderByPlanningUitvraag($order = Criteria::ASC) Order by the planning_uitvraag column
 * @method     KansQuery orderByBedrag($order = Criteria::ASC) Order by the bedrag column
 * @method     KansQuery orderByKans($order = Criteria::ASC) Order by the kans column
 * @method     KansQuery orderByAfgehandeld($order = Criteria::ASC) Order by the afgehandeld column
 * @method     KansQuery orderByResultaat($order = Criteria::ASC) Order by the resultaat column
 * @method     KansQuery orderByBedragInschrijving($order = Criteria::ASC) Order by the bedrag_inschrijving column
 * @method     KansQuery orderByBedragConcurrent($order = Criteria::ASC) Order by the bedrag_concurrent column
 * @method     KansQuery orderByGemistOpmerking($order = Criteria::ASC) Order by the gemist_opmerking column
 *
 * @method     KansQuery groupById() Group by the id column
 * @method     KansQuery groupByDatum() Group by the datum column
 * @method     KansQuery groupByOmschrijving() Group by the omschrijving column
 * @method     KansQuery groupByOrganisatieId() Group by the organisatie_id column
 * @method     KansQuery groupByOmschrijvingProduct() Group by the omschrijving_product column
 * @method     KansQuery groupByWijzeAanbesteding() Group by the wijze_aanbesteding column
 * @method     KansQuery groupByPlanningUitvraag() Group by the planning_uitvraag column
 * @method     KansQuery groupByBedrag() Group by the bedrag column
 * @method     KansQuery groupByKans() Group by the kans column
 * @method     KansQuery groupByAfgehandeld() Group by the afgehandeld column
 * @method     KansQuery groupByResultaat() Group by the resultaat column
 * @method     KansQuery groupByBedragInschrijving() Group by the bedrag_inschrijving column
 * @method     KansQuery groupByBedragConcurrent() Group by the bedrag_concurrent column
 * @method     KansQuery groupByGemistOpmerking() Group by the gemist_opmerking column
 *
 * @method     KansQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     KansQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     KansQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     KansQuery leftJoinOrganisatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisatie relation
 * @method     KansQuery rightJoinOrganisatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisatie relation
 * @method     KansQuery innerJoinOrganisatie($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisatie relation
 *
 * @method     Kans findOne(PropelPDO $con = null) Return the first Kans matching the query
 * @method     Kans findOneOrCreate(PropelPDO $con = null) Return the first Kans matching the query, or a new Kans object populated from the query conditions when no match is found
 *
 * @method     Kans findOneById(int $id) Return the first Kans filtered by the id column
 * @method     Kans findOneByDatum(string $datum) Return the first Kans filtered by the datum column
 * @method     Kans findOneByOmschrijving(string $omschrijving) Return the first Kans filtered by the omschrijving column
 * @method     Kans findOneByOrganisatieId(int $organisatie_id) Return the first Kans filtered by the organisatie_id column
 * @method     Kans findOneByOmschrijvingProduct(string $omschrijving_product) Return the first Kans filtered by the omschrijving_product column
 * @method     Kans findOneByWijzeAanbesteding(string $wijze_aanbesteding) Return the first Kans filtered by the wijze_aanbesteding column
 * @method     Kans findOneByPlanningUitvraag(string $planning_uitvraag) Return the first Kans filtered by the planning_uitvraag column
 * @method     Kans findOneByBedrag(string $bedrag) Return the first Kans filtered by the bedrag column
 * @method     Kans findOneByKans(double $kans) Return the first Kans filtered by the kans column
 * @method     Kans findOneByAfgehandeld(boolean $afgehandeld) Return the first Kans filtered by the afgehandeld column
 * @method     Kans findOneByResultaat(int $resultaat) Return the first Kans filtered by the resultaat column
 * @method     Kans findOneByBedragInschrijving(string $bedrag_inschrijving) Return the first Kans filtered by the bedrag_inschrijving column
 * @method     Kans findOneByBedragConcurrent(string $bedrag_concurrent) Return the first Kans filtered by the bedrag_concurrent column
 * @method     Kans findOneByGemistOpmerking(string $gemist_opmerking) Return the first Kans filtered by the gemist_opmerking column
 *
 * @method     array findById(int $id) Return Kans objects filtered by the id column
 * @method     array findByDatum(string $datum) Return Kans objects filtered by the datum column
 * @method     array findByOmschrijving(string $omschrijving) Return Kans objects filtered by the omschrijving column
 * @method     array findByOrganisatieId(int $organisatie_id) Return Kans objects filtered by the organisatie_id column
 * @method     array findByOmschrijvingProduct(string $omschrijving_product) Return Kans objects filtered by the omschrijving_product column
 * @method     array findByWijzeAanbesteding(string $wijze_aanbesteding) Return Kans objects filtered by the wijze_aanbesteding column
 * @method     array findByPlanningUitvraag(string $planning_uitvraag) Return Kans objects filtered by the planning_uitvraag column
 * @method     array findByBedrag(string $bedrag) Return Kans objects filtered by the bedrag column
 * @method     array findByKans(double $kans) Return Kans objects filtered by the kans column
 * @method     array findByAfgehandeld(boolean $afgehandeld) Return Kans objects filtered by the afgehandeld column
 * @method     array findByResultaat(int $resultaat) Return Kans objects filtered by the resultaat column
 * @method     array findByBedragInschrijving(string $bedrag_inschrijving) Return Kans objects filtered by the bedrag_inschrijving column
 * @method     array findByBedragConcurrent(string $bedrag_concurrent) Return Kans objects filtered by the bedrag_concurrent column
 * @method     array findByGemistOpmerking(string $gemist_opmerking) Return Kans objects filtered by the gemist_opmerking column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseKansQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseKansQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Kans', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new KansQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    KansQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof KansQuery) {
			return $criteria;
		}
		$query = new KansQuery();
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
	 * @return    Kans|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = KansPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(KansPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(KansPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(KansPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the datum column
	 * 
	 * @param     string|array $datum The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByDatum($datum = null, $comparison = null)
	{
		if (is_array($datum)) {
			$useMinMax = false;
			if (isset($datum['min'])) {
				$this->addUsingAlias(KansPeer::DATUM, $datum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datum['max'])) {
				$this->addUsingAlias(KansPeer::DATUM, $datum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::DATUM, $datum, $comparison);
	}

	/**
	 * Filter the query on the omschrijving column
	 * 
	 * @param     string $omschrijving The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByOmschrijving($omschrijving = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($omschrijving)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $omschrijving)) {
				$omschrijving = str_replace('*', '%', $omschrijving);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(KansPeer::OMSCHRIJVING, $omschrijving, $comparison);
	}

	/**
	 * Filter the query on the organisatie_id column
	 * 
	 * @param     int|array $organisatieId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByOrganisatieId($organisatieId = null, $comparison = null)
	{
		if (is_array($organisatieId)) {
			$useMinMax = false;
			if (isset($organisatieId['min'])) {
				$this->addUsingAlias(KansPeer::ORGANISATIE_ID, $organisatieId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($organisatieId['max'])) {
				$this->addUsingAlias(KansPeer::ORGANISATIE_ID, $organisatieId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::ORGANISATIE_ID, $organisatieId, $comparison);
	}

	/**
	 * Filter the query on the omschrijving_product column
	 * 
	 * @param     string $omschrijvingProduct The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByOmschrijvingProduct($omschrijvingProduct = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($omschrijvingProduct)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $omschrijvingProduct)) {
				$omschrijvingProduct = str_replace('*', '%', $omschrijvingProduct);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(KansPeer::OMSCHRIJVING_PRODUCT, $omschrijvingProduct, $comparison);
	}

	/**
	 * Filter the query on the wijze_aanbesteding column
	 * 
	 * @param     string $wijzeAanbesteding The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByWijzeAanbesteding($wijzeAanbesteding = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($wijzeAanbesteding)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $wijzeAanbesteding)) {
				$wijzeAanbesteding = str_replace('*', '%', $wijzeAanbesteding);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(KansPeer::WIJZE_AANBESTEDING, $wijzeAanbesteding, $comparison);
	}

	/**
	 * Filter the query on the planning_uitvraag column
	 * 
	 * @param     string|array $planningUitvraag The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByPlanningUitvraag($planningUitvraag = null, $comparison = null)
	{
		if (is_array($planningUitvraag)) {
			$useMinMax = false;
			if (isset($planningUitvraag['min'])) {
				$this->addUsingAlias(KansPeer::PLANNING_UITVRAAG, $planningUitvraag['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($planningUitvraag['max'])) {
				$this->addUsingAlias(KansPeer::PLANNING_UITVRAAG, $planningUitvraag['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::PLANNING_UITVRAAG, $planningUitvraag, $comparison);
	}

	/**
	 * Filter the query on the bedrag column
	 * 
	 * @param     string|array $bedrag The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByBedrag($bedrag = null, $comparison = null)
	{
		if (is_array($bedrag)) {
			$useMinMax = false;
			if (isset($bedrag['min'])) {
				$this->addUsingAlias(KansPeer::BEDRAG, $bedrag['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($bedrag['max'])) {
				$this->addUsingAlias(KansPeer::BEDRAG, $bedrag['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::BEDRAG, $bedrag, $comparison);
	}

	/**
	 * Filter the query on the kans column
	 * 
	 * @param     double|array $kans The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByKans($kans = null, $comparison = null)
	{
		if (is_array($kans)) {
			$useMinMax = false;
			if (isset($kans['min'])) {
				$this->addUsingAlias(KansPeer::KANS, $kans['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($kans['max'])) {
				$this->addUsingAlias(KansPeer::KANS, $kans['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::KANS, $kans, $comparison);
	}

	/**
	 * Filter the query on the afgehandeld column
	 * 
	 * @param     boolean|string $afgehandeld The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByAfgehandeld($afgehandeld = null, $comparison = null)
	{
		if (is_string($afgehandeld)) {
			$afgehandeld = in_array(strtolower($afgehandeld), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(KansPeer::AFGEHANDELD, $afgehandeld, $comparison);
	}

	/**
	 * Filter the query on the resultaat column
	 * 
	 * @param     int|array $resultaat The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByResultaat($resultaat = null, $comparison = null)
	{
		if (is_array($resultaat)) {
			$useMinMax = false;
			if (isset($resultaat['min'])) {
				$this->addUsingAlias(KansPeer::RESULTAAT, $resultaat['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resultaat['max'])) {
				$this->addUsingAlias(KansPeer::RESULTAAT, $resultaat['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::RESULTAAT, $resultaat, $comparison);
	}

	/**
	 * Filter the query on the bedrag_inschrijving column
	 * 
	 * @param     string|array $bedragInschrijving The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByBedragInschrijving($bedragInschrijving = null, $comparison = null)
	{
		if (is_array($bedragInschrijving)) {
			$useMinMax = false;
			if (isset($bedragInschrijving['min'])) {
				$this->addUsingAlias(KansPeer::BEDRAG_INSCHRIJVING, $bedragInschrijving['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($bedragInschrijving['max'])) {
				$this->addUsingAlias(KansPeer::BEDRAG_INSCHRIJVING, $bedragInschrijving['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::BEDRAG_INSCHRIJVING, $bedragInschrijving, $comparison);
	}

	/**
	 * Filter the query on the bedrag_concurrent column
	 * 
	 * @param     string|array $bedragConcurrent The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByBedragConcurrent($bedragConcurrent = null, $comparison = null)
	{
		if (is_array($bedragConcurrent)) {
			$useMinMax = false;
			if (isset($bedragConcurrent['min'])) {
				$this->addUsingAlias(KansPeer::BEDRAG_CONCURRENT, $bedragConcurrent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($bedragConcurrent['max'])) {
				$this->addUsingAlias(KansPeer::BEDRAG_CONCURRENT, $bedragConcurrent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(KansPeer::BEDRAG_CONCURRENT, $bedragConcurrent, $comparison);
	}

	/**
	 * Filter the query on the gemist_opmerking column
	 * 
	 * @param     string $gemistOpmerking The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByGemistOpmerking($gemistOpmerking = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gemistOpmerking)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gemistOpmerking)) {
				$gemistOpmerking = str_replace('*', '%', $gemistOpmerking);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(KansPeer::GEMIST_OPMERKING, $gemistOpmerking, $comparison);
	}

	/**
	 * Filter the query by a related Organisatie object
	 *
	 * @param     Organisatie $organisatie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function filterByOrganisatie($organisatie, $comparison = null)
	{
		return $this
			->addUsingAlias(KansPeer::ORGANISATIE_ID, $organisatie->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Organisatie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function joinOrganisatie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Organisatie');
		
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
			$this->addJoinObject($join, 'Organisatie');
		}
		
		return $this;
	}

	/**
	 * Use the Organisatie relation Organisatie object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    OrganisatieQuery A secondary query class using the current class as primary query
	 */
	public function useOrganisatieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinOrganisatie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Organisatie', 'OrganisatieQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Kans $kans Object to remove from the list of results
	 *
	 * @return    KansQuery The current query, for fluid interface
	 */
	public function prune($kans = null)
	{
		if ($kans) {
			$this->addUsingAlias(KansPeer::ID, $kans->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseKansQuery
