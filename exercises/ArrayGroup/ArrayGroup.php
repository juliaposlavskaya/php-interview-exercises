<?php

declare(strict_types=1);

namespace Exercises\ArrayGroup;

/**
 * Divide the array into many sub-arrays,
 * where each subarray is at most of group size.
 *
 // * @method static any[] group(any[] $array, int $size)
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
 * @example ArrayGroup::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
 */
final class ArrayGroup
{
    /**
     * @param array $array
     * @param int $size
     *
     * @return array
     */
    public static function group1(array $array, int $size): array
    {
        return array_chunk($array, $size);
    }

    /**
     * @param array $array
     * @param int $size
     *
     * @return array
     */
    public static function group(array $array, int $size): array
    {
        $result = [];
        foreach ($array as $key => $a) {
            $tmp[] = $a;
            if (count($tmp) == $size || $key + 1 == count($array)) {
                $result[] = $tmp;
                $tmp = [];
            }
        }

        return $result;
    }
}
