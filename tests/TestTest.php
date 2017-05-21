<?php

// backward compatibility
if (class_exists('\PHPUnit\Framework\TestCase') && !class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit\Framework\TestCase', '\PHPUnit_Framework_TestCase');
}

class TestTest extends \PHPUnit_Framework_TestCase
{
    public function testAutorizationSuccess()
    {
        $this->assertTrue(true);
    }
}
