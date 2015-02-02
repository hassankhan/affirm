<?php

namespace Affirm\Traits;

use DateTime;

/**
 * This trait holds all type-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait TypeTrait
{

    protected function _boolean($boolean)
    {
        return is_bool($boolean);
    }

    protected function _array($array)
    {
        return is_array($array);
    }

    /**
     * Checks for a valid date
     *
     * @param  string  $value A valid date format
     *
     * @return boolean True if valid, false otherwise
     */
    protected function _date($date)
    {
        try {
            $datetime = new DateTime($date);
            return true;
        }
        catch (\Exception $e) {
        }
        return false;
    }

    /**
     * Checks for a valid callable function
     *
     * @param  array|callable $value
     *
     * @return boolean        True if valid, false otherwise
     */
    protected function _function($function)
    {
        return is_callable($function);
    }

    protected function _null($value)
    {
        return empty($value);
    }

    protected function _number($number)
    {
        return ctype_digit($number);
    }

    /**
     * Checks for a valid regular expression
     *
     * @param  string  $pattern
     *
     * @return boolean True if valid, false otherwise
     *
     * @see http://stackoverflow.com/a/12941133/465273
     */
    protected function _regexp($pattern)
    {
        return preg_match($pattern, null) === false
            ? false
            : true;
    }

    protected function _string($value)
    {
        return is_string($value);
    }

}
