<?php

declare(strict_types=1);

namespace Exercises\Ladder;

/**
 * Print a ladder.
 *
 //* @method static void print(int $level)
 * @example Ladder::print(3)  -> '#  '
 *                               '## '
 *                               '###'
 */
final class Ladder
{
    /**
     * @param int $level
     */
    public static function print(int $level): void
    {
        for ($row = 0; $row < $level; $row++) {
            $string  = '';
            for ($column = 0; $column < $level; $column++) {
                $string .= $column >= $row ? '#' : ' ';
            }
            if ($row == 0) {
                echo $string;
            } else {
                echo $string, PHP_EOL;
            }
        }
    }
}
