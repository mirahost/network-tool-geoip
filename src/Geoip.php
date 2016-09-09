<?php

namespace Mirahost\NetworkTools;

class Geoip
{

    function getGeoip($host)
    {
        $output = null;
        $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);

        $result = file_get_contents('http://geoip.mirahost.com/json/' . $host);

        if($result !== false) {

            $result = json_decode($result);

            $output = '';
            foreach ($result as $key => $value ) {

                if(!empty($value)) {

                    $output .= ucwords(str_replace('_',' ',$key)) .': ' . $value . "\n";
                }
            }
        }

        return $output;
    }
}