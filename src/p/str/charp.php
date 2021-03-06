<?php

declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace p\str;

/**
 * Predicate that x is a char
 *
 * Example of usage:
 * <pre>
<<<<<<< HEAD
 * p\str\charp('H'); // true
 * p\str\charp('Hello'); // false
=======
 * \p\str\charp('H'); // true
 * \p\str\charp('Hello'); // false
>>>>>>> 12539ee8105ce72c812f56059a239d8c706ce9b6
 * </pre>
 *
 * @author Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 * @package p
 * @since 1.0
 * @param mixed $x Predicate argument
 * @return bool May be true or false depending on the x argument
 */
function charp($x): bool
{
    return true === is_string($x) && 1 === mb_strlen($x);
}
