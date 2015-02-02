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
     * @group  type
     */
    public function testIsBoolean()
    {
        $actual = $this->object->_boolean(true);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_array()
     * @group  type
     */
    public function testIsArray()
    {
        $actual = $this->object->_array(['array']);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_date()
     * @group  type
     */
    public function testIsDate()
    {
        $actual = $this->object->_date('2000-00-00');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_function()
     * @group  type
     */
    public function testIsFunction()
    {
        $function = function() { return; };
        $actual = $this->object->_function($function);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_null()
     * @group  type
     */
    public function testIsNull()
    {
        $actual = $this->object->_null(NULL);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_number()
     * @group  type
     */
    public function testIsNumber()
    {
        $actual = $this->object->_number('5');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_regexp()
     * @group  type
     */
    public function testIsRegexp()
    {
        $actual = $this->object->_regexp('#(.*)#');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_string()
     * @group  type
     */
    public function testIsString()
    {
        $actual = $this->object->_string('string');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_boolean()
     * @group  type
     */
    public function testIsInvalidBoolean()
    {
        $actual = $this->object->_boolean('notaboolean');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\TypeTrait::_date()
     * @group  type
     */
    public function testIsInvalidDate()
    {
        $actual = $this->object->_date('hahahaha');
        $this->assertFalse($actual);
    }

}
