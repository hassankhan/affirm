<?php

namespace Affirm\Traits;

/**
 * This trait holds all presence-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait PresenceTrait
{

    /**
     * Checks if `$value` is empty
     *
     * @param  mixed   $value
     *
     * @return boolean True if valid, false otherwise
     */
    public function _empty($value)
    {
        return empty($value);
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

    /**
     * Checks if `$string` is whitespace
     *
     * @param  string  $string
     *
     * @return boolean True if valid, false otherwise
     */
    public function _space($string)
    {
        return ctype_space($string);
    }

}
