<?php

namespace Affirm;

use Affirm\Traits\TypeTrait;
use Affirm\Traits\PresenceTrait;
use Affirm\Traits\RegexpTrait;
use Affirm\Traits\StringTrait;
use Affirm\Traits\ObjectTrait;

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
    use RegexpTrait;
    use StringTrait;
    use ObjectTrait;

    /**
     * An array that holds all values to be filtered
     *
     * @var array
     */
    protected $values;

    protected $notFlag;

    /**
     * Create a new Affirm instance
     */
    public function __construct()
    {
        $this->values  = [];
        // $this->notFlag = '';
        return $this;
    }

    /**
     * This method is how you add a value to be 'affirmed'
     *
     * @param  string|array|callable  $values
     *
     * @return Affirm\Affirm
     */
    public function is($value)
    {
        $this->values[] = $value;
        return $this;
    }

    /**
     * This method is how you add values to be 'affirmed'
     *
     * @param  string|array|callable  $values
     *
     * @return Affirm\Affirm
     */
    public function are()
    {
        $this->values = array_merge($this->values, func_get_args());
        return $this;
    }

    /**
     * Sets `$this->notFlag = true`
     *
     * @return Affirm\Affirm
     */
    public function not()
    {
        $this->notFlag = true;
        return $this;
    }

    /**
     * Sets `$this->anyFlag = true`
     *
     * @return Affirm\Affirm
     */
    public function any()
    {
        $this->anyFlag = true;
        return $this;
    }

    /**
     * Sets `$this->allFlag = true`
     *
     * @return Affirm\Affirm
     */
    public function all()
    {
        $this->allFlag = true;
        return $this;
    }

    /**
     * Returns all values to be 'affirmed'
     *
     * @return array
     */
    public function values()
    {
        return $this->values;
    }

    /**
     * This method checks to see if `$name` exists as a valid method (in a trait
     * or otherwise). Then, all values  in `$this->values` are run against the
     * chosen filter.
     *
     * @todo   Fix up
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
                return $this->notFlag
                    ? !call_user_func_array([$this, "_$name"], $args)
                    : call_user_func_array([$this, "_$name"], $args);
            }

            /* Hacky */
            $result = true;
            foreach ($this->values as $value) {
                $args   = array_merge([$value], $arguments);
                $result = call_user_func_array([$this, "_$name"], $args);
            }
            return $this->notFlag
                ? !$result
                : $result;
        }

        throw new \Exception("Method $name doesn't exist");
    }

}
