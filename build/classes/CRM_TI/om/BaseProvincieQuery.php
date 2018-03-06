<?php


/**
 * Base class that represents a query for the 'provincie' table.
 *
 * 
 *
 * @method     ProvincieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ProvincieQuery orderByNaam($order = Criteria::ASC) Order by the naam column
 * @method     ProvincieQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     ProvincieQuery groupById() Group by the id column
 * @method     ProvincieQuery groupByNaam() Group by the naam column
 * @method     ProvincieQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     ProvincieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ProvincieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ProvincieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ProvincieQuery leftJoinOrganisatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisatie relation
 * @method     ProvincieQuery rightJoinOrganisatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisatie relation
 * @method     ProvincieQuery innerJoinOrganisatie($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisatie relation
 *
 * @method     Provincie findOne(PropelPDO $con = null) Return the first Provincie matching the query
 * @method     Provincie findOneOrCreate(PropelPDO $con = null) Return the first Provincie matching the query, or a new Provincie object populated from the query conditions when no match is found
 *
 * @method     Provincie findOneById(int $id) Return the first Provincie filtered by the id column
 * @method     Provincie findOneByNaam(string $naam) Return the first Provincie filtered by the naam column
 * @method     Provincie findOneByDeletedAt(string $deleted_at) Return the first Provincie filtered by the deleted_at column
 *
 * @method     array findById(int $id) Return Provincie objects filtered by the id column
 * @method     array findByNaam(string $naam) Return Provincie objects filtered by the naam column
 * @method     array findByDeletedAt(string $deleted_at) Return Provincie objects filtered by the deleted_at column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BaseProvincieQuery extends ModelCriteria
{

	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BaseProvincieQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Provincie', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ProvincieQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ProvincieQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ProvincieQuery) {
			return $criteria;
		}
		$query = new ProvincieQuery();
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
	 * @return    Provincie|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ProvinciePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ProvinciePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ProvinciePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ProvinciePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the naam column
	 * 
	 * @param     string $naam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ProvinciePeer::NAAM, $naam, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 * 
	 * @param     string|array $deletedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(ProvinciePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(ProvinciePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ProvinciePeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related Organisatie object
	 *
	 * @param     Organisatie $organisatie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function filterByOrganisatie($organisatie, $comparison = null)
	{
		return $this
			->addUsingAlias(ProvinciePeer::ID, $organisatie->getProvincieId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Organisatie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function joinOrganisatie($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useOrganisatieQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinOrganisatie($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Organisatie', 'OrganisatieQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Provincie $provincie Object to remove from the list of results
	 *
	 * @return    ProvincieQuery The current query, for fluid interface
	 */
	public function prune($provincie = null)
	{
		if ($provincie) {
			$this->addUsingAlias(ProvinciePeer::ID, $provincie->getId(), Criteria::NOT_EQUAL);
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
		if (ProvincieQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(ProvinciePeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			ProvinciePeer::enableSoftDelete();
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
		if (ProvincieQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
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
	 * @see ProvincieQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return ProvincieQuery The current query, for fuid interface
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
		return ProvinciePeer::doForceDelete($this, $con);
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
		return ProvinciePeer::doForceDeleteAll($con);}
	
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

} // BaseProvincieQuery
