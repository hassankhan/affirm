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
     * @covers Affirm\Affirm::__construct()
     * @covers Affirm\Affirm::is()
     * @covers Affirm\Affirm::values()
     */
    public function testIs()
    {
        // $actual = $this->object->is('This');
        $expected = ['This'];
        $actual   = $this->object->is('This')->values();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @covers Affirm\Affirm::__construct()
     * @covers Affirm\Affirm::are()
     * @covers Affirm\Affirm::values()
     */
    public function testAre()
    {
        $expected = ['This', 'is'];
        $actual   = $this->object->are('This', 'is')->values();
        $this->assertEquals($expected, $actual);
        // $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Affirm::is()
     * @covers Affirm\Affirm::not()
     * @covers Affirm\Affirm::__call()
     * @covers Affirm\Affirm::processValues()
     * @group  modifiers
     */
    public function testIsNot()
    {
        $actual = $this->object->is('This')->not()->endsWith('is');
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Affirm::are()
     * @covers Affirm\Affirm::any()
     * @covers Affirm\Affirm::__call()
     * @covers Affirm\Affirm::processValues()
     * @group  modifiers
     */
    public function testAreAny()
    {
        $actual = $this->object->are('This', 'There')->any()->endsWith('is');
        $this->assertTrue($actual);
    }

}
