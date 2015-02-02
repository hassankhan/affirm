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
     * @covers Affirm\Traits\StringTrait::_include()
     * @group  string
     */
    public function testIsInclude()
    {
        $actual = $this->object->is('Am I here')->include('Am');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_uppercase()
     * @group  string
     */
    public function testIsUpperCase()
    {
        $actual = $this->object->is('AAA')->upperCase();
        $this->assertTrue($actual);
    }
    /**
     * @covers Affirm\Traits\StringTrait::_lowercase()
     * @group  string
     */
    public function testIsLowerCase()
    {
        $actual = $this->object->is('eee')->lowerCase();
        $this->assertTrue($actual);
    }
    /**
     * @covers Affirm\Traits\StringTrait::_startsWith()
     * @group  string
     */
    public function testIsStartsWith()
    {
        $actual = $this->object->is('This')->startsWith('Th');
        $this->assertTrue($actual);
    }
    /**
     * @covers Affirm\Traits\StringTrait::_endsWith()
     * @group  string
     */
    public function testIsEndsWith()
    {
        $actual = $this->object->is('This')->endsWith('is');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\StringTrait::_capitalized()
     * @group  string
     */
    public function testIsCapitalized()
    {
        $actual = $this->object->is('This')->capitalized();
        $this->assertTrue($actual);
    }

}
