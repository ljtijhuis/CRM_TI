<?php


/**
 * Base class that represents a query for the 'gebruiker' table.
 *
 * 
 *
 * @method     GebruikerQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GebruikerQuery orderByVoornaam($order = Criteria::ASC) Order by the voornaam column
 * @method     GebruikerQuery orderByAchternaam($order = Criteria::ASC) Order by the achternaam column
 * @method     GebruikerQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     GebruikerQuery groupById() Group by the id column
 * @method     GebruikerQuery groupByVoornaam() Group by the voornaam column
 * @method     GebruikerQuery groupByAchternaam() Group by the achternaam column
 * @method     GebruikerQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     GebruikerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GebruikerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GebruikerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GebruikerQuery leftJoinContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contact relation
 * @method     GebruikerQuery rightJoinContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contact relation
 * @method     GebruikerQuery innerJoinContact($relationAlias = null) Adds a INNER JOIN clause to the query using the Contact relation
 *
 * @method     GebruikerQuery leftJoinVervolgactie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vervolgactie relation
 * @method     GebruikerQuery rightJoinVervolgactie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vervolgactie relation
 * @method     GebruikerQuery innerJoinVervolgactie($relationAlias = null) Adds a INNER JOIN clause to the query using the Vervolgactie relation
 *
 * @method     Gebruiker findOne(PropelPDO $con = null) Return the first Gebruiker matching the query
 * @method     Gebruiker findOneOrCreate(PropelPDO $con = null) Return the first Gebruiker matching the query, or a new Gebruiker object populated from the query conditions when no match is found
 *
 * @method     Gebruiker findOneById(int $id) Return the first Gebruiker filtered by the id column
 * @method     Gebruiker findOneByVoornaam(string $voornaam) Return the first Gebruiker filtered by the voornaam column
 * @method     Gebruiker findOneByAchternaam(string $achternaam) Return the first Gebruiker filtered by the achternaam column
 * @method     Gebruiker findOneByDeletedAt(string $deleted_at) Return the first Gebruiker filtered by the deleted_at column
 *
 * @method     array findById(int $id) Return Gebruiker objects filtered by the id column
 * @method     array findByVoornaam(string $voornaam) Return Gebruiker objects filtered by the voornaam column
 * @method     array findByAchternaam(string $achternaam) Return Gebruiker objects filtered by the achternaam column
 * @method     array findByDeletedAt(string $deleted_at) Return Gebruiker objects filtered by the deleted_at column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseGebruikerQuery extends ModelCriteria
{

	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BaseGebruikerQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Gebruiker', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GebruikerQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GebruikerQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GebruikerQuery) {
			return $criteria;
		}
		$query = new GebruikerQuery();
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
	 * @return    Gebruiker|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GebruikerPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GebruikerPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GebruikerPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GebruikerPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the voornaam column
	 * 
	 * @param     string $voornaam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByVoornaam($voornaam = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($voornaam)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $voornaam)) {
				$voornaam = str_replace('*', '%', $voornaam);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GebruikerPeer::VOORNAAM, $voornaam, $comparison);
	}

	/**
	 * Filter the query on the achternaam column
	 * 
	 * @param     string $achternaam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByAchternaam($achternaam = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($achternaam)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $achternaam)) {
				$achternaam = str_replace('*', '%', $achternaam);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(GebruikerPeer::ACHTERNAAM, $achternaam, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 * 
	 * @param     string|array $deletedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(GebruikerPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(GebruikerPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(GebruikerPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related Contact object
	 *
	 * @param     Contact $contact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByContact($contact, $comparison = null)
	{
		return $this
			->addUsingAlias(GebruikerPeer::ID, $contact->getGebruikerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Contact relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
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
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function filterByVervolgactie($vervolgactie, $comparison = null)
	{
		return $this
			->addUsingAlias(GebruikerPeer::ID, $vervolgactie->getGebruikerId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Vervolgactie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Gebruiker $gebruiker Object to remove from the list of results
	 *
	 * @return    GebruikerQuery The current query, for fluid interface
	 */
	public function prune($gebruiker = null)
	{
		if ($gebruiker) {
			$this->addUsingAlias(GebruikerPeer::ID, $gebruiker->getId(), Criteria::NOT_EQUAL);
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
		if (GebruikerQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(GebruikerPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			GebruikerPeer::enableSoftDelete();
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
		if (GebruikerQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
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
	 * @see GebruikerQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return GebruikerQuery The current query, for fuid interface
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
		return GebruikerPeer::doForceDelete($this, $con);
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
		return GebruikerPeer::doForceDeleteAll($con);}
	
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

} // BaseGebruikerQuery
