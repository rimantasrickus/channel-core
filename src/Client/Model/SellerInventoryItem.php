<?php
/**
 * SellerInventoryItem
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
 * SellerInventoryItem Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SellerInventoryItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerInventoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param PriceContainer
      * @param ChannelAttribute
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offerId' => 'int',
        'channelOfferId' => 'string',
        'sku' => 'string',
        'ean' => 'string',
        'quantity' => 'string',
        'priceList' => '\JTL\SCX\Lib\Channel\Client\Model\PriceContainer[]',
        'title' => 'string',
        'channelCategoryId' => 'string',
        'channelAttributeList' => '\JTL\SCX\Lib\Channel\Client\Model\ChannelAttribute[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offerId' => 'int64',
        'channelOfferId' => null,
        'sku' => null,
        'ean' => null,
        'quantity' => null,
        'priceList' => null,
        'title' => null,
        'channelCategoryId' => null,
        'channelAttributeList' => null
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
        'offerId' => 'offerId',
        'channelOfferId' => 'channelOfferId',
        'sku' => 'sku',
        'ean' => 'ean',
        'quantity' => 'quantity',
        'priceList' => 'priceList',
        'title' => 'title',
        'channelCategoryId' => 'channelCategoryId',
        'channelAttributeList' => 'channelAttributeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offerId' => 'setOfferId',
        'channelOfferId' => 'setChannelOfferId',
        'sku' => 'setSku',
        'ean' => 'setEan',
        'quantity' => 'setQuantity',
        'priceList' => 'setPriceList',
        'title' => 'setTitle',
        'channelCategoryId' => 'setChannelCategoryId',
        'channelAttributeList' => 'setChannelAttributeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offerId' => 'getOfferId',
        'channelOfferId' => 'getChannelOfferId',
        'sku' => 'getSku',
        'ean' => 'getEan',
        'quantity' => 'getQuantity',
        'priceList' => 'getPriceList',
        'title' => 'getTitle',
        'channelCategoryId' => 'getChannelCategoryId',
        'channelAttributeList' => 'getChannelAttributeList'
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





    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['offerId'] = $data['offerId'] ?? null;
        $this->container['channelOfferId'] = $data['channelOfferId'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['ean'] = $data['ean'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['priceList'] = $data['priceList'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['channelCategoryId'] = $data['channelCategoryId'] ?? null;
        $this->container['channelAttributeList'] = $data['channelAttributeList'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['offerId']) && ($this->container['offerId'] < 1)) {
            $invalidProperties[] = "invalid value for 'offerId', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) > 50)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelOfferId']) && (mb_strlen($this->container['channelOfferId']) < 1)) {
            $invalidProperties[] = "invalid value for 'channelOfferId', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 150)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 1.";
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


    public function getOfferId(): ?int
    {
        return $this->container['offerId'];
    }

    public function setOfferId(?int $offerId): SellerInventoryItem
    {
        $this->container['offerId'] = $offerId;
        return $this;
    }


    public function getChannelOfferId(): ?string
    {
        return $this->container['channelOfferId'];
    }

    public function setChannelOfferId(?string $channelOfferId): SellerInventoryItem
    {
        $this->container['channelOfferId'] = $channelOfferId;
        return $this;
    }


    public function getSku(): ?string
    {
        return $this->container['sku'];
    }

    public function setSku(?string $sku): SellerInventoryItem
    {
        $this->container['sku'] = $sku;
        return $this;
    }


    public function getEan(): ?string
    {
        return $this->container['ean'];
    }

    public function setEan(?string $ean): SellerInventoryItem
    {
        $this->container['ean'] = $ean;
        return $this;
    }


    public function getQuantity(): ?string
    {
        return $this->container['quantity'];
    }

    public function setQuantity(?string $quantity): SellerInventoryItem
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }


    public function getPriceList(): ?array
    {
        return $this->container['priceList'];
    }

    public function setPriceList(?array $priceList): SellerInventoryItem
    {
        $this->container['priceList'] = $priceList;
        return $this;
    }


    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    public function setTitle(?string $title): SellerInventoryItem
    {
        $this->container['title'] = $title;
        return $this;
    }


    public function getChannelCategoryId(): ?string
    {
        return $this->container['channelCategoryId'];
    }

    public function setChannelCategoryId(?string $channelCategoryId): SellerInventoryItem
    {
        $this->container['channelCategoryId'] = $channelCategoryId;
        return $this;
    }


    public function getChannelAttributeList(): ?array
    {
        return $this->container['channelAttributeList'];
    }

    public function setChannelAttributeList(?array $channelAttributeList): SellerInventoryItem
    {
        $this->container['channelAttributeList'] = $channelAttributeList;
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
