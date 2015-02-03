<?php

namespace Affirm;

use Affirm\Affirm;

/**
 * Affirm proxy class
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
class AffirmProxy
{

    /**
     * @var boolean
     */
    protected static $isInitialized = false;

    /**
     * @var Affirm\Affirm
     */
    protected static $instance;

    /**
     * Since we don't need a constructor for the proxy class, we just set its
     * visibility to private
     */
    private function __construct() {}

    /**
     * This method checks to see if method `$name` exists on `static::$instance`
     *
     * @param  string $name
     * @param  mixed  $arguments
     *
     * @return mixed
     *
     * @throws Exception If an invalid method is called
     */
    public static function __callStatic($name, $arguments)
    {
        if (!static::$isInitialized) {
            static::$instance = new Affirm();
        }

        if (method_exists(static::$instance, $name)) {
            return call_user_func_array([static::$instance, $name], $arguments);
        }
    }

}
