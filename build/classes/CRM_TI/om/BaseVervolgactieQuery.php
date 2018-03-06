<?php


/**
 * Base class that represents a query for the 'vervolgactie' table.
 *
 * 
 *
 * @method     VervolgactieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VervolgactieQuery orderByDatum($order = Criteria::ASC) Order by the datum column
 * @method     VervolgactieQuery orderByOmschrijving($order = Criteria::ASC) Order by the omschrijving column
 * @method     VervolgactieQuery orderByGebruikerId($order = Criteria::ASC) Order by the gebruiker_id column
 * @method     VervolgactieQuery orderByOrganisatieId($order = Criteria::ASC) Order by the organisatie_id column
 * @method     VervolgactieQuery orderByAfgehandeld($order = Criteria::ASC) Order by the afgehandeld column
 *
 * @method     VervolgactieQuery groupById() Group by the id column
 * @method     VervolgactieQuery groupByDatum() Group by the datum column
 * @method     VervolgactieQuery groupByOmschrijving() Group by the omschrijving column
 * @method     VervolgactieQuery groupByGebruikerId() Group by the gebruiker_id column
 * @method     VervolgactieQuery groupByOrganisatieId() Group by the organisatie_id column
 * @method     VervolgactieQuery groupByAfgehandeld() Group by the afgehandeld column
 *
 * @method     VervolgactieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VervolgactieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VervolgactieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VervolgactieQuery leftJoinGebruiker($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gebruiker relation
 * @method     VervolgactieQuery rightJoinGebruiker($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gebruiker relation
 * @method     VervolgactieQuery innerJoinGebruiker($relationAlias = null) Adds a INNER JOIN clause to the query using the Gebruiker relation
 *
 * @method     VervolgactieQuery leftJoinOrganisatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisatie relation
 * @method     VervolgactieQuery rightJoinOrganisatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisatie relation
 * @method     VervolgactieQuery innerJoinOrganisatie($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisatie relation
 *
 * @method     Vervolgactie findOne(PropelPDO $con = null) Return the first Vervolgactie matching the query
 * @method     Vervolgactie findOneOrCreate(PropelPDO $con = null) Return the first Vervolgactie matching the query, or a new Vervolgactie object populated from the query conditions when no match is found
 *
 * @method     Vervolgactie findOneById(int $id) Return the first Vervolgactie filtered by the id column
 * @method     Vervolgactie findOneByDatum(string $datum) Return the first Vervolgactie filtered by the datum column
 * @method     Vervolgactie findOneByOmschrijving(string $omschrijving) Return the first Vervolgactie filtered by the omschrijving column
 * @method     Vervolgactie findOneByGebruikerId(int $gebruiker_id) Return the first Vervolgactie filtered by the gebruiker_id column
 * @method     Vervolgactie findOneByOrganisatieId(int $organisatie_id) Return the first Vervolgactie filtered by the organisatie_id column
 * @method     Vervolgactie findOneByAfgehandeld(boolean $afgehandeld) Return the first Vervolgactie filtered by the afgehandeld column
 *
 * @method     array findById(int $id) Return Vervolgactie objects filtered by the id column
 * @method     array findByDatum(string $datum) Return Vervolgactie objects filtered by the datum column
 * @method     array findByOmschrijving(string $omschrijving) Return Vervolgactie objects filtered by the omschrijving column
 * @method     array findByGebruikerId(int $gebruiker_id) Return Vervolgactie objects filtered by the gebruiker_id column
 * @method     array findByOrganisatieId(int $organisatie_id) Return Vervolgactie objects filtered by the organisatie_id column
 * @method     array findByAfgehandeld(boolean $afgehandeld) Return Vervolgactie objects filtered by the afgehandeld column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseVervolgactieQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVervolgactieQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Vervolgactie', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VervolgactieQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VervolgactieQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VervolgactieQuery) {
			return $criteria;
		}
		$query = new VervolgactieQuery();
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
	 * @return    Vervolgactie|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VervolgactiePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VervolgactiePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VervolgactiePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VervolgactiePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the datum column
	 * 
	 * @param     string|array $datum The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByDatum($datum = null, $comparison = null)
	{
		if (is_array($datum)) {
			$useMinMax = false;
			if (isset($datum['min'])) {
				$this->addUsingAlias(VervolgactiePeer::DATUM, $datum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datum['max'])) {
				$this->addUsingAlias(VervolgactiePeer::DATUM, $datum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VervolgactiePeer::DATUM, $datum, $comparison);
	}

	/**
	 * Filter the query on the omschrijving column
	 * 
	 * @param     string $omschrijving The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
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
		return $this->addUsingAlias(VervolgactiePeer::OMSCHRIJVING, $omschrijving, $comparison);
	}

	/**
	 * Filter the query on the gebruiker_id column
	 * 
	 * @param     int|array $gebruikerId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByGebruikerId($gebruikerId = null, $comparison = null)
	{
		if (is_array($gebruikerId)) {
			$useMinMax = false;
			if (isset($gebruikerId['min'])) {
				$this->addUsingAlias(VervolgactiePeer::GEBRUIKER_ID, $gebruikerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($gebruikerId['max'])) {
				$this->addUsingAlias(VervolgactiePeer::GEBRUIKER_ID, $gebruikerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VervolgactiePeer::GEBRUIKER_ID, $gebruikerId, $comparison);
	}

	/**
	 * Filter the query on the organisatie_id column
	 * 
	 * @param     int|array $organisatieId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByOrganisatieId($organisatieId = null, $comparison = null)
	{
		if (is_array($organisatieId)) {
			$useMinMax = false;
			if (isset($organisatieId['min'])) {
				$this->addUsingAlias(VervolgactiePeer::ORGANISATIE_ID, $organisatieId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($organisatieId['max'])) {
				$this->addUsingAlias(VervolgactiePeer::ORGANISATIE_ID, $organisatieId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VervolgactiePeer::ORGANISATIE_ID, $organisatieId, $comparison);
	}

	/**
	 * Filter the query on the afgehandeld column
	 * 
	 * @param     boolean|string $afgehandeld The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByAfgehandeld($afgehandeld = null, $comparison = null)
	{
		if (is_string($afgehandeld)) {
			$afgehandeld = in_array(strtolower($afgehandeld), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(VervolgactiePeer::AFGEHANDELD, $afgehandeld, $comparison);
	}

	/**
	 * Filter the query by a related Gebruiker object
	 *
	 * @param     Gebruiker $gebruiker  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByGebruiker($gebruiker, $comparison = null)
	{
		return $this
			->addUsingAlias(VervolgactiePeer::GEBRUIKER_ID, $gebruiker->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Gebruiker relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function joinGebruiker($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Gebruiker');
		
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
			$this->addJoinObject($join, 'Gebruiker');
		}
		
		return $this;
	}

	/**
	 * Use the Gebruiker relation Gebruiker object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GebruikerQuery A secondary query class using the current class as primary query
	 */
	public function useGebruikerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinGebruiker($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Gebruiker', 'GebruikerQuery');
	}

	/**
	 * Filter the query by a related Organisatie object
	 *
	 * @param     Organisatie $organisatie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function filterByOrganisatie($organisatie, $comparison = null)
	{
		return $this
			->addUsingAlias(VervolgactiePeer::ORGANISATIE_ID, $organisatie->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Organisatie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
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
	 * @param     Vervolgactie $vervolgactie Object to remove from the list of results
	 *
	 * @return    VervolgactieQuery The current query, for fluid interface
	 */
	public function prune($vervolgactie = null)
	{
		if ($vervolgactie) {
			$this->addUsingAlias(VervolgactiePeer::ID, $vervolgactie->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVervolgactieQuery
