<?php
/**
 * Topic
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
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace JTL\SCX\Lib\Channel\Client\Model;

use JTL\SCX\Lib\Channel\Client\EnumInterface;

/**
 * Topic Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Topic implements EnumInterface
{
    private $value;

    /**
     * Possible values of this enum
     */
    const QUESTION = 'QUESTION';
    const FEEDBACK = 'FEEDBACK';
    const DELIVERY = 'DELIVERY';
    const _RETURN = 'RETURN';
    const REFUND = 'REFUND';
    const INCIDENT = 'INCIDENT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUESTION,
            self::FEEDBACK,
            self::DELIVERY,
            self::_RETURN,
            self::REFUND,
            self::INCIDENT,
        ];
    }

    
    public static function QUESTION(): Topic
    {
        return new self('QUESTION');
    }
    
    public static function FEEDBACK(): Topic
    {
        return new self('FEEDBACK');
    }
    
    public static function DELIVERY(): Topic
    {
        return new self('DELIVERY');
    }
    
    public static function _RETURN(): Topic
    {
        return new self('RETURN');
    }
    
    public static function REFUND(): Topic
    {
        return new self('REFUND');
    }
    
    public static function INCIDENT(): Topic
    {
        return new self('INCIDENT');
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