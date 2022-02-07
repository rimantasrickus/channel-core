<?php
/**
 * SellerEventTicketReply
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

use ArrayAccess;
use JTL\SCX\Lib\Channel\Client\ObjectSerializer;

/**
 * SellerEventTicketReply Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SellerEventTicketReply implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SellerEventTicketReply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param \DateTime
      * @param TicketFrom
      * @param TicketAttachment
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sellerId' => 'string',
        'ticketId' => 'string',
        'replyRequested' => 'bool',
        'createdAt' => '\DateTime',
        'from' => '\JTL\SCX\Lib\Channel\Client\Model\TicketFrom',
        'message' => 'string',
        'attachment' => '\JTL\SCX\Lib\Channel\Client\Model\TicketAttachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sellerId' => null,
        'ticketId' => null,
        'replyRequested' => null,
        'createdAt' => 'date-time',
        'from' => null,
        'message' => null,
        'attachment' => null
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
        'sellerId' => 'sellerId',
        'ticketId' => 'ticketId',
        'replyRequested' => 'replyRequested',
        'createdAt' => 'createdAt',
        'from' => 'from',
        'message' => 'message',
        'attachment' => 'attachment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sellerId' => 'setSellerId',
        'ticketId' => 'setTicketId',
        'replyRequested' => 'setReplyRequested',
        'createdAt' => 'setCreatedAt',
        'from' => 'setFrom',
        'message' => 'setMessage',
        'attachment' => 'setAttachment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sellerId' => 'getSellerId',
        'ticketId' => 'getTicketId',
        'replyRequested' => 'getReplyRequested',
        'createdAt' => 'getCreatedAt',
        'from' => 'getFrom',
        'message' => 'getMessage',
        'attachment' => 'getAttachment'
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
        $this->container['sellerId'] = $data['sellerId'] ?? null;
        $this->container['ticketId'] = $data['ticketId'] ?? null;
        $this->container['replyRequested'] = $data['replyRequested'] ?? true;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['attachment'] = $data['attachment'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sellerId'] === null) {
            $invalidProperties[] = "'sellerId' can't be null";
        }
        if (!preg_match("/^\\w{1,50}$/", $this->container['sellerId'])) {
            $invalidProperties[] = "invalid value for 'sellerId', must be conform to the pattern /^\\w{1,50}$/.";
        }

        if ($this->container['ticketId'] === null) {
            $invalidProperties[] = "'ticketId' can't be null";
        }
        if ((mb_strlen($this->container['ticketId']) > 256)) {
            $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['ticketId']) < 1)) {
            $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ((mb_strlen($this->container['message']) > 1024)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 1024.";
        }

        if ((mb_strlen($this->container['message']) < 1)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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


    public function getSellerId(): string
    {
        return $this->container['sellerId'];
    }

    public function setSellerId(string $sellerId): SellerEventTicketReply
    {
        $this->container['sellerId'] = $sellerId;
        return $this;
    }


    public function getTicketId(): string
    {
        return $this->container['ticketId'];
    }

    public function setTicketId(string $ticketId): SellerEventTicketReply
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }


    public function getReplyRequested(): ?bool
    {
        return $this->container['replyRequested'];
    }

    public function setReplyRequested(?bool $replyRequested): SellerEventTicketReply
    {
        $this->container['replyRequested'] = $replyRequested;
        return $this;
    }


    public function getCreatedAt(): \DateTime
    {
        return $this->container['createdAt'];
    }

    public function setCreatedAt(\DateTime $createdAt): SellerEventTicketReply
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }


    public function getFrom(): TicketFrom
    {
        return $this->container['from'];
    }

    public function setFrom(TicketFrom $from): SellerEventTicketReply
    {
        $this->container['from'] = $from;
        return $this;
    }


    public function getMessage(): string
    {
        return $this->container['message'];
    }

    public function setMessage(string $message): SellerEventTicketReply
    {
        $this->container['message'] = $message;
        return $this;
    }


    public function getAttachment(): ?array
    {
        return $this->container['attachment'];
    }

    public function setAttachment(?array $attachment): SellerEventTicketReply
    {
        $this->container['attachment'] = $attachment;
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
