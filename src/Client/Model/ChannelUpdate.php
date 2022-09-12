<?php
/**
 * ChannelUpdate
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

use ArrayAccess;
use JTL\SCX\Lib\Channel\Client\ObjectSerializer;

/**
 * ChannelUpdate Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param ChannelUpdateFeatureList
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group' => 'string',
        'currency' => 'string',
        'marketplaceList' => 'string[]',
        'supportedLanguages' => 'string[]',
        'displayName' => 'string',
        'website' => 'string',
        'pricing' => 'string',
        'channelType' => 'string',
        'supportContact' => 'string',
        'vendor' => 'string',
        'signUpUrl' => 'string',
        'updateUrl' => 'string',
        'logo' => 'string',
        'description' => 'string',
        'featureList' => '\JTL\SCX\Lib\Channel\Client\Model\ChannelUpdateFeatureList'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group' => null,
        'currency' => null,
        'marketplaceList' => null,
        'supportedLanguages' => null,
        'displayName' => null,
        'website' => 'uri',
        'pricing' => 'uri',
        'channelType' => null,
        'supportContact' => 'email',
        'vendor' => null,
        'signUpUrl' => null,
        'updateUrl' => null,
        'logo' => null,
        'description' => null,
        'featureList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @codeCoverageIgnore
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     * @codeCoverageIgnore
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'group' => 'group',
        'currency' => 'currency',
        'marketplaceList' => 'marketplaceList',
        'supportedLanguages' => 'supportedLanguages',
        'displayName' => 'displayName',
        'website' => 'website',
        'pricing' => 'pricing',
        'channelType' => 'channelType',
        'supportContact' => 'supportContact',
        'vendor' => 'vendor',
        'signUpUrl' => 'signUpUrl',
        'updateUrl' => 'updateUrl',
        'logo' => 'logo',
        'description' => 'description',
        'featureList' => 'featureList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group' => 'setGroup',
        'currency' => 'setCurrency',
        'marketplaceList' => 'setMarketplaceList',
        'supportedLanguages' => 'setSupportedLanguages',
        'displayName' => 'setDisplayName',
        'website' => 'setWebsite',
        'pricing' => 'setPricing',
        'channelType' => 'setChannelType',
        'supportContact' => 'setSupportContact',
        'vendor' => 'setVendor',
        'signUpUrl' => 'setSignUpUrl',
        'updateUrl' => 'setUpdateUrl',
        'logo' => 'setLogo',
        'description' => 'setDescription',
        'featureList' => 'setFeatureList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group' => 'getGroup',
        'currency' => 'getCurrency',
        'marketplaceList' => 'getMarketplaceList',
        'supportedLanguages' => 'getSupportedLanguages',
        'displayName' => 'getDisplayName',
        'website' => 'getWebsite',
        'pricing' => 'getPricing',
        'channelType' => 'getChannelType',
        'supportContact' => 'getSupportContact',
        'vendor' => 'getVendor',
        'signUpUrl' => 'getSignUpUrl',
        'updateUrl' => 'getUpdateUrl',
        'logo' => 'getLogo',
        'description' => 'getDescription',
        'featureList' => 'getFeatureList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     * @codeCoverageIgnore
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @codeCoverageIgnore
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @codeCoverageIgnore
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     * @codeCoverageIgnore
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const CHANNEL_TYPE_MARKETPLACE = 'MARKETPLACE';
    const CHANNEL_TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelTypeAllowableValues()
    {
        return [
            self::CHANNEL_TYPE_MARKETPLACE,
            self::CHANNEL_TYPE_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['group'] = $data['group'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['marketplaceList'] = $data['marketplaceList'] ?? null;
        $this->container['supportedLanguages'] = $data['supportedLanguages'] ?? null;
        $this->container['displayName'] = $data['displayName'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['channelType'] = $data['channelType'] ?? 'MARKETPLACE';
        $this->container['supportContact'] = $data['supportContact'] ?? null;
        $this->container['vendor'] = $data['vendor'] ?? null;
        $this->container['signUpUrl'] = $data['signUpUrl'] ?? null;
        $this->container['updateUrl'] = $data['updateUrl'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['featureList'] = $data['featureList'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketplaceList'] === null) {
            $invalidProperties[] = "'marketplaceList' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['website'] === null) {
            $invalidProperties[] = "'website' can't be null";
        }
        $allowedValues = $this->getChannelTypeAllowableValues();
        if (!is_null($this->container['channelType']) && !in_array($this->container['channelType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channelType', must be one of '%s'",
                $this->container['channelType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['supportContact'] === null) {
            $invalidProperties[] = "'supportContact' can't be null";
        }
        if ($this->container['vendor'] === null) {
            $invalidProperties[] = "'vendor' can't be null";
        }
        if ($this->container['signUpUrl'] === null) {
            $invalidProperties[] = "'signUpUrl' can't be null";
        }
        if ($this->container['featureList'] === null) {
            $invalidProperties[] = "'featureList' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     * @codeCoverageIgnore
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    public function getGroup(): ?string
    {
        return $this->container['group'];
    }

    public function setGroup(?string $group): ChannelUpdate
    {
        $this->container['group'] = $group;
        return $this;
    }


    public function getCurrency(): ?string
    {
        return $this->container['currency'];
    }

    public function setCurrency(?string $currency): ChannelUpdate
    {
        $this->container['currency'] = $currency;
        return $this;
    }


    public function getMarketplaceList(): array
    {
        return $this->container['marketplaceList'];
    }

    public function setMarketplaceList(array $marketplaceList): ChannelUpdate
    {
        $this->container['marketplaceList'] = $marketplaceList;
        return $this;
    }


    public function getSupportedLanguages(): ?array
    {
        return $this->container['supportedLanguages'];
    }

    public function setSupportedLanguages(?array $supportedLanguages): ChannelUpdate
    {
        $this->container['supportedLanguages'] = $supportedLanguages;
        return $this;
    }


    public function getDisplayName(): string
    {
        return $this->container['displayName'];
    }

    public function setDisplayName(string $displayName): ChannelUpdate
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }


    public function getWebsite(): string
    {
        return $this->container['website'];
    }

    public function setWebsite(string $website): ChannelUpdate
    {
        $this->container['website'] = $website;
        return $this;
    }


    public function getPricing(): ?string
    {
        return $this->container['pricing'];
    }

    public function setPricing(?string $pricing): ChannelUpdate
    {
        $this->container['pricing'] = $pricing;
        return $this;
    }


    public function getChannelType(): ?string
    {
        return $this->container['channelType'];
    }

    public function setChannelType(?string $channelType): ChannelUpdate
    {
        $this->container['channelType'] = $channelType;
        return $this;
    }


    public function getSupportContact(): string
    {
        return $this->container['supportContact'];
    }

    public function setSupportContact(string $supportContact): ChannelUpdate
    {
        $this->container['supportContact'] = $supportContact;
        return $this;
    }


    public function getVendor(): string
    {
        return $this->container['vendor'];
    }

    public function setVendor(string $vendor): ChannelUpdate
    {
        $this->container['vendor'] = $vendor;
        return $this;
    }


    public function getSignUpUrl(): string
    {
        return $this->container['signUpUrl'];
    }

    public function setSignUpUrl(string $signUpUrl): ChannelUpdate
    {
        $this->container['signUpUrl'] = $signUpUrl;
        return $this;
    }


    public function getUpdateUrl(): ?string
    {
        return $this->container['updateUrl'];
    }

    public function setUpdateUrl(?string $updateUrl): ChannelUpdate
    {
        $this->container['updateUrl'] = $updateUrl;
        return $this;
    }


    public function getLogo(): ?string
    {
        return $this->container['logo'];
    }

    public function setLogo(?string $logo): ChannelUpdate
    {
        $this->container['logo'] = $logo;
        return $this;
    }


    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    public function setDescription(?string $description): ChannelUpdate
    {
        $this->container['description'] = $description;
        return $this;
    }


    public function getFeatureList(): ChannelUpdateFeatureList
    {
        return $this->container['featureList'];
    }

    public function setFeatureList(ChannelUpdateFeatureList $featureList): ChannelUpdate
    {
        $this->container['featureList'] = $featureList;
        return $this;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     * @codeCoverageIgnore
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     * @codeCoverageIgnore
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     * @codeCoverageIgnore
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     * @codeCoverageIgnore
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            $this->jsonSerialize(),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     * @codeCoverageIgnore
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode($this->jsonSerialize());
    }
}


