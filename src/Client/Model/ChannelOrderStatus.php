<?php
/**
 * ChannelOrderStatus
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Lib\Channel\Client\Model;

use JTL\SCX\Lib\Channel\Client\EnumInterface;

/**
 * ChannelOrderStatus Class Doc Comment
 *
 * @category Class
 * @description The current order status.  * **UNACKED**: Order is created in Marketplace but a Seller acknowledge is required. * **CREATED**: Order is created but not yet completed. * **ACCEPTED**: Order is placed and checkout process is complete but not yet shipped. * (DEPRECATED) ~~SHIPPED~~: All items in the order have been shipped * (DEPRECATED) ~~PARTIALLY_SHIPPED~~: Some items (but not all) have been shipped. * (DEPRECATED) ~~CANCELED_BY_SELLER~~: Order is canceled by seller. * (DEPRECATED) ~~CANCELED_BY_BUYER~~: Order is canceled by buyer.
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelOrderStatus implements EnumInterface
{
    private $value;

    /**
     * Possible values of this enum
     */
    public const UNACKED = 'UNACKED';
    public const CREATED = 'CREATED';
    public const ACCEPTED = 'ACCEPTED';
    public const SHIPPED = 'SHIPPED';
    public const PARTIALLY_SHIPPED = 'PARTIALLY_SHIPPED';
    public const CANCELED_BY_SELLER = 'CANCELED_BY_SELLER';
    public const CANCELED_BY_BUYER = 'CANCELED_BY_BUYER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNACKED,
            self::CREATED,
            self::ACCEPTED,
            self::SHIPPED,
            self::PARTIALLY_SHIPPED,
            self::CANCELED_BY_SELLER,
            self::CANCELED_BY_BUYER,
        ];
    }


    public static function UNACKED(): ChannelOrderStatus
    {
        return new self('UNACKED');
    }

    public static function CREATED(): ChannelOrderStatus
    {
        return new self('CREATED');
    }

    public static function ACCEPTED(): ChannelOrderStatus
    {
        return new self('ACCEPTED');
    }

    public static function SHIPPED(): ChannelOrderStatus
    {
        return new self('SHIPPED');
    }

    public static function PARTIALLY_SHIPPED(): ChannelOrderStatus
    {
        return new self('PARTIALLY_SHIPPED');
    }

    public static function CANCELED_BY_SELLER(): ChannelOrderStatus
    {
        return new self('CANCELED_BY_SELLER');
    }

    public static function CANCELED_BY_BUYER(): ChannelOrderStatus
    {
        return new self('CANCELED_BY_BUYER');
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
