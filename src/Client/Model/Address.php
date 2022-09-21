<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  JTL\SCX\Lib\Channel\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'gender' => 'string',
        'companyName' => 'string',
        'street' => 'string',
        'houseNumber' => 'string',
        'addition' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'phone' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'firstName' => null,
        'lastName' => null,
        'gender' => null,
        'companyName' => null,
        'street' => null,
        'houseNumber' => null,
        'addition' => null,
        'postcode' => null,
        'city' => null,
        'phone' => null,
        'country' => null
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
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'gender' => 'gender',
        'companyName' => 'companyName',
        'street' => 'street',
        'houseNumber' => 'houseNumber',
        'addition' => 'addition',
        'postcode' => 'postcode',
        'city' => 'city',
        'phone' => 'phone',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'gender' => 'setGender',
        'companyName' => 'setCompanyName',
        'street' => 'setStreet',
        'houseNumber' => 'setHouseNumber',
        'addition' => 'setAddition',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'phone' => 'setPhone',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'gender' => 'getGender',
        'companyName' => 'getCompanyName',
        'street' => 'getStreet',
        'houseNumber' => 'getHouseNumber',
        'addition' => 'getAddition',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'phone' => 'getPhone',
        'country' => 'getCountry'
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

    public const GENDER_MALE = 'male';
    public const GENDER_FEMALE = 'female';
    public const GENDER_DIVERSE = 'diverse';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_DIVERSE,
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
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['lastName'] = $data['lastName'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['houseNumber'] = $data['houseNumber'] ?? null;
        $this->container['addition'] = $data['addition'] ?? null;
        $this->container['postcode'] = $data['postcode'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     * @codeCoverageIgnore
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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


    public function getFirstName(): ?string
    {
        return $this->container['firstName'];
    }

    public function setFirstName(?string $firstName): Address
    {
        $this->container['firstName'] = $firstName;
        return $this;
    }


    public function getLastName(): string
    {
        return $this->container['lastName'];
    }

    public function setLastName(string $lastName): Address
    {
        $this->container['lastName'] = $lastName;
        return $this;
    }


    public function getGender(): ?string
    {
        return $this->container['gender'];
    }

    public function setGender(?string $gender): Address
    {
        $this->container['gender'] = $gender;
        return $this;
    }


    public function getCompanyName(): ?string
    {
        return $this->container['companyName'];
    }

    public function setCompanyName(?string $companyName): Address
    {
        $this->container['companyName'] = $companyName;
        return $this;
    }


    public function getStreet(): string
    {
        return $this->container['street'];
    }

    public function setStreet(string $street): Address
    {
        $this->container['street'] = $street;
        return $this;
    }


    public function getHouseNumber(): ?string
    {
        return $this->container['houseNumber'];
    }

    public function setHouseNumber(?string $houseNumber): Address
    {
        $this->container['houseNumber'] = $houseNumber;
        return $this;
    }


    public function getAddition(): ?string
    {
        return $this->container['addition'];
    }

    public function setAddition(?string $addition): Address
    {
        $this->container['addition'] = $addition;
        return $this;
    }


    public function getPostcode(): ?string
    {
        return $this->container['postcode'];
    }

    public function setPostcode(?string $postcode): Address
    {
        $this->container['postcode'] = $postcode;
        return $this;
    }


    public function getCity(): string
    {
        return $this->container['city'];
    }

    public function setCity(string $city): Address
    {
        $this->container['city'] = $city;
        return $this;
    }


    public function getPhone(): ?string
    {
        return $this->container['phone'];
    }

    public function setPhone(?string $phone): Address
    {
        $this->container['phone'] = $phone;
        return $this;
    }


    public function getCountry(): string
    {
        return $this->container['country'];
    }

    public function setCountry(string $country): Address
    {
        $this->container['country'] = $country;
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
