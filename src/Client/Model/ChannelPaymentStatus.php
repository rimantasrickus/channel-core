<?php
/**
 * ChannelPaymentStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SCX Channel API
 *
 * SCX Channel API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Lib\Channel\Client\Model;

use JTL\SCX\Lib\Channel\Client\EnumInterface;

/**
 * ChannelPaymentStatus Class Doc Comment
 *
 * @category Class
 * @description The current payment status  * **PENDING**: Order is not yet paid. * **PAID**: Order is complete paid. * **PARTIALLY_PAID**: Order is partially paid.
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelPaymentStatus implements EnumInterface
{
    private $value;

    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const PAID = 'PAID';
    const PARTIALLY_PAID = 'PARTIALLY_PAID';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::PAID,
            self::PARTIALLY_PAID,
        ];
    }

    
    public static function PENDING(): ChannelPaymentStatus
    {
        return new self('PENDING');
    }
    
    public static function PAID(): ChannelPaymentStatus
    {
        return new self('PAID');
    }
    
    public static function PARTIALLY_PAID(): ChannelPaymentStatus
    {
        return new self('PARTIALLY_PAID');
    }
    

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
