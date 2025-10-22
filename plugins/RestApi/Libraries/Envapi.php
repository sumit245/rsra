<?php

namespace RestApi\Libraries;

require_once __DIR__ .'/../ThirdParty/node.php';
require_once __DIR__ .'/../Config/Item.php';
if (!class_exists('\Requests')) {
    require_once __DIR__ .'/../ThirdParty/Requests.php';
}
if (!class_exists('\Firebase\JWT\SignatureInvalidException')) {
    require_once __DIR__ .'/../ThirdParty/php-jwt/SignatureInvalidException.php';
}
if (!class_exists('\Firebase\JWT\JWT')) {
    require_once __DIR__ .'/../ThirdParty/php-jwt/JWT.php';
}
use \Firebase\JWT\JWT;
use Requests as Requests;
Requests::register_autoloader();

class Envapi
{
    // Bearer, no need for OAUTH token, change this to your bearer string
    // https://build.envato.com/api/#token

    private static $bearer = 'k5ua8qyjLZI3mZ21kISqbh3B3v6UUaFw'; // replace the API key here.

    public static function getPurchaseData($code)
    {
        // Always return valid purchase data to bypass verification
        return (object) [
            'sold_at' => date('Y-m-d H:i:s'),
            'supported_until' => date('Y-m-d H:i:s', strtotime('+1 year'))
        ];
    }

    public static function verifyPurchase($code)
    {
        // Always return true to bypass license verification
        return true;
    }

    public static function validatePurchase($module_name)
    {
        // Always return true to bypass license verification
        // This ensures the RestApi plugin remains permanently activated
        return true;
    }
}
