<?php declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predicate\Framework;

/**
 * Opaque predicate that is always false
 *
 * This predicate evaluates containing predicate but always returns a false result.
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package Framework\Framework
 * @since 1.0
 */
final class FalseP implements Predicate
{
    /**
     * @var Predicate
     */
    private $predicate;

    /**
     * @param Predicate $predicate
     */
    public function __construct(Predicate $predicate = null)
    {
        $this->predicate = $predicate;
    }

    /**
     * @inheritdoc
     */
    public function __invoke(...$args): bool
    {
        if ($this->predicate !== null) {
            call_user_func_array($this->predicate, $args);
        }

        return false;
    }
}
