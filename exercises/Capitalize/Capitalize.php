<?php

declare(strict_types=1);

namespace Exercises\Capitalize;

/**
 * Capitalize each word.
 *
// * @method static string get(string $string)
 * @example Capitalize::get('hello there') === 'Hello There'
 * @example Capitalize::get("hey, so it's working!") === "Hey, So It's Working!"
 */
final class Capitalize
{
    /**
     * @param string $string
     *
     * @return string
     */
    public static function get(string $string): string
    {
        $result = [];
        $worlds = explode(' ', $string);

        foreach ($worlds as $world) {
            $result[] = ucfirst($world);
        }

        return implode(' ', $result);
    }
}
