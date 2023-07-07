<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Customer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'billing_contact_id' => 'string',
        'billing_network_type' => 'string',
        'billing_ref' => 'string',
        'can_configure_wordpress' => 'bool',
        'can_reset_passwords' => 'bool',
        'can_upload_vcl' => 'bool',
        'force_2fa' => 'bool',
        'force_sso' => 'bool',
        'has_account_panel' => 'bool',
        'has_improved_events' => 'bool',
        'has_improved_ssl_config' => 'bool',
        'has_openstack_logging' => 'bool',
        'has_pci' => 'bool',
        'has_pci_passwords' => 'bool',
        'ip_whitelist' => 'string',
        'legal_contact_id' => 'string',
        'name' => 'string',
        'owner_id' => 'string',
        'phone_number' => 'string',
        'postal_address' => 'string',
        'pricing_plan' => 'string',
        'pricing_plan_id' => 'string',
        'security_contact_id' => 'string',
        'technical_contact_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'billing_contact_id' => null,
        'billing_network_type' => null,
        'billing_ref' => null,
        'can_configure_wordpress' => null,
        'can_reset_passwords' => null,
        'can_upload_vcl' => null,
        'force_2fa' => null,
        'force_sso' => null,
        'has_account_panel' => null,
        'has_improved_events' => null,
        'has_improved_ssl_config' => null,
        'has_openstack_logging' => null,
        'has_pci' => null,
        'has_pci_passwords' => null,
        'ip_whitelist' => null,
        'legal_contact_id' => null,
        'name' => null,
        'owner_id' => null,
        'phone_number' => null,
        'postal_address' => null,
        'pricing_plan' => null,
        'pricing_plan_id' => null,
        'security_contact_id' => null,
        'technical_contact_id' => null
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
        'billing_contact_id' => 'billing_contact_id',
        'billing_network_type' => 'billing_network_type',
        'billing_ref' => 'billing_ref',
        'can_configure_wordpress' => 'can_configure_wordpress',
        'can_reset_passwords' => 'can_reset_passwords',
        'can_upload_vcl' => 'can_upload_vcl',
        'force_2fa' => 'force_2fa',
        'force_sso' => 'force_sso',
        'has_account_panel' => 'has_account_panel',
        'has_improved_events' => 'has_improved_events',
        'has_improved_ssl_config' => 'has_improved_ssl_config',
        'has_openstack_logging' => 'has_openstack_logging',
        'has_pci' => 'has_pci',
        'has_pci_passwords' => 'has_pci_passwords',
        'ip_whitelist' => 'ip_whitelist',
        'legal_contact_id' => 'legal_contact_id',
        'name' => 'name',
        'owner_id' => 'owner_id',
        'phone_number' => 'phone_number',
        'postal_address' => 'postal_address',
        'pricing_plan' => 'pricing_plan',
        'pricing_plan_id' => 'pricing_plan_id',
        'security_contact_id' => 'security_contact_id',
        'technical_contact_id' => 'technical_contact_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_contact_id' => 'setBillingContactId',
        'billing_network_type' => 'setBillingNetworkType',
        'billing_ref' => 'setBillingRef',
        'can_configure_wordpress' => 'setCanConfigureWordpress',
        'can_reset_passwords' => 'setCanResetPasswords',
        'can_upload_vcl' => 'setCanUploadVcl',
        'force_2fa' => 'setForce2fa',
        'force_sso' => 'setForceSso',
        'has_account_panel' => 'setHasAccountPanel',
        'has_improved_events' => 'setHasImprovedEvents',
        'has_improved_ssl_config' => 'setHasImprovedSslConfig',
        'has_openstack_logging' => 'setHasOpenstackLogging',
        'has_pci' => 'setHasPci',
        'has_pci_passwords' => 'setHasPciPasswords',
        'ip_whitelist' => 'setIpWhitelist',
        'legal_contact_id' => 'setLegalContactId',
        'name' => 'setName',
        'owner_id' => 'setOwnerId',
        'phone_number' => 'setPhoneNumber',
        'postal_address' => 'setPostalAddress',
        'pricing_plan' => 'setPricingPlan',
        'pricing_plan_id' => 'setPricingPlanId',
        'security_contact_id' => 'setSecurityContactId',
        'technical_contact_id' => 'setTechnicalContactId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_contact_id' => 'getBillingContactId',
        'billing_network_type' => 'getBillingNetworkType',
        'billing_ref' => 'getBillingRef',
        'can_configure_wordpress' => 'getCanConfigureWordpress',
        'can_reset_passwords' => 'getCanResetPasswords',
        'can_upload_vcl' => 'getCanUploadVcl',
        'force_2fa' => 'getForce2fa',
        'force_sso' => 'getForceSso',
        'has_account_panel' => 'getHasAccountPanel',
        'has_improved_events' => 'getHasImprovedEvents',
        'has_improved_ssl_config' => 'getHasImprovedSslConfig',
        'has_openstack_logging' => 'getHasOpenstackLogging',
        'has_pci' => 'getHasPci',
        'has_pci_passwords' => 'getHasPciPasswords',
        'ip_whitelist' => 'getIpWhitelist',
        'legal_contact_id' => 'getLegalContactId',
        'name' => 'getName',
        'owner_id' => 'getOwnerId',
        'phone_number' => 'getPhoneNumber',
        'postal_address' => 'getPostalAddress',
        'pricing_plan' => 'getPricingPlan',
        'pricing_plan_id' => 'getPricingPlanId',
        'security_contact_id' => 'getSecurityContactId',
        'technical_contact_id' => 'getTechnicalContactId'
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

    const BILLING_NETWORK_TYPE__PUBLIC = 'public';
    const BILLING_NETWORK_TYPE__PRIVATE = 'private';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingNetworkTypeAllowableValues()
    {
        return [
            self::BILLING_NETWORK_TYPE__PUBLIC,
            self::BILLING_NETWORK_TYPE__PRIVATE,
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
        $this->container['billing_contact_id'] = $data['billing_contact_id'] ?? null;
        $this->container['billing_network_type'] = $data['billing_network_type'] ?? null;
        $this->container['billing_ref'] = $data['billing_ref'] ?? null;
        $this->container['can_configure_wordpress'] = $data['can_configure_wordpress'] ?? null;
        $this->container['can_reset_passwords'] = $data['can_reset_passwords'] ?? null;
        $this->container['can_upload_vcl'] = $data['can_upload_vcl'] ?? null;
        $this->container['force_2fa'] = $data['force_2fa'] ?? null;
        $this->container['force_sso'] = $data['force_sso'] ?? null;
        $this->container['has_account_panel'] = $data['has_account_panel'] ?? null;
        $this->container['has_improved_events'] = $data['has_improved_events'] ?? null;
        $this->container['has_improved_ssl_config'] = $data['has_improved_ssl_config'] ?? null;
        $this->container['has_openstack_logging'] = $data['has_openstack_logging'] ?? null;
        $this->container['has_pci'] = $data['has_pci'] ?? null;
        $this->container['has_pci_passwords'] = $data['has_pci_passwords'] ?? null;
        $this->container['ip_whitelist'] = $data['ip_whitelist'] ?? null;
        $this->container['legal_contact_id'] = $data['legal_contact_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['postal_address'] = $data['postal_address'] ?? null;
        $this->container['pricing_plan'] = $data['pricing_plan'] ?? null;
        $this->container['pricing_plan_id'] = $data['pricing_plan_id'] ?? null;
        $this->container['security_contact_id'] = $data['security_contact_id'] ?? null;
        $this->container['technical_contact_id'] = $data['technical_contact_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBillingNetworkTypeAllowableValues();
        if (!is_null($this->container['billing_network_type']) && !in_array($this->container['billing_network_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'billing_network_type', must be one of '%s'",
                $this->container['billing_network_type'],
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
     * Gets billing_contact_id
     *
     * @return string|null
     */
    public function getBillingContactId()
    {
        return $this->container['billing_contact_id'];
    }

    /**
     * Sets billing_contact_id
     *
     * @param string|null $billing_contact_id The alphanumeric string representing the primary billing contact.
     *
     * @return self
     */
    public function setBillingContactId($billing_contact_id)
    {
        $this->container['billing_contact_id'] = $billing_contact_id;

        return $this;
    }

    /**
     * Gets billing_network_type
     *
     * @return string|null
     */
    public function getBillingNetworkType()
    {
        return $this->container['billing_network_type'];
    }

    /**
     * Sets billing_network_type
     *
     * @param string|null $billing_network_type Customer's current network revenue type.
     *
     * @return self
     */
    public function setBillingNetworkType($billing_network_type)
    {
        $allowedValues = $this->getBillingNetworkTypeAllowableValues();
        if (!is_null($billing_network_type) && !in_array($billing_network_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'billing_network_type', must be one of '%s'",
                    $billing_network_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billing_network_type'] = $billing_network_type;

        return $this;
    }

    /**
     * Gets billing_ref
     *
     * @return string|null
     */
    public function getBillingRef()
    {
        return $this->container['billing_ref'];
    }

    /**
     * Sets billing_ref
     *
     * @param string|null $billing_ref Used for adding purchased orders to customer's account.
     *
     * @return self
     */
    public function setBillingRef($billing_ref)
    {
        $this->container['billing_ref'] = $billing_ref;

        return $this;
    }

    /**
     * Gets can_configure_wordpress
     *
     * @return bool|null
     */
    public function getCanConfigureWordpress()
    {
        return $this->container['can_configure_wordpress'];
    }

    /**
     * Sets can_configure_wordpress
     *
     * @param bool|null $can_configure_wordpress Whether this customer can view or edit wordpress.
     *
     * @return self
     */
    public function setCanConfigureWordpress($can_configure_wordpress)
    {
        $this->container['can_configure_wordpress'] = $can_configure_wordpress;

        return $this;
    }

    /**
     * Gets can_reset_passwords
     *
     * @return bool|null
     */
    public function getCanResetPasswords()
    {
        return $this->container['can_reset_passwords'];
    }

    /**
     * Sets can_reset_passwords
     *
     * @param bool|null $can_reset_passwords Whether this customer can reset passwords.
     *
     * @return self
     */
    public function setCanResetPasswords($can_reset_passwords)
    {
        $this->container['can_reset_passwords'] = $can_reset_passwords;

        return $this;
    }

    /**
     * Gets can_upload_vcl
     *
     * @return bool|null
     */
    public function getCanUploadVcl()
    {
        return $this->container['can_upload_vcl'];
    }

    /**
     * Sets can_upload_vcl
     *
     * @param bool|null $can_upload_vcl Whether this customer can upload VCL.
     *
     * @return self
     */
    public function setCanUploadVcl($can_upload_vcl)
    {
        $this->container['can_upload_vcl'] = $can_upload_vcl;

        return $this;
    }

    /**
     * Gets force_2fa
     *
     * @return bool|null
     */
    public function getForce2fa()
    {
        return $this->container['force_2fa'];
    }

    /**
     * Sets force_2fa
     *
     * @param bool|null $force_2fa Specifies whether 2FA is forced or not forced on the customer account. Logs out non-2FA users once 2FA is force enabled.
     *
     * @return self
     */
    public function setForce2fa($force_2fa)
    {
        $this->container['force_2fa'] = $force_2fa;

        return $this;
    }

    /**
     * Gets force_sso
     *
     * @return bool|null
     */
    public function getForceSso()
    {
        return $this->container['force_sso'];
    }

    /**
     * Sets force_sso
     *
     * @param bool|null $force_sso Specifies whether SSO is forced or not forced on the customer account.
     *
     * @return self
     */
    public function setForceSso($force_sso)
    {
        $this->container['force_sso'] = $force_sso;

        return $this;
    }

    /**
     * Gets has_account_panel
     *
     * @return bool|null
     */
    public function getHasAccountPanel()
    {
        return $this->container['has_account_panel'];
    }

    /**
     * Sets has_account_panel
     *
     * @param bool|null $has_account_panel Specifies whether the account has access or does not have access to the account panel.
     *
     * @return self
     */
    public function setHasAccountPanel($has_account_panel)
    {
        $this->container['has_account_panel'] = $has_account_panel;

        return $this;
    }

    /**
     * Gets has_improved_events
     *
     * @return bool|null
     */
    public function getHasImprovedEvents()
    {
        return $this->container['has_improved_events'];
    }

    /**
     * Sets has_improved_events
     *
     * @param bool|null $has_improved_events Specifies whether the account has access or does not have access to the improved events.
     *
     * @return self
     */
    public function setHasImprovedEvents($has_improved_events)
    {
        $this->container['has_improved_events'] = $has_improved_events;

        return $this;
    }

    /**
     * Gets has_improved_ssl_config
     *
     * @return bool|null
     */
    public function getHasImprovedSslConfig()
    {
        return $this->container['has_improved_ssl_config'];
    }

    /**
     * Sets has_improved_ssl_config
     *
     * @param bool|null $has_improved_ssl_config Whether this customer can view or edit the SSL config.
     *
     * @return self
     */
    public function setHasImprovedSslConfig($has_improved_ssl_config)
    {
        $this->container['has_improved_ssl_config'] = $has_improved_ssl_config;

        return $this;
    }

    /**
     * Gets has_openstack_logging
     *
     * @return bool|null
     */
    public function getHasOpenstackLogging()
    {
        return $this->container['has_openstack_logging'];
    }

    /**
     * Sets has_openstack_logging
     *
     * @param bool|null $has_openstack_logging Specifies whether the account has enabled or not enabled openstack logging.
     *
     * @return self
     */
    public function setHasOpenstackLogging($has_openstack_logging)
    {
        $this->container['has_openstack_logging'] = $has_openstack_logging;

        return $this;
    }

    /**
     * Gets has_pci
     *
     * @return bool|null
     */
    public function getHasPci()
    {
        return $this->container['has_pci'];
    }

    /**
     * Sets has_pci
     *
     * @param bool|null $has_pci Specifies whether the account can edit PCI for a service.
     *
     * @return self
     */
    public function setHasPci($has_pci)
    {
        $this->container['has_pci'] = $has_pci;

        return $this;
    }

    /**
     * Gets has_pci_passwords
     *
     * @return bool|null
     */
    public function getHasPciPasswords()
    {
        return $this->container['has_pci_passwords'];
    }

    /**
     * Sets has_pci_passwords
     *
     * @param bool|null $has_pci_passwords Specifies whether PCI passwords are required for the account.
     *
     * @return self
     */
    public function setHasPciPasswords($has_pci_passwords)
    {
        $this->container['has_pci_passwords'] = $has_pci_passwords;

        return $this;
    }

    /**
     * Gets ip_whitelist
     *
     * @return string|null
     */
    public function getIpWhitelist()
    {
        return $this->container['ip_whitelist'];
    }

    /**
     * Sets ip_whitelist
     *
     * @param string|null $ip_whitelist The range of IP addresses authorized to access the customer account.
     *
     * @return self
     */
    public function setIpWhitelist($ip_whitelist)
    {
        $this->container['ip_whitelist'] = $ip_whitelist;

        return $this;
    }

    /**
     * Gets legal_contact_id
     *
     * @return string|null
     */
    public function getLegalContactId()
    {
        return $this->container['legal_contact_id'];
    }

    /**
     * Sets legal_contact_id
     *
     * @param string|null $legal_contact_id The alphanumeric string identifying the account's legal contact.
     *
     * @return self
     */
    public function setLegalContactId($legal_contact_id)
    {
        $this->container['legal_contact_id'] = $legal_contact_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the customer, generally the company name.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id The alphanumeric string identifying the account owner.
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number associated with the account.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return string|null
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param string|null $postal_address The postal address associated with the account.
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        $this->container['postal_address'] = $postal_address;

        return $this;
    }

    /**
     * Gets pricing_plan
     *
     * @return string|null
     */
    public function getPricingPlan()
    {
        return $this->container['pricing_plan'];
    }

    /**
     * Sets pricing_plan
     *
     * @param string|null $pricing_plan The pricing plan this customer is under.
     *
     * @return self
     */
    public function setPricingPlan($pricing_plan)
    {
        $this->container['pricing_plan'] = $pricing_plan;

        return $this;
    }

    /**
     * Gets pricing_plan_id
     *
     * @return string|null
     */
    public function getPricingPlanId()
    {
        return $this->container['pricing_plan_id'];
    }

    /**
     * Sets pricing_plan_id
     *
     * @param string|null $pricing_plan_id The alphanumeric string identifying the pricing plan.
     *
     * @return self
     */
    public function setPricingPlanId($pricing_plan_id)
    {
        $this->container['pricing_plan_id'] = $pricing_plan_id;

        return $this;
    }

    /**
     * Gets security_contact_id
     *
     * @return string|null
     */
    public function getSecurityContactId()
    {
        return $this->container['security_contact_id'];
    }

    /**
     * Sets security_contact_id
     *
     * @param string|null $security_contact_id The alphanumeric string identifying the account's security contact.
     *
     * @return self
     */
    public function setSecurityContactId($security_contact_id)
    {
        $this->container['security_contact_id'] = $security_contact_id;

        return $this;
    }

    /**
     * Gets technical_contact_id
     *
     * @return string|null
     */
    public function getTechnicalContactId()
    {
        return $this->container['technical_contact_id'];
    }

    /**
     * Sets technical_contact_id
     *
     * @param string|null $technical_contact_id The alphanumeric string identifying the account's technical contact.
     *
     * @return self
     */
    public function setTechnicalContactId($technical_contact_id)
    {
        $this->container['technical_contact_id'] = $technical_contact_id;

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


