<?php

namespace Affirm\Traits;

/**
 * This trait holds all array-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait ArrayTrait
{

    /**
     * Checks if `$needle` is in `$haystack`
     *
     * @param  mixed    $needle
     * @param  array    $haystack
     *
     * @return boolean  True if valid, false otherwise
     */
    public function _hasKey($haystack, $needle)
    {
        return array_key_exists($haystack, $needle);
    }

    /**
     * Checks if `$needle` is in `$haystack`
     *
     * @param  array    $haystack
     * @param  mixed    $needle
     *
     * @return boolean  True if valid, false otherwise
     */
    public function _inArray($haystack, $needle)
    {
        return in_array($needle, $haystack);
    }

    /**
     * Checks if `$array` is sorted
     *
     * @param  array    $array
     *
     * @return boolean  True if valid, false otherwise
     */
    public function _sorted($array)
    {
        $copyArray = $array;
        sort($array);
        return $array === $copyArray;
    }

    /**
     * Checks if `$countable` is of length `$count`
     *
     * @param  array    $countable
     * @param  int      $count
     *
     * @return boolean  True if equal, false otherwise
     */
    public function _count($countable, $count)
    {
        return count($countable) === $count;
    }

}
