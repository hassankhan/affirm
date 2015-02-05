<?php

namespace Affirm\Traits\Test;

class StringTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\StringTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\StringTrait::_contains()
     */
    public function testIsContains()
    {
        $actual = $this->object->_contains('Am I here', 'Am');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_contains()
     */
    public function testIsInvalidContains()
    {
        $actual = $this->object->_contains('Are I here', 'Am');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_uppercase()
     */
    public function testIsUpperCase()
    {
        $actual = $this->object->_upperCase('AAA');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_uppercase()
     */
    public function testIsInvalidUppercase()
    {
        $actual = $this->object->_uppercase('eee');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_lowercase()
     */
    public function testIsLowerCase()
    {
        $actual = $this->object->_lowerCase('eee');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_lowercase()
     */
    public function testIsInvalidLowercase()
    {
        $actual = $this->object->_lowercase('AAA');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_startsWith()
     */
    public function testIsStartsWith()
    {
        $actual = $this->object->_startsWith('This', 'Th');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_startsWith()
     */
    public function testIsInvalidStartsWith()
    {
        $actual = $this->object->_startsWith('This', 'Ch');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_endsWith()
     */
    public function testIsEndsWith()
    {
        $actual = $this->object->_endsWith('This', 'is');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_endsWith()
     */
    public function testIsInvalidEndsWith()
    {
        $actual = $this->object->_endsWith('This', 'ie');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_capitalized()
     */
    public function testIsCapitalized()
    {
        $actual = $this->object->_capitalized('This');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_capitalized()
     */
    public function testIsInvalidCapitalized()
    {
        $actual = $this->object->_capitalized('this');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_length()
     */
    public function testIsLength()
    {
        $actual = $this->object->_length('This', 4);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_length()
     */
    public function testIsInvalidLength()
    {
        $actual = $this->object->_length('This', 3);
        $this->assertFalse($actual);
    }

}
