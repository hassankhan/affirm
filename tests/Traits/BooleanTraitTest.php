<?php

namespace Affirm\Traits\Test;

class BooleanTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\BooleanTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\BooleanTrait::_true()
     */
    public function testIsTrue()
    {
        $actual = $this->object->_true(true);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\BooleanTrait::_false()
     */
    public function testIsFalse()
    {
        $actual = $this->object->_false(false);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\BooleanTrait::_truthy()
     */
    public function testIsTruthy()
    {
        $actual = $this->object->_truthy('true');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\BooleanTrait::_falsy()
     */
    public function testIsFalsy()
    {
        $actual = $this->object->_falsy('false');
        $this->assertFalse($actual);
    }

}
