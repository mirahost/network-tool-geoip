<?php

use Mirahost\NetworkTools\Geoip;

class GeoipTest extends PHPUnit_Framework_TestCase {

    public function testGeoip()
    {
        $geoip = new Geoip;
        $this->assertContains('IP Address', $geoip->getGeoip('http://example.com'));
    }

}