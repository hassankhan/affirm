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
        $actual = $this->object->_url('http://google.com');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_email()
     * @group  regexp
     */
    public function testIsEmail()
    {
        $actual = $this->object->_email('a@a.com');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_creditCard()
     * @group  regexp
     */
    public function testIsCreditCard()
    {
        $actual = $this->object->_creditCard('378282246310005');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_usZipCode()
     * @group  regexp
     */
    public function testIsUSZipCode()
    {
        $actual = $this->object->_usZipCode('02201-1020');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_caPostalCode()
     * @group  regexp
     */
    public function testIsCAPostalCode()
    {
        $actual = $this->object->_caPostalCode('L8V3Y1');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_ukPostCode()
     * @group  regexp
     */
    public function testIsUKPostCode()
    {
        $actual = $this->object->_ukPostCode('UB6 7BS');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_nanpPhone()
     * @group  regexp
     */
    public function testIsNANPPhone()
    {
        $actual = $this->object->_nanpPhone('609-555-0175');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_eppPhone()
     * @group  regexp
     */
    public function testIsEPPPhone()
    {
        $actual = $this->object->_eppPhone('+90.2322456789');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\RegexpTrait::_affirmative()
     * @group  regexp
     */
    public function testIsAffirmative()
    {
        $actual = $this->object->_affirmative('yes');
        $this->assertTrue($actual);
    }

}
