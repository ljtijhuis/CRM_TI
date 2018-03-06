<?php


/**
 * Base class that represents a query for the 'contact' table.
 *
 * 
 *
 * @method     ContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ContactQuery orderByDatum($order = Criteria::ASC) Order by the datum column
 * @method     ContactQuery orderByWijze($order = Criteria::ASC) Order by the wijze column
 * @method     ContactQuery orderByAandachtspunten($order = Criteria::ASC) Order by the aandachtspunten column
 * @method     ContactQuery orderByPersoonId($order = Criteria::ASC) Order by the persoon_id column
 * @method     ContactQuery orderByGebruikerId($order = Criteria::ASC) Order by the gebruiker_id column
 * @method     ContactQuery orderByOrganisatieId($order = Criteria::ASC) Order by the organisatie_id column
 *
 * @method     ContactQuery groupById() Group by the id column
 * @method     ContactQuery groupByDatum() Group by the datum column
 * @method     ContactQuery groupByWijze() Group by the wijze column
 * @method     ContactQuery groupByAandachtspunten() Group by the aandachtspunten column
 * @method     ContactQuery groupByPersoonId() Group by the persoon_id column
 * @method     ContactQuery groupByGebruikerId() Group by the gebruiker_id column
 * @method     ContactQuery groupByOrganisatieId() Group by the organisatie_id column
 *
 * @method     ContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ContactQuery leftJoinPersoon($relationAlias = null) Adds a LEFT JOIN clause to the query using the Persoon relation
 * @method     ContactQuery rightJoinPersoon($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Persoon relation
 * @method     ContactQuery innerJoinPersoon($relationAlias = null) Adds a INNER JOIN clause to the query using the Persoon relation
 *
 * @method     ContactQuery leftJoinGebruiker($relationAlias = null) Adds a LEFT JOIN clause to the query using the Gebruiker relation
 * @method     ContactQuery rightJoinGebruiker($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Gebruiker relation
 * @method     ContactQuery innerJoinGebruiker($relationAlias = null) Adds a INNER JOIN clause to the query using the Gebruiker relation
 *
 * @method     ContactQuery leftJoinOrganisatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisatie relation
 * @method     ContactQuery rightJoinOrganisatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisatie relation
 * @method     ContactQuery innerJoinOrganisatie($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisatie relation
 *
 * @method     Contact findOne(PropelPDO $con = null) Return the first Contact matching the query
 * @method     Contact findOneOrCreate(PropelPDO $con = null) Return the first Contact matching the query, or a new Contact object populated from the query conditions when no match is found
 *
 * @method     Contact findOneById(int $id) Return the first Contact filtered by the id column
 * @method     Contact findOneByDatum(string $datum) Return the first Contact filtered by the datum column
 * @method     Contact findOneByWijze(int $wijze) Return the first Contact filtered by the wijze column
 * @method     Contact findOneByAandachtspunten(string $aandachtspunten) Return the first Contact filtered by the aandachtspunten column
 * @method     Contact findOneByPersoonId(int $persoon_id) Return the first Contact filtered by the persoon_id column
 * @method     Contact findOneByGebruikerId(int $gebruiker_id) Return the first Contact filtered by the gebruiker_id column
 * @method     Contact findOneByOrganisatieId(int $organisatie_id) Return the first Contact filtered by the organisatie_id column
 *
 * @method     array findById(int $id) Return Contact objects filtered by the id column
 * @method     array findByDatum(string $datum) Return Contact objects filtered by the datum column
 * @method     array findByWijze(int $wijze) Return Contact objects filtered by the wijze column
 * @method     array findByAandachtspunten(string $aandachtspunten) Return Contact objects filtered by the aandachtspunten column
 * @method     array findByPersoonId(int $persoon_id) Return Contact objects filtered by the persoon_id column
 * @method     array findByGebruikerId(int $gebruiker_id) Return Contact objects filtered by the gebruiker_id column
 * @method     array findByOrganisatieId(int $organisatie_id) Return Contact objects filtered by the organisatie_id column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseContactQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseContactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Contact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ContactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ContactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ContactQuery) {
			return $criteria;
		}
		$query = new ContactQuery();
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
	 * @return    Contact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ContactPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ContactPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ContactPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ContactPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the datum column
	 * 
	 * @param     string|array $datum The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByDatum($datum = null, $comparison = null)
	{
		if (is_array($datum)) {
			$useMinMax = false;
			if (isset($datum['min'])) {
				$this->addUsingAlias(ContactPeer::DATUM, $datum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datum['max'])) {
				$this->addUsingAlias(ContactPeer::DATUM, $datum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContactPeer::DATUM, $datum, $comparison);
	}

	/**
	 * Filter the query on the wijze column
	 * 
	 * @param     int|array $wijze The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByWijze($wijze = null, $comparison = null)
	{
		if (is_array($wijze)) {
			$useMinMax = false;
			if (isset($wijze['min'])) {
				$this->addUsingAlias(ContactPeer::WIJZE, $wijze['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($wijze['max'])) {
				$this->addUsingAlias(ContactPeer::WIJZE, $wijze['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContactPeer::WIJZE, $wijze, $comparison);
	}

	/**
	 * Filter the query on the aandachtspunten column
	 * 
	 * @param     string $aandachtspunten The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByAandachtspunten($aandachtspunten = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($aandachtspunten)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $aandachtspunten)) {
				$aandachtspunten = str_replace('*', '%', $aandachtspunten);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ContactPeer::AANDACHTSPUNTEN, $aandachtspunten, $comparison);
	}

	/**
	 * Filter the query on the persoon_id column
	 * 
	 * @param     int|array $persoonId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByPersoonId($persoonId = null, $comparison = null)
	{
		if (is_array($persoonId)) {
			$useMinMax = false;
			if (isset($persoonId['min'])) {
				$this->addUsingAlias(ContactPeer::PERSOON_ID, $persoonId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($persoonId['max'])) {
				$this->addUsingAlias(ContactPeer::PERSOON_ID, $persoonId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContactPeer::PERSOON_ID, $persoonId, $comparison);
	}

	/**
	 * Filter the query on the gebruiker_id column
	 * 
	 * @param     int|array $gebruikerId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByGebruikerId($gebruikerId = null, $comparison = null)
	{
		if (is_array($gebruikerId)) {
			$useMinMax = false;
			if (isset($gebruikerId['min'])) {
				$this->addUsingAlias(ContactPeer::GEBRUIKER_ID, $gebruikerId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($gebruikerId['max'])) {
				$this->addUsingAlias(ContactPeer::GEBRUIKER_ID, $gebruikerId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContactPeer::GEBRUIKER_ID, $gebruikerId, $comparison);
	}

	/**
	 * Filter the query on the organisatie_id column
	 * 
	 * @param     int|array $organisatieId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByOrganisatieId($organisatieId = null, $comparison = null)
	{
		if (is_array($organisatieId)) {
			$useMinMax = false;
			if (isset($organisatieId['min'])) {
				$this->addUsingAlias(ContactPeer::ORGANISATIE_ID, $organisatieId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($organisatieId['max'])) {
				$this->addUsingAlias(ContactPeer::ORGANISATIE_ID, $organisatieId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ContactPeer::ORGANISATIE_ID, $organisatieId, $comparison);
	}

	/**
	 * Filter the query by a related Persoon object
	 *
	 * @param     Persoon $persoon  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByPersoon($persoon, $comparison = null)
	{
		return $this
			->addUsingAlias(ContactPeer::PERSOON_ID, $persoon->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Persoon relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function joinPersoon($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function usePersoonQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPersoon($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Persoon', 'PersoonQuery');
	}

	/**
	 * Filter the query by a related Gebruiker object
	 *
	 * @param     Gebruiker $gebruiker  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByGebruiker($gebruiker, $comparison = null)
	{
		return $this
			->addUsingAlias(ContactPeer::GEBRUIKER_ID, $gebruiker->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Gebruiker relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContactQuery The current query, for fluid interface
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
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function filterByOrganisatie($organisatie, $comparison = null)
	{
		return $this
			->addUsingAlias(ContactPeer::ORGANISATIE_ID, $organisatie->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Organisatie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ContactQuery The current query, for fluid interface
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
	 * @param     Contact $contact Object to remove from the list of results
	 *
	 * @return    ContactQuery The current query, for fluid interface
	 */
	public function prune($contact = null)
	{
		if ($contact) {
			$this->addUsingAlias(ContactPeer::ID, $contact->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseContactQuery
