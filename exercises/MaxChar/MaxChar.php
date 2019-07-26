<?php

declare(strict_types=1);

namespace Exercises\MaxChar;

/**
 * Find the most used character.
 *
 //* @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    /**
     * @param string $string
     *
     * @return string
     */
    public static function get(string $string): string
    {
        $array = str_split($string);
        $count = 0;
        $result = '';
        foreach ($array as $value) {
            $newCount = substr_count($string, $value);
            if ($newCount > $count) {
                $count = $newCount;
                $result = $value;
            }
        }

        return $result;
    }
}
