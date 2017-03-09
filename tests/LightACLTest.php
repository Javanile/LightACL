<?php

namespace Javanile\LightACL\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use namespace Javanile\LightACL\LightACL;

Producer::addPsr4(['Javanile\LightACL\\Tests\\' => __DIR__]);

final class LightACLTest extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new LightACL();
        $this->assertInstanceOf('LightACL', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
