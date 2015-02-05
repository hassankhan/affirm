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
     * @return boolean True if valid boolean, false otherwise
     */
    public function _boolean($boolean)
    {
        return is_bool($boolean);
    }

    /**
     * Checks if `$float` is a float
     *
     * @param  mixed   $float
     *
     * @return boolean True if valid, false otherwise
     */
    public function _float($float)
    {
        return (bool) filter_var($float, FILTER_VALIDATE_FLOAT);
    }

    /**
     * Checks if `$integer` is an integer
     *
     * @param  mixed   $integer
     *
     * @return boolean True if valid, false otherwise
     */
    public function _integer($integer)
    {
        return (bool) filter_var($integer, FILTER_VALIDATE_INT);
    }

    /**
     * Checks if `$array` is a valid array
     *
     * @param  mixed   $array
     *
     * @return boolean True if valid array, false otherwise
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
     * @return boolean True if valid date, false otherwise
     *
     * @see    http://php.net/manual/en/class.datetime.php
     */
    public function _date($date)
    {
        try {
            new DateTime($date);
            return true;
        }
        catch (\Exception $e) {
            // We don't want to throw an exception, instead return `false`
        }
        return false;
    }

    /**
     * Checks if `$function` is a valid callable function
     *
     * @param  mixed   $function
     *
     * @return boolean True if valid callable function, false otherwise
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
     * @return boolean True if NaN, false otherwise
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
     * @return boolean True if null, false otherwise
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
     * @return boolean True if valid number, false otherwise
     */
    public function _number($number)
    {
        return ctype_digit($number);
    }

    /**
     * Checks if `$number` is a valid number or numeric string
     *
     * @param  mixed   $number
     *
     * @return boolean True if valid number, false otherwise
     */
    public function _numeric($number)
    {
        return is_numeric($number);
    }

    /**
     * Checks if `$pattern` is a valid regular expression. If it is not, an
     * E_WARNING will be generated
     *
     * @param  string  $pattern
     *
     * @return boolean True if valid regular expression, false otherwise
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
     * @return boolean True if valid string, false otherwise
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
     * @return boolean True if valid character, false otherwise
     */
    public function _char($char)
    {
        return ctype_alpha($char);
    }

    /**
     * Checks if `$value` is undefined. This will also trigger an E_NOTICE
     * about an undefined variable, too
     *
     * @param  mixed   $value
     *
     * @return boolean True if undefined, false otherwise
     */
    public function _undefined($value)
    {
        return !isset($value);
    }

    /**
     * Checks if `$object1` is the same type as `$object2`
     *
     * @param  mixed   $object1
     * @param  mixed   $object2
     *
     * @return boolean True if same type, false otherwise
     */
    public function _sameType($object1, $object2)
    {
        return gettype($object1) === gettype($object2);
    }

    /**
     * Checks if `$object` is an object
     *
     * @param  mixed   $object
     *
     * @return boolean True if object, false otherwise
     */
    public function _object($object)
    {
        return is_object($object);
    }

    /**
     * Checks if `$scalar` is a scalar
     *
     * @param  mixed   $scalar
     *
     * @return boolean True if scalar, false otherwise
     */
    public function _scalar($scalar)
    {
        return is_scalar($scalar);
    }

    /**
     * Checks if `$json` is a JSON string
     *
     * @param  string  $json
     *
     * @return boolean True if JSON string, false otherwise
     */
    public function _json($json)
    {
        return json_decode($json) !== null && json_last_error() === JSON_ERROR_NONE;
    }

}
