<?php

// backward compatibility
if (!class_exists('\PHPUnit\Framework\TestCase') && class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

class TestTest extends \PHPUnit\Framework\TestCase
{
    public function testAutorizationSuccess()
    {
        $this->assertTrue(true);
    }
}
