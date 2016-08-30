<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Functor\Predicate;

/**
 * IsIntP test
 *
 * @see IsIntP
 * @coversDefaultClass Functor\Predicate\IsIntP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Functor\Predicate
 * @since 1.0
 */
class IsIntPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertTrue((new IsIntP())(1));
        $this->assertFalse((new IsIntP())('1'));
        $this->assertFalse((new IsIntP())(1.0));
    }
}
