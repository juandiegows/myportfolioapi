<?php

namespace App\Action\helpers;

class Util
{

    public static function getBrowser($userAgent)
    {


        $browsers = [
            'Edge' => 'Edge',
            'Edg' => 'Edge',
            'Opera' => 'Opera',
            'OPR' => 'Opera',
            'Brave'           => 'Brave',
            'Firefox' => 'Firefox',
            'Chrome' => 'Chrome',
            'Safari' => 'Safari',
            'MSIE' => 'Internet Explorer',
            'Trident' => 'Internet Explorer',
            'Opera Mini' => 'Opera Mini',
            'Mobile Safari' => 'Mobile Safari',
            'Vivaldi' => 'Vivaldi',
            'CriOS' => 'Chrome for iOS',
            'UCBrowser' => 'UC Browser',
            'SamsungBrowser' => 'Samsung Internet',
            'Mozilla' => 'Unknown',
        ];

        foreach ($browsers as $browser => $browserName) {
            if (strpos($userAgent, $browser) !== false) {
                return $browserName;
            }
        }

        return 'Unknown';
    }


    public static function getOperatingSystem($userAgent)
    {
        $osPlatforms = [

            'Windows NT 10.0' => 'Windows 10',
            'Windows NT 6.3' => 'Windows 8.1',
            'Windows NT 6.2' => 'Windows 8',
            'Windows NT 6.1' => 'Windows 7',
            'Windows NT 6.0' => 'Windows Vista',
            'Windows NT 5.2' => 'Windows Server 2003/XP x64',
            'Windows NT 5.1' => 'Windows XP',
            'Windows XP' => 'Windows XP',
            'Windows NT 5.0' => 'Windows 2000',
            'Windows ME' => 'Windows ME',
            'Windows' => 'Windows',
            'Win98' => 'Windows 98',
            'Win95' => 'Windows 95',
            'Win16' => 'Windows 3.11',
            'Macintosh' => 'Mac OS',
            'iOS' => 'iOS',
            'iPhone' => 'iOS',
            'iPad' => 'iOS',
            'Android' => 'Android',
            'Linux' => 'Linux',
            'Ubuntu' => 'Ubuntu',
            'BlackBerry' => 'BlackBerry',
            'FreeBSD' => 'FreeBSD',
            'OpenBSD' => 'OpenBSD',
            'NetBSD' => 'NetBSD',
            'SunOS' => 'SunOS',
            'OS\/2' => 'OS/2',
            'BeOS' => 'BeOS',
            'AIX' => 'AIX',
        ];

        foreach ($osPlatforms as $osPlatform => $osName) {
            if (strpos($userAgent, $osPlatform) !== false) {
                return $osName;
            }
        }

        return 'Unknown';
    }
}

