<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predicate\Framework;

use Predicate as P;

/**
 * IfElseP test
 *
 * @see IfElseP
 * @coversDefaultClass Framework\Framework\IfElseP
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Framework\Framework
 * @since 1.0
 */
class IfElsePTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::__invoke()
     */
    public function testInvoke()
    {
        $this->assertFalse((new IfElseP(new TrueP, new FalseP, new TrueP()))(null));
        $this->assertTrue((new IfElseP(new FalseP, new FalseP, new TrueP()))(null));
    }
}
