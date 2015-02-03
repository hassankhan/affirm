<?php

namespace Affirm\Traits;

/**
 * This trait holds all arithmetic-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait ArithmeticTrait
{

    /**
     * Checks if `$firstValue` is equal to `$secondValue`
     *
     * @param  mixed   $firstValue
     * @param  mixed   $secondValue
     *
     * @return boolean True if valid, false otherwise
     */
    public function _equal($firstValue, $secondValue)
    {
        return $firstValue == $secondValue;
    }

    /**
     * Checks if `$firstValue` is the same as `$secondValue`
     *
     * @param  mixed   $firstValue
     * @param  mixed   $secondValue
     *
     * @return boolean True if valid, false otherwise
     */
    public function _same($firstValue, $secondValue)
    {
        return $firstValue === $secondValue;
    }

    /**
     * Checks if `$value` is an even number
     *
     * @param  int     $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _even($value)
    {
        return $value % 2 === 0;
    }

    /**
     * Checks if `$value` is an odd number
     *
     * @param  int     $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _odd($value)
    {
        return $value % 2 === 1;
    }

    /**
     * Checks if `$value` is a positive number
     *
     * @param  int     $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _positive($value)
    {
        return $value > 0;
    }

    /**
     * Checks if `$value`
     *
     * @param  int     $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _negative($value)
    {
        return $value < 0;
    }

    /**
     * Checks if `$value` is higher than `$min`
     *
     * @param  int     $value
     * @param  int     $min
     *
     * @return boolean True if valid, false otherwise
     */
    public function _above($value, $min)
    {
        return $value > $min;
    }

    /**
     * Checks if `$value` is lower than `$max`
     *
     * @param  int     $value
     * @param  int     $max
     *
     * @return boolean True if valid, false otherwise
     */
    public function _under($value, $max)
    {
        return $value < $max;
    }

    /**
     * Checks if `$value` is higher than `$min` but lower than `$max`
     *
     * @param  int     $value
     * @param  int     $min
     * @param  int     $max
     *
     * @return boolean True if valid, false otherwise
     */
    public function _within($value, $min, $max)
    {
        return ($value > $min && $value < $max);
    }

    /**
     * Checks if `$value` is a finite number
     *
     * @param  float   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _finite($value)
    {
        return is_finite($value);
    }

    /**
     * Checks if `$value` is an infinite number
     *
     * @param  float   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _infinite($value)
    {
        return is_infinite($value);
    }

}
