<?php
/**
 * ChannelNotificationSeverity
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
 * ChannelNotificationSeverity Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelNotificationSeverity implements EnumInterface
{
    private $value;

    /**
     * Possible values of this enum
     */
    const INFO = 'INFO';
    const WARNING = 'WARNING';
    const ERROR = 'ERROR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INFO,
            self::WARNING,
            self::ERROR,
        ];
    }

    
    public static function INFO(): ChannelNotificationSeverity
    {
        return new self('INFO');
    }
    
    public static function WARNING(): ChannelNotificationSeverity
    {
        return new self('WARNING');
    }
    
    public static function ERROR(): ChannelNotificationSeverity
    {
        return new self('ERROR');
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
