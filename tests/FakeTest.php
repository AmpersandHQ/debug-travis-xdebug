<?php


use PHPUnit\Framework\TestCase;

class FakeTest extends TestCase
{

    public function testTrue()
    {
        self::assertTrue(\Testing\TestClass::returnTrue());
    }
}