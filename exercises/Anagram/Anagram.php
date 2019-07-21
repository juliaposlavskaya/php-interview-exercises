<?php

declare(strict_types=1);

namespace Exercises\Anagram;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 //* @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    /**
     * @param string $first
     * @param string $second
     *
     * @return bool
     */
    public static function check1(string $first, string $second): bool
    {
        $firstArr = str_split(mb_strtolower($first));
        $secondArr = str_split(mb_strtolower($second));

        $flag = true;
        foreach ($firstArr as $f) {
            if (!in_array($f, $secondArr)) {
                $flag = false;
            }
        }

        return $flag;
    }

    /**
     * @param string $first
     * @param string $second
     *
     * @return bool
     */
    public static function check(string $first, string $second): bool
    {
        $firstArr = str_split(mb_strtolower($first));
        $secondArr = str_split(mb_strtolower($second));

        sort($firstArr);
        sort($secondArr);

        return $firstArr == $secondArr;
    }
}
