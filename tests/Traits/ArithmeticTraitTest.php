<?php

namespace Affirm\Traits\Test;

class ArithmeticTraitTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Affirm\Affirm
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\ObjectTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_equal()
     * @group  arithmetic
     */
    public function testIsEqual()
    {
        $actual = $this->object->_equal(25, 25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_even()
     * @group  arithmetic
     */
    public function testIsEven()
    {
        $actual = $this->object->_even(24);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_odd()
     * @group  arithmetic
     */
    public function testIsOdd()
    {
        $actual = $this->object->_odd(25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_positive()
     * @group  arithmetic
     */
    public function testIsPositive()
    {
        $actual = $this->object->_positive(25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_negative()
     * @group  arithmetic
     */
    public function testIsNegative()
    {
        $actual = $this->object->_negative(-25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_above()
     * @group  arithmetic
     */
    public function testIsAbove()
    {
        $actual = $this->object->_above(25, 10);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_under()
     * @group  arithmetic
     */
    public function testIsUnder()
    {
        $actual = $this->object->_under(25, 50);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_within()
     * @group  arithmetic
     */
    public function testIsWithin()
    {
        $actual = $this->object->_within(25, 10, 50);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_float()
     * @group  arithmetic
     */
    public function testIsFloat()
    {
        $actual = $this->object->_float(0.25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_integer()
     * @group  arithmetic
     */
    public function testIsInteger()
    {
        $actual = $this->object->_integer(50);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_finite()
     * @group  arithmetic
     */
    public function testIsFinite()
    {
        $actual = $this->object->_finite(25);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ArithmeticTrait::_infinite()
     * @group  arithmetic
     */
    public function testIsInfinite()
    {
        $actual = $this->object->_infinite(INF);
        $this->assertTrue($actual);
    }

}
