<?php

namespace EVB\Weather;

use PHPUnit\Framework\TestCase;

/**
 * Test IpLocator for Weather.
 */
class IpLocatorTest extends TestCase
{
    /**
     * Test getGeoInfo() method.
     * Gets info.
     */
    public function testGetGeoInfo()
    {
        $data = [
            "continent_name" => "test",
            "country_name" => "test",
            "region_name" => "test",
            "city" => "test",
            "zip" => "test"
        ];

        $curl = new \EVB\Weather\MockCurlWrapper(\json_encode($data));

        $sut = new IpLocator("test", $curl);

        $result = $sut->getGeoInfo("test");

        $this->assertEquals($data, $result);
    }
}
