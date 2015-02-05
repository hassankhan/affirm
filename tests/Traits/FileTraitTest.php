<?php

namespace Affirm\Traits\Test;

class FileTraitTest extends \PHPUnit_Framework_TestCase
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
        $this->object = $this->getObjectForTrait('Affirm\\Traits\\FileTrait', [], 'Affirm\\Affirm');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Affirm\Traits\FileTrait::_file()
     */
    public function testIsFile()
    {
        // echo getcwd() . 'tests/Fixtures/file.txt';
        $actual = $this->object->_file('tests/Fixtures/file.txt');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\FileTrait::_dir()
     */
    public function testIsDir()
    {
        $actual = $this->object->_dir('tests/Fixtures');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\FileTrait::_readable()
     */
    public function testIsReadable()
    {
        $actual = $this->object->_readable('tests/Fixtures/file.txt');
        $this->assertTrue($actual);
    }

    /**
     * @covers Affirm\Traits\FileTrait::_writable()
     */
    public function testIsWritable()
    {
        $actual = $this->object->_writable('tests/Fixtures/file.txt');
        $this->assertTrue($actual);
    }

}
