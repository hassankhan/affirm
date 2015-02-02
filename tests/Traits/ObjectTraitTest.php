<?php

namespace Affirm\Traits\Test;

class TestObj {
    public $prop1;
    public $prop2;
    protected $prop3;
}

class ObjectTraitTest extends \PHPUnit_Framework_TestCase
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
     * @covers Affirm\Affirm::_propertyCount()
     * @group  object
     */
    public function testPropertyCount()
    {
        $actual = $this->object->is(new TestObj)->propertyCount(2);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::_propertyDefined()
     * @group  object
     */
    public function testPropertyDefined()
    {
        $actual = $this->object->is(new TestObj)->propertyDefined('prop1');
        $this->assertTrue($actual);
    }

}
