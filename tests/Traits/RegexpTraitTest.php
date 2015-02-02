<?php

namespace Affirm\Traits\Test;

class RegexpTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\RegexpTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_url()
     * @group  regexp
     */
    public function testIsUrl()
    {
        $actual = $this->object->is('http://google.com')->url();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_email()
     * @group  regexp
     */
    public function testIsEmail()
    {
        $actual = $this->object->is('a@a.com')->email();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_usZipCode()
     * @group  regexp
     */
    public function testIsUSZipCode()
    {
        $actual = $this->object->is('02201-1020')->usZipCode();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_caPostalCode()
     * @group  regexp
     */
    public function testIsCAPostalCode()
    {
        $actual = $this->object->is('L8V3Y1')->caPostalCode();
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_ukPostCode()
     * @group  regexp
     */
    public function testIsUKPostCode()
    {
        $actual = $this->object->is('UB6 7BS')->ukPostCode();
        $this->assertTrue($actual);
    }

}
