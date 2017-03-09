<?php

namespace Javanile\LightACL
\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;

Producer::addPsr4(['Javanile\LightACL
\\Tests\\' => __DIR__]);

final class LightACL
Test extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new LightACL
();
        $this->assertInstanceOf('LightACL
', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
