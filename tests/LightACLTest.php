<?php

namespace Javanile\LightACL\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Javanile\LightACL\LightACL;

Producer::addPsr4([
    'Javanile\LightACL\\' => __DIR__.'/../src',
    'Javanile\LightACL\\Tests\\' => __DIR__
]);

Producer::addPsr4(['' => __DIR__]);

final class LightACLTest extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new LightACL();
        $this->assertInstanceOf('Javanile\LightACL\\LightACL', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
