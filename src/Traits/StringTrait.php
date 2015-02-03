<?php

namespace Affirm\Traits;

/**
 * This trait holds all string-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait StringTrait
{

    /**
     * Checks if  `string` contains `$substring`
     *
     * @param  string  $string
     * @param  string  $substring
     *
     * @return boolean True if valid, false otherwise
     */
    public function _contains($string, $substring)
    {
        return substr_count($string, $substring) > 0
            ? true
            : false;
    }

    /**
     * Checks if `$string` is uppercase
     *
     * @param  string  $string
     *
     * @return boolean True if valid, false otherwise
     */
    public function _upperCase($string)
    {
        return ctype_upper($string);
    }

    /**
     * Checks if `$string` is lowercase
     *
     * @param  string  $string
     *
     * @return boolean True if valid, false otherwise
     */
    public function _lowerCase($string)
    {
        return ctype_lower($string);
    }

    /**
     * Checks if `$string` begins with `$substring`
     *
     * @param  string  $string
     * @param  string  $substring
     *
     * @return boolean
     *
     * @see    http://stackoverflow.com/a/10473026/465273
     */
    public function _startsWith($string, $substring)
    {
        return $substring === ""
            || strrpos($string, $substring, -strlen($string)) !== false;
    }

    /**
     * Checks if `$string` ends with `$substring`
     *
     * @param  string  $string
     * @param  string  $substring
     *
     * @return boolean
     *
     * @see    http://stackoverflow.com/a/10473026/465273
     */
    public function _endsWith($string, $substring)
    {
        return $substring === ''
            || strpos($string, $substring, strlen($string) - strlen($substring)) !== false;
    }

    /**
     * Checks if `$string` is capitalized
     *
     * @param  string  $string
     *
     * @return boolean True if valid, false otherwise
     */
    public function _capitalized($string)
    {
        return $string === ucfirst($string);
    }

}
