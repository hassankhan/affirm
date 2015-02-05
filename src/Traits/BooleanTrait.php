<?php

namespace Affirm\Traits;

/**
 * This trait holds all boolean-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait BooleanTrait
{

    /**
     * Checks if `$value` is true
     *
     * @param  mixed    $value
     *
     * @return boolean  True if true, false otherwise
     */
    public function _true($value)
    {
        return $value === true;
    }

    /**
     * Checks if `$value` is false
     *
     * @param  mixed    $value
     *
     * @return boolean  True if false, false otherwise
     */
    public function _false($value)
    {
        return $value === false;
    }

    /**
     * Checks if `$value` is truthy
     *
     * @param  mixed   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _truthy($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    /**
     * Checks if `$value` is falsy
     *
     * @param  mixed   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _falsy($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

}
