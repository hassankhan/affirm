<?php

namespace Affirm\Test;

class AffirmTest extends \PHPUnit_Framework_TestCase
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
        $this->object = new \Affirm\Affirm();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Affirm::_boolean()
     */
    public function testIsBoolean()
    {
        $actual = $this->object->is(true)->boolean();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_array()
     */
    public function testIsArray()
    {
        $actual = $this->object->is(['array'])->array();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_date()
     */
    public function testIsDate()
    {
        $actual = $this->object->is('2000-00-00')->date();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_function()
     */
    public function testIsFunction()
    {
        $function = function() { return; };
        $actual = $this->object->is($function)->function();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_null()
     */
    public function testIsNull()
    {
        $actual = $this->object->is(NULL)->null();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_number()
     */
    public function testIsNumber()
    {
        $actual = $this->object->is('5')->number();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_regexp()
     */
    public function testIsRegexp()
    {
        $actual = $this->object->is('#(.*)#')->regexp();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_string()
     */
    public function testIsString()
    {
        $actual = $this->object->is('string')->string();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_empty()
     */
    public function testIsEmpty()
    {
        $actual = $this->object->is('')->empty();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_truthy()
     */
    public function testIsTruthy()
    {
        $actual = $this->object->is('true')->truthy();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_falsy()
     */
    public function testIsFalsy()
    {
        $actual = $this->object->is('false')->falsy();
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Affirm::_space()
     */
    public function testIsSpace()
    {
        $actual = $this->object->is('     ')->space();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_boolean()
     */
    public function testIsInvalidBoolean()
    {
        $actual = $this->object->is('notaboolean')->boolean();
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Affirm::_date()
     */
    public function testIsInvalidDate()
    {
        $actual = $this->object->is('hahahaha')->date();
        $this->assertFalse($actual);
    }

}
