<?php

namespace Affirm\Traits;

/**
 * This trait holds all object-related methods
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
trait ObjectTrait
{

    public function _propertyCount($object, $amount)
    {
        return count(get_object_vars($object)) === $amount;
    }

    public function _propertyDefined($object, $property)
    {
        return property_exists($object, $property);
    }


}
