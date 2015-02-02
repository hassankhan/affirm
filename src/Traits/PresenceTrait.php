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

    public function _empty($value)
    {
        return empty($value);
    }

    public function _truthy($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function _falsy($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
    }

    public function _space($value)
    {
        return ctype_space($value);
    }

}
