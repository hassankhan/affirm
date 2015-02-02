<?php

namespace Affirm\Traits;

use stdClass;
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

    /**
     * Checks if `$object` has `$amount` number of properties
     *
     * @param  mixed  $object
     * @param  int    $amount
     *
     * @return boolean  True if valid, false otherwise
     */
    public function _propertyCount($object, $amount)
    {
        return count(get_object_vars($object)) === $amount;
    }

    /**
     * Checks if `$object` has `$property`
     *
     * @param  mixed  $object
     * @param  string $property
     *
     * @return boolean  True if valid, false otherwise
     */
    public function _propertyDefined($object, $property)
    {
        return property_exists($object, $property);
    }

}
