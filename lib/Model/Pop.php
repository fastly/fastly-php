<?php
/**
 * Pop
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;

use \ArrayAccess;
use \Fastly\ObjectSerializer;

/**
 * Pop Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Pop implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'pop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'code' => 'string',
        'name' => 'string',
        'group' => 'string',
        'region' => 'string',
        'stats_region' => 'string',
        'billing_region' => 'string',
        'coordinates' => '\Fastly\Model\PopCoordinates',
        'shield' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'code' => null,
        'name' => null,
        'group' => null,
        'region' => null,
        'stats_region' => null,
        'billing_region' => null,
        'coordinates' => null,
        'shield' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyTypes()
    {
        return self::$fastlyTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function fastlyFormats()
    {
        return self::$fastlyFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'name' => 'name',
        'group' => 'group',
        'region' => 'region',
        'stats_region' => 'stats_region',
        'billing_region' => 'billing_region',
        'coordinates' => 'coordinates',
        'shield' => 'shield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'group' => 'setGroup',
        'region' => 'setRegion',
        'stats_region' => 'setStatsRegion',
        'billing_region' => 'setBillingRegion',
        'coordinates' => 'setCoordinates',
        'shield' => 'setShield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'group' => 'getGroup',
        'region' => 'getRegion',
        'stats_region' => 'getStatsRegion',
        'billing_region' => 'getBillingRegion',
        'coordinates' => 'getCoordinates',
        'shield' => 'getShield'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$fastlyModelName;
    }

    const REGION_APAC = 'APAC';
    const REGION_ASIA = 'Asia';
    const REGION_AF_WEST = 'AF-West';
    const REGION_EU_CENTRAL = 'EU-Central';
    const REGION_EU_EAST = 'EU-East';
    const REGION_EU_WEST = 'EU-West';
    const REGION_MX_NORTH = 'MX-North';
    const REGION_MX_CENTRAL = 'MX-Central';
    const REGION_MX_SOUTH = 'MX-South';
    const REGION_MIDDLE_EAST = 'Middle-East';
    const REGION_NORTH_AMERICA = 'North-America';
    const REGION_SA_SOUTH = 'SA-South';
    const REGION_SA_EAST = 'SA-East';
    const REGION_SA_WEST = 'SA-West';
    const REGION_SA_NORTH = 'SA-North';
    const REGION_SOUTH_AFRICA = 'South-Africa';
    const REGION_SOUTH_AMERICA = 'South-America';
    const REGION_US_CENTRAL = 'US-Central';
    const REGION_US_EAST = 'US-East';
    const REGION_US_WEST = 'US-West';
    const REGION_ASIA_SOUTH = 'Asia-South';
    const STATS_REGION_SOUTHAMERICA_STD = 'southamerica_std';
    const STATS_REGION_AFRICA_STD = 'africa_std';
    const STATS_REGION_ANZAC = 'anzac';
    const STATS_REGION_ASIA = 'asia';
    const STATS_REGION_EUROPE = 'europe';
    const STATS_REGION_USA = 'usa';
    const STATS_REGION_ASIA_INDIA = 'asia_india';
    const STATS_REGION_ASIA_SOUTHKOREA = 'asia_southkorea';
    const STATS_REGION_MEXICO = 'mexico';
    const BILLING_REGION_AFRICA = 'Africa';
    const BILLING_REGION_AUSTRALIA = 'Australia';
    const BILLING_REGION_ASIA = 'Asia';
    const BILLING_REGION_EUROPE = 'Europe';
    const BILLING_REGION_INDIA = 'India';
    const BILLING_REGION_MEXICO = 'Mexico';
    const BILLING_REGION_NORTH_AMERICA = 'North America';
    const BILLING_REGION_SOUTH_KOREA = 'South Korea';
    const BILLING_REGION_SOUTH_AMERICA = 'South America';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_APAC,
            self::REGION_ASIA,
            self::REGION_AF_WEST,
            self::REGION_EU_CENTRAL,
            self::REGION_EU_EAST,
            self::REGION_EU_WEST,
            self::REGION_MX_NORTH,
            self::REGION_MX_CENTRAL,
            self::REGION_MX_SOUTH,
            self::REGION_MIDDLE_EAST,
            self::REGION_NORTH_AMERICA,
            self::REGION_SA_SOUTH,
            self::REGION_SA_EAST,
            self::REGION_SA_WEST,
            self::REGION_SA_NORTH,
            self::REGION_SOUTH_AFRICA,
            self::REGION_SOUTH_AMERICA,
            self::REGION_US_CENTRAL,
            self::REGION_US_EAST,
            self::REGION_US_WEST,
            self::REGION_ASIA_SOUTH,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatsRegionAllowableValues()
    {
        return [
            self::STATS_REGION_SOUTHAMERICA_STD,
            self::STATS_REGION_AFRICA_STD,
            self::STATS_REGION_ANZAC,
            self::STATS_REGION_ASIA,
            self::STATS_REGION_EUROPE,
            self::STATS_REGION_USA,
            self::STATS_REGION_ASIA_INDIA,
            self::STATS_REGION_ASIA_SOUTHKOREA,
            self::STATS_REGION_MEXICO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingRegionAllowableValues()
    {
        return [
            self::BILLING_REGION_AFRICA,
            self::BILLING_REGION_AUSTRALIA,
            self::BILLING_REGION_ASIA,
            self::BILLING_REGION_EUROPE,
            self::BILLING_REGION_INDIA,
            self::BILLING_REGION_MEXICO,
            self::BILLING_REGION_NORTH_AMERICA,
            self::BILLING_REGION_SOUTH_KOREA,
            self::BILLING_REGION_SOUTH_AMERICA,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = $data['code'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['stats_region'] = $data['stats_region'] ?? null;
        $this->container['billing_region'] = $data['billing_region'] ?? null;
        $this->container['coordinates'] = $data['coordinates'] ?? null;
        $this->container['shield'] = $data['shield'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['stats_region'] === null) {
            $invalidProperties[] = "'stats_region' can't be null";
        }
        $allowedValues = $this->getStatsRegionAllowableValues();
        if (!is_null($this->container['stats_region']) && !in_array($this->container['stats_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'stats_region', must be one of '%s'",
                $this->container['stats_region'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['billing_region'] === null) {
            $invalidProperties[] = "'billing_region' can't be null";
        }
        $allowedValues = $this->getBillingRegionAllowableValues();
        if (!is_null($this->container['billing_region']) && !in_array($this->container['billing_region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'billing_region', must be one of '%s'",
                $this->container['billing_region'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code the three-letter code for the [POP](https://www.fastly.com/documentation/learning/concepts/pop/)
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name the name of the POP
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets stats_region
     *
     * @return string
     */
    public function getStatsRegion()
    {
        return $this->container['stats_region'];
    }

    /**
     * Sets stats_region
     *
     * @param string $stats_region the region used for stats reporting
     *
     * @return self
     */
    public function setStatsRegion($stats_region)
    {
        $allowedValues = $this->getStatsRegionAllowableValues();
        if (!in_array($stats_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'stats_region', must be one of '%s'",
                    $stats_region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stats_region'] = $stats_region;

        return $this;
    }

    /**
     * Gets billing_region
     *
     * @return string
     */
    public function getBillingRegion()
    {
        return $this->container['billing_region'];
    }

    /**
     * Sets billing_region
     *
     * @param string $billing_region the region used for billing
     *
     * @return self
     */
    public function setBillingRegion($billing_region)
    {
        $allowedValues = $this->getBillingRegionAllowableValues();
        if (!in_array($billing_region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'billing_region', must be one of '%s'",
                    $billing_region,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billing_region'] = $billing_region;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \Fastly\Model\PopCoordinates|null
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \Fastly\Model\PopCoordinates|null $coordinates coordinates
     *
     * @return self
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets shield
     *
     * @return string|null
     */
    public function getShield()
    {
        return $this->container['shield'];
    }

    /**
     * Sets shield
     *
     * @param string|null $shield the name of the [shield code](https://www.fastly.com/documentation/learning/concepts/shielding/#choosing-a-shield-location) if this POP is suitable for shielding
     *
     * @return self
     */
    public function setShield($shield)
    {
        $this->container['shield'] = $shield;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


