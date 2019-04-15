<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Db\Adapter\Pdo\Postgresql;

use IntegrationTester;
use Phalcon\Db\Column;
use Phalcon\Test\Fixtures\Traits\Db\PostgresqlTrait;
use Phalcon\Test\Fixtures\Traits\DiTrait;

/**
 * Class DescribeColumnsCest
 */
class DescribeColumnsCest
{
    use DiTrait;
    use PostgresqlTrait;

    /**
     * Tests Phalcon\Db\Adapter\Pdo\Postgresql :: describeColumns()
     *
     * @param IntegrationTester $I
     *
     * @issue  https://github.com/phalcon/phalcon-devtools/issues/853
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2016-09-28
     */
    public function dbAdapterPdoPostgresqlDescribeColumns(IntegrationTester $I)
    {
        $I->wantToTest("Db\Adapter\Pdo\Postgresql - describeColumns()");
        $expected = [
            Column::__set_state(
                [
                    'columnName'    => 'id',
                    'schemaName'    => null,
                    'type'          => 14,
                    'typeReference' => -1,
                    'typeValues'    => null,
                    'isNumeric'     => true,
                    'size'          => 0,
                    'scale'         => 0,
                    'default'       => "nextval('images_id_seq'::regclass)",
                    'unsigned'      => false,
                    'notNull'       => true,
                    'primary'       => false,
                    'autoIncrement' => true,
                    'first'         => true,
                    'after'         => null,
                    'bindType'      => 1,
                ]
            ),
            Column::__set_state(
                [
                    'columnName'    => 'base64',
                    'schemaName'    => null,
                    'type'          => 6,
                    'typeReference' => -1,
                    'typeValues'    => null,
                    'isNumeric'     => false,
                    'size'          => null,
                    'scale'         => 0,
                    'default'       => null,
                    'unsigned'      => false,
                    'notNull'       => false,
                    'primary'       => false,
                    'autoIncrement' => false,
                    'first'         => false,
                    'after'         => 'id',
                    'bindType'      => 2,
                ]
            ),
        ];

        $actual = $this->connection->describeColumns('images');
        $I->assertEquals($expected, $actual);

        $actual = $this->connection->describeColumns('images', env('DATA_POSTGRES_SCHEMA'));
        $I->assertEquals($expected, $actual);
    }
}
