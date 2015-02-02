<?php

namespace Affirm;

use Affirm\Traits\TypeTrait;
use Affirm\Traits\PresenceTrait;
use Affirm\Traits\RegexpTrait;
use Affirm\Traits\StringTrait;
use Affirm\Traits\ArithmeticTrait;
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
    use ArithmeticTrait;
    use ObjectTrait;

    /**
     * An array that holds all values to be filtered
     *
     * @var array
     */
    protected $values;

    /**
     * A boolean that is set true for the 'not' modifier
     *
     * @var boolean
     */
    protected $notFlag;

    /**
     * A boolean that is set true for the 'any' modifier
     *
     * @var boolean
     */
    protected $anyFlag;

    /**
     * Create a new Affirm instance
     */
    public function __construct()
    {
        $this->values = [];
    }

    /**
     * This method is how you add a value to be 'affirmed'
     *
     * @param  mixed         $value
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
     * Returns all values yet to be 'affirmed'
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
     * @param  string $name
     * @param  mixed  $arguments
     *
     * @return mixed
     *
     * @throws Exception If an invalid method is called
     */
    public function __call($name, $arguments)
    {
        if (method_exists($this, "_$name")) {
            return  $this->processValues($name, $arguments);
        }
        throw new \Exception("Method $name doesn't exist");
    }

    /**
     * Internal method that processes `$this->values` by sending each element to
     * `$this->_$name`. It also takes any set flags into consideration.
     *
     * @param  string $name
     * @param  array  $arguments
     *
     * @return bool
     */
    private function processValues($name, $arguments)
    {
        // Loop through `$this->values` and get `$result`
        foreach ($this->values as $value) {
            $args   = array_merge([$value], $arguments);
            $result = call_user_func_array([$this, "_$name"], $args);

            // If `$this->anyFlag` is set, and we've found a good `$result`,
            // break out of the loop and return it
            if ($this->anyFlag && $result === true) {
                break;
            }
        }
        // If `$this->notFlag` is set, then simply invert `$result` and return
        return $this->notFlag
            ? !$result
            : $result;
    }

}
