<?php

namespace test;

use check\check;
use PHPUnit_Framework_TestCase;

class checkTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once 'class/check.php';
    }

    public function testCheckMailIsTrue()
    {
        $mail = 'lala@lala.com';

        $this->assertTrue(true, check::checkIsEmail($mail));

    }

    public function testCheckMailIsEmpty()
    {
        $mail = '';

        $this->assertFalse(false, check::checkIsEmail($mail));
    }

    public function testCheckMailIsFalse()
    {
        $mail = 'lala.com';

        $this->assertFalse(false, check::checkIsEmail($mail));
    }

    public function testDataIsNotEmpty()
    {
        $data = array('data');

        $this->assertTrue(true, check::checkIsInArray('data', $data));
    }

    public function testDataIsEmpty()
    {
        $data = array();

        $this->assertFalse(false, check::checkIsInArray('data', $data));
    }

    public function testDataNumberIsTrue()
    {
        $data = 1;

        $this->assertTrue(true, check::checkIsNumber($data));

    }

    public function testDataNumberIsFalse()
    {
        $data = 'a';

        $this->assertFalse(false, check::checkIsNumber($data));
    }

}