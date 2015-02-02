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

    public function _include($string, $substring)
    {
        return substr_count($string, $substring) > 0
            ? true
            : false;
        // return (bool) strpos(haystack, needle);
    }

    public function _upperCase($string)
    {
        return ctype_upper($string);
    }

    public function _lowerCase($string)
    {
        return ctype_lower($string);
    }

    /**
     * Checks to see if `$string` begins with `$substring`
     *
     * @param  string  $string
     * @param  string  $substring
     *
     * @return boolean
     *
     * @see http://stackoverflow.com/a/10473026/465273
     */
    public function _startsWith($string, $substring)
    {
        return $substring === ""
            || strrpos($string, $substring, -strlen($string)) !== false;
        // return;
    }

    /**
     * Checks to see if `$string` ends with `$substring`
     *
     * @param  string  $string
     * @param  string  $substring
     *
     * @return boolean
     *
     * @see http://stackoverflow.com/a/10473026/465273
     */
    public function _endsWith($string, $substring)
    {
        return $substring === ''
            || strpos($string, $substring, strlen($string) - strlen($substring)) !== false;
        // return;
    }

    public function _capitalized($string)
    {
        return $string === ucfirst($string);
    }


}
