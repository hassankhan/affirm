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
     * @covers Affirm\Traits\ObjectTrait::_propertyCount()
     * @group  object
     */
    public function testIsPropertyCount()
    {
        $actual = $this->object->_propertyCount(new TestObj, 2);
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\ObjectTrait::_propertyDefined()
     * @group  object
     */
    public function testIsPropertyDefined()
    {
        $actual = $this->object->_propertyDefined(new TestObj, 'prop1');
        $this->assertTrue($actual);
    }

}
