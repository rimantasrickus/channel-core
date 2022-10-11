<?php
/**
 * OrderInvoiceTransactionItem
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
 * OrderInvoiceTransactionItem Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderInvoiceTransactionItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderInvoiceTransactionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @param OrderInvoiceTransactionItemDiscounts
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'orderItemId' => 'string',
        'orderItemType' => 'string',
        'sku' => 'string',
        'title' => 'string',
        'quantity' => 'float',
        'totalGrossPriceWithDiscounts' => 'float',
        'totalNetPriceWithDiscounts' => 'float',
        'totalVatAmountWithDiscounts' => 'float',
        'discounts' => '\JTL\SCX\Lib\Channel\Client\Model\OrderInvoiceTransactionItemDiscounts[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'orderItemId' => null,
        'orderItemType' => null,
        'sku' => null,
        'title' => null,
        'quantity' => 'float',
        'totalGrossPriceWithDiscounts' => 'float',
        'totalNetPriceWithDiscounts' => 'float',
        'totalVatAmountWithDiscounts' => 'float',
        'discounts' => null
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
        'orderItemId' => 'orderItemId',
        'orderItemType' => 'orderItemType',
        'sku' => 'sku',
        'title' => 'title',
        'quantity' => 'quantity',
        'totalGrossPriceWithDiscounts' => 'totalGrossPriceWithDiscounts',
        'totalNetPriceWithDiscounts' => 'totalNetPriceWithDiscounts',
        'totalVatAmountWithDiscounts' => 'totalVatAmountWithDiscounts',
        'discounts' => 'discounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderItemId' => 'setOrderItemId',
        'orderItemType' => 'setOrderItemType',
        'sku' => 'setSku',
        'title' => 'setTitle',
        'quantity' => 'setQuantity',
        'totalGrossPriceWithDiscounts' => 'setTotalGrossPriceWithDiscounts',
        'totalNetPriceWithDiscounts' => 'setTotalNetPriceWithDiscounts',
        'totalVatAmountWithDiscounts' => 'setTotalVatAmountWithDiscounts',
        'discounts' => 'setDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderItemId' => 'getOrderItemId',
        'orderItemType' => 'getOrderItemType',
        'sku' => 'getSku',
        'title' => 'getTitle',
        'quantity' => 'getQuantity',
        'totalGrossPriceWithDiscounts' => 'getTotalGrossPriceWithDiscounts',
        'totalNetPriceWithDiscounts' => 'getTotalNetPriceWithDiscounts',
        'totalVatAmountWithDiscounts' => 'getTotalVatAmountWithDiscounts',
        'discounts' => 'getDiscounts'
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

    public const ORDER_ITEM_TYPE_ITEM = 'ITEM';
    public const ORDER_ITEM_TYPE_SHIPPING = 'SHIPPING';
    public const ORDER_ITEM_TYPE_PAYMENT = 'PAYMENT';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderItemTypeAllowableValues()
    {
        return [
            self::ORDER_ITEM_TYPE_ITEM,
            self::ORDER_ITEM_TYPE_SHIPPING,
            self::ORDER_ITEM_TYPE_PAYMENT,
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
        $this->container['orderItemId'] = $data['orderItemId'] ?? null;
        $this->container['orderItemType'] = $data['orderItemType'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['totalGrossPriceWithDiscounts'] = $data['totalGrossPriceWithDiscounts'] ?? null;
        $this->container['totalNetPriceWithDiscounts'] = $data['totalNetPriceWithDiscounts'] ?? null;
        $this->container['totalVatAmountWithDiscounts'] = $data['totalVatAmountWithDiscounts'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderItemId'] === null) {
            $invalidProperties[] = "'orderItemId' can't be null";
        }
        if ($this->container['orderItemType'] === null) {
            $invalidProperties[] = "'orderItemType' can't be null";
        }
        $allowedValues = $this->getOrderItemTypeAllowableValues();
        if (!is_null($this->container['orderItemType']) && !in_array($this->container['orderItemType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'orderItemType', must be one of '%s'",
                $this->container['orderItemType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
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


    public function getOrderItemId(): string
    {
        return $this->container['orderItemId'];
    }

    public function setOrderItemId(string $orderItemId): OrderInvoiceTransactionItem
    {
        $this->container['orderItemId'] = $orderItemId;
        return $this;
    }


    public function getOrderItemType(): string
    {
        return $this->container['orderItemType'];
    }

    public function setOrderItemType(string $orderItemType): OrderInvoiceTransactionItem
    {
        $this->container['orderItemType'] = $orderItemType;
        return $this;
    }


    public function getSku(): ?string
    {
        return $this->container['sku'];
    }

    public function setSku(?string $sku): OrderInvoiceTransactionItem
    {
        $this->container['sku'] = $sku;
        return $this;
    }


    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    public function setTitle(?string $title): OrderInvoiceTransactionItem
    {
        $this->container['title'] = $title;
        return $this;
    }


    public function getQuantity(): ?float
    {
        return $this->container['quantity'];
    }

    public function setQuantity(?float $quantity): OrderInvoiceTransactionItem
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }


    public function getTotalGrossPriceWithDiscounts(): ?float
    {
        return $this->container['totalGrossPriceWithDiscounts'];
    }

    public function setTotalGrossPriceWithDiscounts(?float $totalGrossPriceWithDiscounts): OrderInvoiceTransactionItem
    {
        $this->container['totalGrossPriceWithDiscounts'] = $totalGrossPriceWithDiscounts;
        return $this;
    }


    public function getTotalNetPriceWithDiscounts(): ?float
    {
        return $this->container['totalNetPriceWithDiscounts'];
    }

    public function setTotalNetPriceWithDiscounts(?float $totalNetPriceWithDiscounts): OrderInvoiceTransactionItem
    {
        $this->container['totalNetPriceWithDiscounts'] = $totalNetPriceWithDiscounts;
        return $this;
    }


    public function getTotalVatAmountWithDiscounts(): ?float
    {
        return $this->container['totalVatAmountWithDiscounts'];
    }

    public function setTotalVatAmountWithDiscounts(?float $totalVatAmountWithDiscounts): OrderInvoiceTransactionItem
    {
        $this->container['totalVatAmountWithDiscounts'] = $totalVatAmountWithDiscounts;
        return $this;
    }


    public function getDiscounts(): ?array
    {
        return $this->container['discounts'];
    }

    public function setDiscounts(?array $discounts): OrderInvoiceTransactionItem
    {
        $this->container['discounts'] = $discounts;
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
