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

namespace Phalcon\Test\Unit\Helper\Str;

use Phalcon\Helper\Str;
use UnitTester;

/**
 * Class CountVowelsCest
 */
class CountVowelsCest
{
    /**
     * Tests Phalcon\Helper\Str :: countVowels()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-04-06
     */
    public function helperStrCountVowels(UnitTester $I)
    {
        $I->wantToTest('Helper\Str - countVowels()');

        $source   = 'Luke, I am your father!';
        $expected = 8;
        $actual   = Str::countVowels($source);
        $I->assertEquals($expected, $actual);

        $source   = '';
        $expected = 0;
        $actual   = Str::countVowels($source);
        $I->assertEquals($expected, $actual);
    }
}
