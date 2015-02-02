<?php

namespace Affirm\Traits;

/**
 * Thia trait holds all arithmetic-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait ArithmeticTrait
{

    public function _equal($firstValue, $secondValue)
    {
        return $firstValue === $secondValue;
    }

    public function _even($value)
    {
        return $value % 2 === 0;
    }

    public function _odd($value)
    {
        return $value % 2 === 1;
    }

    public function _positive($value)
    {
        // echo $value;
        return $value > 0;
    }

    public function _negative($value)
    {
        return $value < 0;
    }

    public function _above($value, $min)
    {
        return $value > $min;
    }

    public function _under($value, $max)
    {
        return $value < $min;
    }

    public function _within($value, $min, $max)
    {
        return ($value > $min && $value < $max);
    }

    public function _decimal($value)
    {

    }

    public function _integer($value)
    {

    }

    public function _finite($value)
    {
        return is_finite($value);
    }

    public function _infinite($value)
    {
        return is_infinite($value);
    }

}
