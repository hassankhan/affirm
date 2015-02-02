<?php

namespace Affirm\Traits\Test;

class TypeTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\TypeTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_boolean()
     */
    public function testIsBoolean()
    {
        $actual = $this->object->_boolean(true);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_boolean()
     */
    public function testIsInvalidBoolean()
    {
        $actual = $this->object->_boolean('notaboolean');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_array()
     */
    public function testIsArray()
    {
        $actual = $this->object->_array(['array']);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_array()
     */
    public function testIsInvalidArray()
    {
        $actual = $this->object->_array('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_date()
     */
    public function testIsDate()
    {
        $actual = $this->object->_date('2000-00-00');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_date()
     */
    public function testIsInvalidDate()
    {
        $actual = $this->object->_date('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_function()
     */
    public function testIsFunction()
    {
        $function = function() { return; };
        $actual = $this->object->_function($function);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_function()
     */
    public function testIsInvalidFunction()
    {
        $actual = $this->object->_function('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_nan()
     */
    public function testIsNan()
    {
        $actual = $this->object->_nan(NAN);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_nan()
     */
    public function testIsNotNan()
    {
        $actual = $this->object->_nan(1);
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_null()
     */
    public function testIsNull()
    {
        $actual = $this->object->_null(NULL);
        $this->assertTrue($actual);
    }
/**
     * @covers Affirm\Traits\TypeTrait::_null()
     */
    public function testIsNotDate()
    {
        $actual = $this->object->_null('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_number()
     */
    public function testIsNumber()
    {
        $actual = $this->object->_number('5');
        $this->assertTrue($actual);
    }
/**
     * @covers Affirm\Traits\TypeTrait::_number()
     */
    public function testIsInvalidNumber()
    {
        $actual = $this->object->_number('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_regexp()
     */
    public function testIsRegexp()
    {
        $actual = $this->object->_regexp('#(.*)#');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_regexp()
     */
    public function testIsInvalidRegexp()
    {
        @$actual = $this->object->_regexp('hahahaha');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_string()
     */
    public function testIsString()
    {
        $actual = $this->object->_string('string');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_string()
     */
    public function testIsInvalidString()
    {
        $actual = $this->object->_string(123);
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_char()
     */
    public function testIsChar()
    {
        $actual = $this->object->_char('s');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_char()
     */
    public function testIsInvalidChar()
    {
        $actual = $this->object->_char(1);
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_undefined()
     */
    public function testIsUndefined()
    {
        @$actual = $this->object->_undefined($newVar);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_undefined()
     */
    public function testIsNotUndefined()
    {
        $newVar = 11;
        $actual = $this->object->_undefined($newVar);
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_sameType()
     */
    public function testIsSameType()
    {
        @$actual = $this->object->_sameType(10, 1);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_sameType()
     */
    public function testIsNotSameType()
    {
        @$actual = $this->object->_sameType('10', 1);
        $this->assertFalse($actual);
    }

}
