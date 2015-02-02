<?php

namespace Affirm;

use Affirm\Traits\TypeTrait;
use Affirm\Traits\PresenceTrait;
use Affirm\Traits\StringTrait;

/**
 * Affirm class
 *
 * @package    Affirm
 * @author     Hassan Khan <contact@hassankhan.me>
 * @link       https://github.com/hassankhan/affirm/
 * @license    MIT
 * @since      0.1
 */
class Affirm
{

    use TypeTrait;
    use PresenceTrait;
    use StringTrait;

    /**
     * An array that holds all values to be filtered
     *
     * @var array
     */
    protected $values;

    /**
     * Create a new Affirm instance
     */
    public function __construct()
    {
        $this->values = [];
        return $this;
    }

    /**
     * This method is how you add values to be 'affirmed'
     *
     * @param  string|array|callable  $values
     *
     * @return Affirm\Affirm
     */
    public function is($values)
    {
        $this->values[] = $values;
        return $this;
    }

    /**
     * Returns all values currently held
     *
     * @return array
     */
    public function values()
    {
        return $this->values;
    }

    /**
     * Use magic methods for the cool stuff
     *
     * @param  string $name
     * @param  mixed  $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this, "_$name")) {
            if (count($this->values) === 1) {
                $args = array_merge($this->values, $arguments);
                return call_user_func_array([$this, "_$name"], $args);
            }
        }

        throw new \Exception("Method $name doesn't exist");
    }

}
