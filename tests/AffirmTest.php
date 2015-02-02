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
     * @covers Affirm\Affirm::__call()
     * @expectedException Exception
     */
    public function testCallInvalidMethod()
    {
        $this->object->nothing();
    }


    /**
     * @covers Affirm\Affirm::is()
     * @covers Affirm\Affirm::not()
     * @covers Affirm\Affirm::__call()
     * @group  modifiers
     */
    public function testIsNot()
    {
        $actual = $this->object->is('This')->not()->endsWith('is');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Affirm::__construct()
     * @covers Affirm\Affirm::__call()
     * @covers Affirm\Affirm::are()
     * @group  modifiers
     */
    public function testMultipleItems()
    {
        $actual = $this->object->are('This', 'is')->endsWith('is');
        $this->assertTrue($actual);
    }

}
