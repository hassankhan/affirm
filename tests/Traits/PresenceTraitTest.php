<?php

namespace Affirm\Traits\Test;

class PresenceTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\PresenceTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\PresenceTrait::_empty()
     * @group  presence
     */
    public function testIsEmpty()
    {
        $actual = $this->object->is('')->empty();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\PresenceTrait::_truthy()
     * @group  presence
     */
    public function testIsTruthy()
    {
        $actual = $this->object->is('true')->truthy();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\PresenceTrait::_falsy()
     * @group  presence
     */
    public function testIsFalsy()
    {
        $actual = $this->object->is('false')->falsy();
        $this->assertFalse($actual);
    }

    /**
     * @covers Affirm\Traits\PresenceTrait::_space()
     * @group  presence
     */
    public function testIsSpace()
    {
        $actual = $this->object->is('     ')->space();
        $this->assertTrue($actual);
    }

}
