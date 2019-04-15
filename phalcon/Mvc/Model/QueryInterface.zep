
/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Mvc\Model;

use Phalcon\Mvc\ModelInterface;

/**
 * Phalcon\Mvc\Model\QueryInterface
 *
 * Interface for Phalcon\Mvc\Model\Query
 */
interface QueryInterface
{
    /**
     * Sets the cache parameters of the query
     */
    public function cache(array cacheOptions) -> <QueryInterface>;

    /**
     * Executes a parsed PHQL statement
     *
     * @param array bindParams
     * @param array bindTypes
     * @return mixed
     */
    public function execute(bindParams = null, bindTypes = null);

    /**
     * Returns default bind params
     */
    public function getBindParams() -> array;

    /**
     * Returns the current cache options
     */
    public function getCacheOptions() -> array;

    /**
     * Returns default bind types
     */
    public function getBindTypes() -> array;

    /**
     * Returns the SQL to be generated by the internal PHQL (only works in SELECT statements)
     */
    public function getSql() -> array;

    /**
     * Executes the query returning the first result
     *
     * @param array bindParams
     * @param array bindTypes
     */
    public function getSingleResult(var bindParams = null, var bindTypes = null) -> <ModelInterface>;

    /**
     * Check if the query is programmed to get only the first row in the resultset
     */
    public function getUniqueRow() -> bool;

    /**
     * Parses the intermediate code produced by Phalcon\Mvc\Model\Query\Lang generating another
     * intermediate representation that could be executed by Phalcon\Mvc\Model\Query
     */
    public function parse() -> array;

    /**
     * Set default bind parameters
     */
    public function setBindParams(array! bindParams, bool merge = false) -> <QueryInterface>;

    /**
     * Set default bind parameters
     */
    public function setBindTypes(array! bindTypes, bool merge = false) -> <QueryInterface>;

    /**
     * Set SHARED LOCK clause
     */
    public function setSharedLock(bool sharedLock = false) -> <QueryInterface>;

    /**
     * Tells to the query if only the first row in the resultset must be returned
     */
    public function setUniqueRow(bool uniqueRow) -> <QueryInterface>;
}
