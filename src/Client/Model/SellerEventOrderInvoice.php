<?php
/**
 * SellerEventOrderInvoice
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

use ArrayAccess;
use JTL\SCX\Lib\Channel\Client\ObjectSerializer;

/**
 * SellerEventOrderInvoice Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SellerEventOrderInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerEventOrderInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param InvoiceDocumentType
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\JTL\SCX\Lib\Channel\Client\Model\InvoiceDocumentType',
        'sellerId' => 'string',
        'orderId' => 'string',
        'invoiceNumber' => 'string',
        'documentId' => 'string',
        'documentExpiresAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'sellerId' => null,
        'orderId' => null,
        'invoiceNumber' => null,
        'documentId' => null,
        'documentExpiresAt' => 'date-time'
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
        'type' => 'type',
        'sellerId' => 'sellerId',
        'orderId' => 'orderId',
        'invoiceNumber' => 'invoiceNumber',
        'documentId' => 'documentId',
        'documentExpiresAt' => 'documentExpiresAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'sellerId' => 'setSellerId',
        'orderId' => 'setOrderId',
        'invoiceNumber' => 'setInvoiceNumber',
        'documentId' => 'setDocumentId',
        'documentExpiresAt' => 'setDocumentExpiresAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'sellerId' => 'getSellerId',
        'orderId' => 'getOrderId',
        'invoiceNumber' => 'getInvoiceNumber',
        'documentId' => 'getDocumentId',
        'documentExpiresAt' => 'getDocumentExpiresAt'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['invoiceNumber'] = $data['invoiceNumber'] ?? null;
        $this->container['documentId'] = $data['documentId'] ?? null;
        $this->container['documentExpiresAt'] = $data['documentExpiresAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['sellerId'] === null) {
            $invalidProperties[] = "'sellerId' can't be null";
        }
        if (!preg_match("/^\\w{1,50}$/", $this->container['sellerId'])) {
            $invalidProperties[] = "invalid value for 'sellerId', must be conform to the pattern /^\\w{1,50}$/.";
        }

        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ((mb_strlen($this->container['orderId']) > 150)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['orderId']) < 1)) {
            $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['invoiceNumber'] === null) {
            $invalidProperties[] = "'invoiceNumber' can't be null";
        }
        if ((mb_strlen($this->container['invoiceNumber']) > 256)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['invoiceNumber']) < 1)) {
            $invalidProperties[] = "invalid value for 'invoiceNumber', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['documentId'] === null) {
            $invalidProperties[] = "'documentId' can't be null";
        }
        if ($this->container['documentExpiresAt'] === null) {
            $invalidProperties[] = "'documentExpiresAt' can't be null";
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


    public function getType(): InvoiceDocumentType
    {
        return $this->container['type'];
    }

    public function setType(InvoiceDocumentType $type): SellerEventOrderInvoice
    {
        $this->container['type'] = $type;
        return $this;
    }


    public function getSellerId(): string
    {
        return $this->container['sellerId'];
    }

    public function setSellerId(string $sellerId): SellerEventOrderInvoice
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }


    public function getOrderId(): string
    {
        return $this->container['orderId'];
    }

    public function setOrderId(string $orderId): SellerEventOrderInvoice
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }


    public function getInvoiceNumber(): string
    {
        return $this->container['invoiceNumber'];
    }

    public function setInvoiceNumber(string $invoiceNumber): SellerEventOrderInvoice
    {
        $this->container['invoiceNumber'] = $invoiceNumber;
        return $this;
    }


    public function getDocumentId(): string
    {
        return $this->container['documentId'];
    }

    public function setDocumentId(string $documentId): SellerEventOrderInvoice
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }


    public function getDocumentExpiresAt(): \DateTime
    {
        return $this->container['documentExpiresAt'];
    }

    public function setDocumentExpiresAt(\DateTime $documentExpiresAt): SellerEventOrderInvoice
    {
        $this->container['documentExpiresAt'] = $documentExpiresAt;
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
