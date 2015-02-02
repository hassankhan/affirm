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

    /**
     * Checks if `$boolean` is a valid boolean
     *
     * @param  mixed   $boolean
     *
     * @return boolean True if valid, false otherwise
     */
    public function _boolean($boolean)
    {
        return is_bool($boolean);
    }

    /**
     * Checks if `$array` is a valid array
     *
     * @param  mixed   $array
     *
     * @return boolean True if valid, false otherwise
     */
    public function _array($array)
    {
        return is_array($array);
    }

    /**
     * Checks if `$date` is a valid date
     *
     * @param  string  $date
     *
     * @return boolean True if valid, false otherwise
     *
     * @see    http://php.net/manual/en/class.datetime.php
     */
    public function _date($date)
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
     * Checks if `$function` is a valid callable function
     *
     * @param  mixed   $function
     *
     * @return boolean True if valid, false otherwise
     */
    public function _function($function)
    {
        return is_callable($function);
    }

    /**
     * Checks if `$notNumber` is NaN
     *
     * @param  mixed   $notNumber
     *
     * @return boolean True if valid, false otherwise
     */
    public function _nan($notNumber)
    {
        return is_nan($notNumber);
    }

    /**
     * Checks if `$value` is null
     *
     * @param  mixed   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _null($value)
    {
        return empty($value);
    }

    /**
     * Checks if `$number` is a valid number
     *
     * @param  string  $number
     *
     * @return boolean True if valid, false otherwise
     */
    public function _number($number)
    {
        return ctype_digit($number);
    }

    /**
     * Checks if `$pattern` is a valid regular expression
     *
     * @param  string  $pattern
     *
     * @return boolean True if valid, false otherwise
     *
     * @see    http://stackoverflow.com/a/12941133/465273
     */
    public function _regexp($pattern)
    {
        return preg_match($pattern, null) === false
            ? false
            : true;
    }

    /**
     * Checks if `$string` is a valid string
     *
     * @param  mixed   $string
     *
     * @return boolean True if valid, false otherwise
     */
    public function _string($string)
    {
        return is_string($string);
    }

    /**
     * Checks if `$char` is a valid string
     *
     * @param  mixed   $char
     *
     * @return boolean True if valid, false otherwise
     */
    public function _char($char)
    {
        return ctype_alpha($char);
    }

    /**
     * Checks if `$value` is undefined. Usually this will also trigger an
     * E_NOTICE about an undefined variable, too.
     *
     * @param  mixed   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _undefined($value)
    {
        return !array_key_exists($value, get_defined_vars());
    }

    /**
     * Checks if `$object1` is the same type as `$object2`
     *
     * @param  mixed   $object1
     * @param  mixed   $object2
     *
     * @return boolean True if valid, false otherwise
     */
    public function _sameType($object1, $object2)
    {
        return gettype($object1) === gettype($object2);
    }

}
