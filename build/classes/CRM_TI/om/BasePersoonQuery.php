<?php


/**
 * Base class that represents a query for the 'persoon' table.
 *
 * 
 *
 * @method     PersoonQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PersoonQuery orderByAchternaam($order = Criteria::ASC) Order by the achternaam column
 * @method     PersoonQuery orderByVoorletters($order = Criteria::ASC) Order by the voorletters column
 * @method     PersoonQuery orderByRoepnaam($order = Criteria::ASC) Order by the roepnaam column
 * @method     PersoonQuery orderByFunctie($order = Criteria::ASC) Order by the functie column
 * @method     PersoonQuery orderByGeslacht($order = Criteria::ASC) Order by the geslacht column
 * @method     PersoonQuery orderByActief($order = Criteria::ASC) Order by the actief column
 * @method     PersoonQuery orderByTelefoonPrimair($order = Criteria::ASC) Order by the telefoon_primair column
 * @method     PersoonQuery orderByTelefoonSecundair($order = Criteria::ASC) Order by the telefoon_secundair column
 * @method     PersoonQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     PersoonQuery orderByOrganisatieId($order = Criteria::ASC) Order by the organisatie_id column
 * @method     PersoonQuery orderByKerstkaart($order = Criteria::ASC) Order by the kerstkaart column
 * @method     PersoonQuery orderByMailing($order = Criteria::ASC) Order by the mailing column
 * @method     PersoonQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 *
 * @method     PersoonQuery groupById() Group by the id column
 * @method     PersoonQuery groupByAchternaam() Group by the achternaam column
 * @method     PersoonQuery groupByVoorletters() Group by the voorletters column
 * @method     PersoonQuery groupByRoepnaam() Group by the roepnaam column
 * @method     PersoonQuery groupByFunctie() Group by the functie column
 * @method     PersoonQuery groupByGeslacht() Group by the geslacht column
 * @method     PersoonQuery groupByActief() Group by the actief column
 * @method     PersoonQuery groupByTelefoonPrimair() Group by the telefoon_primair column
 * @method     PersoonQuery groupByTelefoonSecundair() Group by the telefoon_secundair column
 * @method     PersoonQuery groupByEmail() Group by the email column
 * @method     PersoonQuery groupByOrganisatieId() Group by the organisatie_id column
 * @method     PersoonQuery groupByKerstkaart() Group by the kerstkaart column
 * @method     PersoonQuery groupByMailing() Group by the mailing column
 * @method     PersoonQuery groupByDeletedAt() Group by the deleted_at column
 *
 * @method     PersoonQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PersoonQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PersoonQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PersoonQuery leftJoinOrganisatie($relationAlias = null) Adds a LEFT JOIN clause to the query using the Organisatie relation
 * @method     PersoonQuery rightJoinOrganisatie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Organisatie relation
 * @method     PersoonQuery innerJoinOrganisatie($relationAlias = null) Adds a INNER JOIN clause to the query using the Organisatie relation
 *
 * @method     PersoonQuery leftJoinContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the Contact relation
 * @method     PersoonQuery rightJoinContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Contact relation
 * @method     PersoonQuery innerJoinContact($relationAlias = null) Adds a INNER JOIN clause to the query using the Contact relation
 *
 * @method     Persoon findOne(PropelPDO $con = null) Return the first Persoon matching the query
 * @method     Persoon findOneOrCreate(PropelPDO $con = null) Return the first Persoon matching the query, or a new Persoon object populated from the query conditions when no match is found
 *
 * @method     Persoon findOneById(int $id) Return the first Persoon filtered by the id column
 * @method     Persoon findOneByAchternaam(string $achternaam) Return the first Persoon filtered by the achternaam column
 * @method     Persoon findOneByVoorletters(string $voorletters) Return the first Persoon filtered by the voorletters column
 * @method     Persoon findOneByRoepnaam(string $roepnaam) Return the first Persoon filtered by the roepnaam column
 * @method     Persoon findOneByFunctie(string $functie) Return the first Persoon filtered by the functie column
 * @method     Persoon findOneByGeslacht(boolean $geslacht) Return the first Persoon filtered by the geslacht column
 * @method     Persoon findOneByActief(boolean $actief) Return the first Persoon filtered by the actief column
 * @method     Persoon findOneByTelefoonPrimair(string $telefoon_primair) Return the first Persoon filtered by the telefoon_primair column
 * @method     Persoon findOneByTelefoonSecundair(string $telefoon_secundair) Return the first Persoon filtered by the telefoon_secundair column
 * @method     Persoon findOneByEmail(string $email) Return the first Persoon filtered by the email column
 * @method     Persoon findOneByOrganisatieId(int $organisatie_id) Return the first Persoon filtered by the organisatie_id column
 * @method     Persoon findOneByKerstkaart(boolean $kerstkaart) Return the first Persoon filtered by the kerstkaart column
 * @method     Persoon findOneByMailing(boolean $mailing) Return the first Persoon filtered by the mailing column
 * @method     Persoon findOneByDeletedAt(string $deleted_at) Return the first Persoon filtered by the deleted_at column
 *
 * @method     array findById(int $id) Return Persoon objects filtered by the id column
 * @method     array findByAchternaam(string $achternaam) Return Persoon objects filtered by the achternaam column
 * @method     array findByVoorletters(string $voorletters) Return Persoon objects filtered by the voorletters column
 * @method     array findByRoepnaam(string $roepnaam) Return Persoon objects filtered by the roepnaam column
 * @method     array findByFunctie(string $functie) Return Persoon objects filtered by the functie column
 * @method     array findByGeslacht(boolean $geslacht) Return Persoon objects filtered by the geslacht column
 * @method     array findByActief(boolean $actief) Return Persoon objects filtered by the actief column
 * @method     array findByTelefoonPrimair(string $telefoon_primair) Return Persoon objects filtered by the telefoon_primair column
 * @method     array findByTelefoonSecundair(string $telefoon_secundair) Return Persoon objects filtered by the telefoon_secundair column
 * @method     array findByEmail(string $email) Return Persoon objects filtered by the email column
 * @method     array findByOrganisatieId(int $organisatie_id) Return Persoon objects filtered by the organisatie_id column
 * @method     array findByKerstkaart(boolean $kerstkaart) Return Persoon objects filtered by the kerstkaart column
 * @method     array findByMailing(boolean $mailing) Return Persoon objects filtered by the mailing column
 * @method     array findByDeletedAt(string $deleted_at) Return Persoon objects filtered by the deleted_at column
 *
 * @package    propel.generator.CRM_TI.om
 */
