<?php

namespace GuillermoandraeTest;

use Guillermoandrae\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHello()
    {
        $this->assertSame('Hello, World!', (new HelloWorld())->hello());
    }
}
