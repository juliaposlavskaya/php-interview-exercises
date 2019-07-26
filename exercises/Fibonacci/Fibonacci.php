<?php

declare(strict_types=1);

namespace Exercises\Fibonacci;

/**
 * The fibonacci series is a series of numbers where
 * each consecutive number is the sum of the previous two.
 * For example [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 *
 //* @method static int get(int $index)
 * @example Fibonacci::get(7) === 13
 */
final class Fibonacci
{
    /**
     * @param int $index
     *
     * @return int
     */
    public static function get(int $index): int
    {
        if ($index < 2) {
            return $index;
        }
        return self::get($index - 1) + self::get($index - 2);
    }
}