abstract class BasePersoonQuery extends ModelCriteria
{

	// soft_delete behavior
	protected static $softDelete = true;
	protected $localSoftDelete = true;

	/**
	 * Initializes internal state of BasePersoonQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'CRM_TI', $modelName = 'Persoon', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PersoonQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PersoonQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PersoonQuery) {
			return $criteria;
		}
		$query = new PersoonQuery();
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
	 * @return    Persoon|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PersoonPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PersoonPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PersoonPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PersoonPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the achternaam column
	 * 
	 * @param     string $achternaam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PersoonPeer::ACHTERNAAM, $achternaam, $comparison);
	}

	/**
	 * Filter the query on the voorletters column
	 * 
	 * @param     string $voorletters The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByVoorletters($voorletters = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($voorletters)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $voorletters)) {
				$voorletters = str_replace('*', '%', $voorletters);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::VOORLETTERS, $voorletters, $comparison);
	}

	/**
	 * Filter the query on the roepnaam column
	 * 
	 * @param     string $roepnaam The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByRoepnaam($roepnaam = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($roepnaam)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $roepnaam)) {
				$roepnaam = str_replace('*', '%', $roepnaam);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::ROEPNAAM, $roepnaam, $comparison);
	}

	/**
	 * Filter the query on the functie column
	 * 
	 * @param     string $functie The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByFunctie($functie = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($functie)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $functie)) {
				$functie = str_replace('*', '%', $functie);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::FUNCTIE, $functie, $comparison);
	}

	/**
	 * Filter the query on the geslacht column
	 * 
	 * @param     boolean|string $geslacht The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByGeslacht($geslacht = null, $comparison = null)
	{
		if (is_string($geslacht)) {
			$geslacht = in_array(strtolower($geslacht), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(PersoonPeer::GESLACHT, $geslacht, $comparison);
	}

	/**
	 * Filter the query on the actief column
	 * 
	 * @param     boolean|string $actief The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByActief($actief = null, $comparison = null)
	{
		if (is_string($actief)) {
			$actief = in_array(strtolower($actief), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(PersoonPeer::ACTIEF, $actief, $comparison);
	}

	/**
	 * Filter the query on the telefoon_primair column
	 * 
	 * @param     string $telefoonPrimair The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByTelefoonPrimair($telefoonPrimair = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefoonPrimair)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefoonPrimair)) {
				$telefoonPrimair = str_replace('*', '%', $telefoonPrimair);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::TELEFOON_PRIMAIR, $telefoonPrimair, $comparison);
	}

	/**
	 * Filter the query on the telefoon_secundair column
	 * 
	 * @param     string $telefoonSecundair The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByTelefoonSecundair($telefoonSecundair = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telefoonSecundair)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telefoonSecundair)) {
				$telefoonSecundair = str_replace('*', '%', $telefoonSecundair);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::TELEFOON_SECUNDAIR, $telefoonSecundair, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PersoonPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the organisatie_id column
	 * 
	 * @param     int|array $organisatieId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByOrganisatieId($organisatieId = null, $comparison = null)
	{
		if (is_array($organisatieId)) {
			$useMinMax = false;
			if (isset($organisatieId['min'])) {
				$this->addUsingAlias(PersoonPeer::ORGANISATIE_ID, $organisatieId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($organisatieId['max'])) {
				$this->addUsingAlias(PersoonPeer::ORGANISATIE_ID, $organisatieId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersoonPeer::ORGANISATIE_ID, $organisatieId, $comparison);
	}

	/**
	 * Filter the query on the kerstkaart column
	 * 
	 * @param     boolean|string $kerstkaart The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByKerstkaart($kerstkaart = null, $comparison = null)
	{
		if (is_string($kerstkaart)) {
			$kerstkaart = in_array(strtolower($kerstkaart), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(PersoonPeer::KERSTKAART, $kerstkaart, $comparison);
	}

	/**
	 * Filter the query on the mailing column
	 * 
	 * @param     boolean|string $mailing The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByMailing($mailing = null, $comparison = null)
	{
		if (is_string($mailing)) {
			$mailing = in_array(strtolower($mailing), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(PersoonPeer::MAILING, $mailing, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 * 
	 * @param     string|array $deletedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(PersoonPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(PersoonPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PersoonPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query by a related Organisatie object
	 *
	 * @param     Organisatie $organisatie  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByOrganisatie($organisatie, $comparison = null)
	{
		return $this
			->addUsingAlias(PersoonPeer::ORGANISATIE_ID, $organisatie->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Organisatie relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersoonQuery The current query, for fluid interface
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
	 * Filter the query by a related Contact object
	 *
	 * @param     Contact $contact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function filterByContact($contact, $comparison = null)
	{
		return $this
			->addUsingAlias(PersoonPeer::ID, $contact->getPersoonId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Contact relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PersoonQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Persoon $persoon Object to remove from the list of results
	 *
	 * @return    PersoonQuery The current query, for fluid interface
	 */
	public function prune($persoon = null)
	{
		if ($persoon) {
			$this->addUsingAlias(PersoonPeer::ID, $persoon->getId(), Criteria::NOT_EQUAL);
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
		if (PersoonQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
			$this->addUsingAlias(PersoonPeer::DELETED_AT, null, Criteria::ISNULL);
		} else {
			PersoonPeer::enableSoftDelete();
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
		if (PersoonQuery::isSoftDeleteEnabled() && $this->localSoftDelete) {
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
	 * @see PersoonQuery::disableSoftDelete() to disable the filter for more than one query
	 *
	 * @return PersoonQuery The current query, for fuid interface
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
		return PersoonPeer::doForceDelete($this, $con);
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
		return PersoonPeer::doForceDeleteAll($con);}
	
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

} // BasePersoonQuery
