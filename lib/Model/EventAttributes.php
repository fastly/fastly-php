<?php
/**
 * EventAttributes
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
 * EventAttributes Class Doc Comment
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EventAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $fastlyModelName = 'event_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $fastlyTypes = [
        'admin' => 'bool',
        'created_at' => '\DateTime',
        'customer_id' => 'string',
        'description' => 'string',
        'event_type' => 'string',
        'ip' => 'string',
        'metadata' => 'array<string,object>',
        'service_id' => 'string',
        'user_id' => 'string',
        'token_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $fastlyFormats = [
        'admin' => null,
        'created_at' => 'date-time',
        'customer_id' => null,
        'description' => null,
        'event_type' => null,
        'ip' => null,
        'metadata' => null,
        'service_id' => null,
        'user_id' => null,
        'token_id' => null
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
        'admin' => 'admin',
        'created_at' => 'created_at',
        'customer_id' => 'customer_id',
        'description' => 'description',
        'event_type' => 'event_type',
        'ip' => 'ip',
        'metadata' => 'metadata',
        'service_id' => 'service_id',
        'user_id' => 'user_id',
        'token_id' => 'token_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin' => 'setAdmin',
        'created_at' => 'setCreatedAt',
        'customer_id' => 'setCustomerId',
        'description' => 'setDescription',
        'event_type' => 'setEventType',
        'ip' => 'setIp',
        'metadata' => 'setMetadata',
        'service_id' => 'setServiceId',
        'user_id' => 'setUserId',
        'token_id' => 'setTokenId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin' => 'getAdmin',
        'created_at' => 'getCreatedAt',
        'customer_id' => 'getCustomerId',
        'description' => 'getDescription',
        'event_type' => 'getEventType',
        'ip' => 'getIp',
        'metadata' => 'getMetadata',
        'service_id' => 'getServiceId',
        'user_id' => 'getUserId',
        'token_id' => 'getTokenId'
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

    const EVENT_TYPE_API_KEY_CREATE = 'api_key.create';
    const EVENT_TYPE_ACL_CREATE = 'acl.create';
    const EVENT_TYPE_ACL_DELETE = 'acl.delete';
    const EVENT_TYPE_ACL_UPDATE = 'acl.update';
    const EVENT_TYPE_ADDRESS_CREATE = 'address.create';
    const EVENT_TYPE_ADDRESS_DELETE = 'address.delete';
    const EVENT_TYPE_ADDRESS_UPDATE = 'address.update';
    const EVENT_TYPE_ALERTS_DEFINITION_CREATE = 'alerts.definition.create';
    const EVENT_TYPE_ALERTS_DEFINITION_DELETE = 'alerts.definition.delete';
    const EVENT_TYPE_ALERTS_DEFINITION_TEST = 'alerts.definition.test';
    const EVENT_TYPE_ALERTS_DEFINITION_UPDATE = 'alerts.definition.update';
    const EVENT_TYPE_BACKEND_CREATE = 'backend.create';
    const EVENT_TYPE_BACKEND_DELETE = 'backend.delete';
    const EVENT_TYPE_BACKEND_UPDATE = 'backend.update';
    const EVENT_TYPE_BILLING_CONTACT_UPDATE = 'billing.contact_update';
    const EVENT_TYPE_CACHE_SETTINGS_CREATE = 'cache_settings.create';
    const EVENT_TYPE_CACHE_SETTINGS_DELETE = 'cache_settings.delete';
    const EVENT_TYPE_CACHE_SETTINGS_UPDATE = 'cache_settings.update';
    const EVENT_TYPE_CUSTOMER_CREATE = 'customer.create';
    const EVENT_TYPE_CUSTOMER_PRICING = 'customer.pricing';
    const EVENT_TYPE_CUSTOMER_UPDATE = 'customer.update';
    const EVENT_TYPE_CUSTOMER_FEATURE_CREATE = 'customer_feature.create';
    const EVENT_TYPE_CUSTOMER_FEATURE_DELETE = 'customer_feature.delete';
    const EVENT_TYPE_DIRECTOR_CREATE = 'director.create';
    const EVENT_TYPE_DIRECTOR_DELETE = 'director.delete';
    const EVENT_TYPE_DIRECTOR_UPDATE = 'director.update';
    const EVENT_TYPE_DIRECTOR_BACKEND_CREATE = 'director_backend.create';
    const EVENT_TYPE_DIRECTOR_BACKEND_DELETE = 'director_backend.delete';
    const EVENT_TYPE_DOMAIN_CREATE = 'domain.create';
    const EVENT_TYPE_DOMAIN_DELETE = 'domain.delete';
    const EVENT_TYPE_DOMAIN_UPDATE = 'domain.update';
    const EVENT_TYPE_GZIP_CREATE = 'gzip.create';
    const EVENT_TYPE_GZIP_DELETE = 'gzip.delete';
    const EVENT_TYPE_GZIP_UPDATE = 'gzip.update';
    const EVENT_TYPE_HEADER_CREATE = 'header.create';
    const EVENT_TYPE_HEADER_DELETE = 'header.delete';
    const EVENT_TYPE_HEADER_UPDATE = 'header.update';
    const EVENT_TYPE_HEALTHCHECK_CREATE = 'healthcheck.create';
    const EVENT_TYPE_HEALTHCHECK_DELETE = 'healthcheck.delete';
    const EVENT_TYPE_HEALTHCHECK_UPDATE = 'healthcheck.update';
    const EVENT_TYPE_INVITATION_ACCEPT = 'invitation.accept';
    const EVENT_TYPE_INVITATION_SENT = 'invitation.sent';
    const EVENT_TYPE_INVOICE_FAILED_PAYMENT = 'invoice.failed_payment';
    const EVENT_TYPE_INVOICE_PAYMENT = 'invoice.payment';
    const EVENT_TYPE_IO_SETTINGS_CREATE = 'io_settings.create';
    const EVENT_TYPE_IO_SETTINGS_DELETE = 'io_settings.delete';
    const EVENT_TYPE_IO_SETTINGS_UPDATE = 'io_settings.update';
    const EVENT_TYPE_LOGGING_CREATE = 'logging.create';
    const EVENT_TYPE_LOGGING_DELETE = 'logging.delete';
    const EVENT_TYPE_LOGGING_UPDATE = 'logging.update';
    const EVENT_TYPE_POOL_CREATE = 'pool.create';
    const EVENT_TYPE_POOL_DELETE = 'pool.delete';
    const EVENT_TYPE_POOL_UPDATE = 'pool.update';
    const EVENT_TYPE_REQUEST_SETTINGS_CREATE = 'request_settings.create';
    const EVENT_TYPE_REQUEST_SETTINGS_DELETE = 'request_settings.delete';
    const EVENT_TYPE_REQUEST_SETTINGS_UPDATE = 'request_settings.update';
    const EVENT_TYPE_RESPONSE_OBJECT_CREATE = 'response_object.create';
    const EVENT_TYPE_RESPONSE_OBJECT_DELETE = 'response_object.delete';
    const EVENT_TYPE_RESPONSE_OBJECT_UPDATE = 'response_object.update';
    const EVENT_TYPE_RULE_STATUS_UPDATE = 'rule_status.update';
    const EVENT_TYPE_RULE_STATUS_UPSERT = 'rule_status.upsert';
    const EVENT_TYPE_SECURITY_WORKSPACE_CREATE = 'security.workspace.create';
    const EVENT_TYPE_SECURITY_WORKSPACE_UPDATE = 'security.workspace.update';
    const EVENT_TYPE_SECURITY_WORKSPACE_DELETE = 'security.workspace.delete';
    const EVENT_TYPE_SECURITY_REDACTION_CREATE = 'security.redaction.create';
    const EVENT_TYPE_SECURITY_REDACTION_UPDATE = 'security.redaction.update';
    const EVENT_TYPE_SECURITY_REDACTION_DELETE = 'security.redaction.delete';
    const EVENT_TYPE_SECURITY_RULE_CREATE = 'security.rule.create';
    const EVENT_TYPE_SECURITY_RULE_UPDATE = 'security.rule.update';
    const EVENT_TYPE_SECURITY_RULE_DELETE = 'security.rule.delete';
    const EVENT_TYPE_SECURITY_VIRTUAL_PATCH_CREATE = 'security.virtual_patch.create';
    const EVENT_TYPE_SECURITY_VIRTUAL_PATCH_UPDATE = 'security.virtual_patch.update';
    const EVENT_TYPE_SECURITY_VIRTUAL_PATCH_DELETE = 'security.virtual_patch.delete';
    const EVENT_TYPE_SECURITY_EVENT_UPDATE = 'security.event.update';
    const EVENT_TYPE_SERVER_CREATE = 'server.create';
    const EVENT_TYPE_SERVER_DELETE = 'server.delete';
    const EVENT_TYPE_SERVER_UPDATE = 'server.update';
    const EVENT_TYPE_SERVICE_CREATE = 'service.create';
    const EVENT_TYPE_SERVICE_DELETE = 'service.delete';
    const EVENT_TYPE_SERVICE_MOVE = 'service.move';
    const EVENT_TYPE_SERVICE_MOVE_DESTINATION = 'service.move_destination';
    const EVENT_TYPE_SERVICE_MOVE_SOURCE = 'service.move_source';
    const EVENT_TYPE_SERVICE_PURGE_ALL = 'service.purge_all';
    const EVENT_TYPE_SERVICE_UPDATE = 'service.update';
    const EVENT_TYPE_SERVICE_AUTHORIZATION_CREATE = 'service_authorization.create';
    const EVENT_TYPE_SERVICE_AUTHORIZATION_DELETE = 'service_authorization.delete';
    const EVENT_TYPE_SERVICE_AUTHORIZATION_UPDATE = 'service_authorization.update';
    const EVENT_TYPE_TLS_BULK_CERTIFICATE_CREATE = 'tls.bulk_certificate.create';
    const EVENT_TYPE_TLS_BULK_CERTIFICATE_DELETE = 'tls.bulk_certificate.delete';
    const EVENT_TYPE_TLS_BULK_CERTIFICATE_UPDATE = 'tls.bulk_certificate.update';
    const EVENT_TYPE_TLS_CERTIFICATE_CREATE = 'tls.certificate.create';
    const EVENT_TYPE_TLS_CERTIFICATE_EXPIRATION_EMAIL = 'tls.certificate.expiration_email';
    const EVENT_TYPE_TLS_CERTIFICATE_UPDATE = 'tls.certificate.update';
    const EVENT_TYPE_TLS_CERTIFICATE_DELETE = 'tls.certificate.delete';
    const EVENT_TYPE_TLS_CONFIGURATION_UPDATE = 'tls.configuration.update';
    const EVENT_TYPE_TLS_PRIVATE_KEY_CREATE = 'tls.private_key.create';
    const EVENT_TYPE_TLS_PRIVATE_KEY_DELETE = 'tls.private_key.delete';
    const EVENT_TYPE_TLS_ACTIVATION_ENABLE = 'tls.activation.enable';
    const EVENT_TYPE_TLS_ACTIVATION_UPDATE = 'tls.activation.update';
    const EVENT_TYPE_TLS_ACTIVATION_DISABLE = 'tls.activation.disable';
    const EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_CREATE = 'tls.globalsign.domain.create';
    const EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_VERIFY = 'tls.globalsign.domain.verify';
    const EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_DELETE = 'tls.globalsign.domain.delete';
    const EVENT_TYPE_TLS_SUBSCRIPTION_CREATE = 'tls.subscription.create';
    const EVENT_TYPE_TLS_SUBSCRIPTION_DELETE = 'tls.subscription.delete';
    const EVENT_TYPE_TLS_SUBSCRIPTION_DNS_CHECK_EMAIL = 'tls.subscription.dns_check_email';
    const EVENT_TYPE_TOKEN_CREATE = 'token.create';
    const EVENT_TYPE_TOKEN_DESTROY = 'token.destroy';
    const EVENT_TYPE_TWO_FACTOR_AUTH_DISABLE = 'two_factor_auth.disable';
    const EVENT_TYPE_TWO_FACTOR_AUTH_ENABLE = 'two_factor_auth.enable';
    const EVENT_TYPE_USER_CREATE = 'user.create';
    const EVENT_TYPE_USER_DESTROY = 'user.destroy';
    const EVENT_TYPE_USER_LOCK = 'user.lock';
    const EVENT_TYPE_USER_LOGIN = 'user.login';
    const EVENT_TYPE_USER_LOGIN_FAILURE = 'user.login_failure';
    const EVENT_TYPE_USER_LOGOUT = 'user.logout';
    const EVENT_TYPE_USER_PASSWORD_UPDATE = 'user.password_update';
    const EVENT_TYPE_USER_UNLOCK = 'user.unlock';
    const EVENT_TYPE_USER_UPDATE = 'user.update';
    const EVENT_TYPE_VCL_CREATE = 'vcl.create';
    const EVENT_TYPE_VCL_DELETE = 'vcl.delete';
    const EVENT_TYPE_VCL_UPDATE = 'vcl.update';
    const EVENT_TYPE_VERSION_ACTIVATE = 'version.activate';
    const EVENT_TYPE_VERSION_CLONE = 'version.clone';
    const EVENT_TYPE_VERSION_COPY = 'version.copy';
    const EVENT_TYPE_VERSION_COPY_DESTINATION = 'version.copy_destination';
    const EVENT_TYPE_VERSION_COPY_SOURCE = 'version.copy_source';
    const EVENT_TYPE_VERSION_CREATE = 'version.create';
    const EVENT_TYPE_VERSION_DEACTIVATE = 'version.deactivate';
    const EVENT_TYPE_VERSION_LOCK = 'version.lock';
    const EVENT_TYPE_VERSION_UPDATE = 'version.update';
    const EVENT_TYPE_WAF_CONFIGURATION_SET_UPDATE = 'waf.configuration_set_update';
    const EVENT_TYPE_WAF_CREATE = 'waf.create';
    const EVENT_TYPE_WAF_DELETE = 'waf.delete';
    const EVENT_TYPE_WAF_UPDATE = 'waf.update';
    const EVENT_TYPE_WAF_ENABLE = 'waf.enable';
    const EVENT_TYPE_WAF_DISABLE = 'waf.disable';
    const EVENT_TYPE_WAF_OWASP_CREATE = 'waf.owasp.create';
    const EVENT_TYPE_WAF_OWASP_UPDATE = 'waf.owasp.update';
    const EVENT_TYPE_WAF_RULESET_DEPLOY = 'waf.ruleset.deploy';
    const EVENT_TYPE_WAF_RULESET_DEPLOY_FAILURE = 'waf.ruleset.deploy_failure';
    const EVENT_TYPE_WORDPRESS_CREATE = 'wordpress.create';
    const EVENT_TYPE_WORDPRESS_DELETE = 'wordpress.delete';
    const EVENT_TYPE_WORDPRESS_UPDATE = 'wordpress.update';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_API_KEY_CREATE,
            self::EVENT_TYPE_ACL_CREATE,
            self::EVENT_TYPE_ACL_DELETE,
            self::EVENT_TYPE_ACL_UPDATE,
            self::EVENT_TYPE_ADDRESS_CREATE,
            self::EVENT_TYPE_ADDRESS_DELETE,
            self::EVENT_TYPE_ADDRESS_UPDATE,
            self::EVENT_TYPE_ALERTS_DEFINITION_CREATE,
            self::EVENT_TYPE_ALERTS_DEFINITION_DELETE,
            self::EVENT_TYPE_ALERTS_DEFINITION_TEST,
            self::EVENT_TYPE_ALERTS_DEFINITION_UPDATE,
            self::EVENT_TYPE_BACKEND_CREATE,
            self::EVENT_TYPE_BACKEND_DELETE,
            self::EVENT_TYPE_BACKEND_UPDATE,
            self::EVENT_TYPE_BILLING_CONTACT_UPDATE,
            self::EVENT_TYPE_CACHE_SETTINGS_CREATE,
            self::EVENT_TYPE_CACHE_SETTINGS_DELETE,
            self::EVENT_TYPE_CACHE_SETTINGS_UPDATE,
            self::EVENT_TYPE_CUSTOMER_CREATE,
            self::EVENT_TYPE_CUSTOMER_PRICING,
            self::EVENT_TYPE_CUSTOMER_UPDATE,
            self::EVENT_TYPE_CUSTOMER_FEATURE_CREATE,
            self::EVENT_TYPE_CUSTOMER_FEATURE_DELETE,
            self::EVENT_TYPE_DIRECTOR_CREATE,
            self::EVENT_TYPE_DIRECTOR_DELETE,
            self::EVENT_TYPE_DIRECTOR_UPDATE,
            self::EVENT_TYPE_DIRECTOR_BACKEND_CREATE,
            self::EVENT_TYPE_DIRECTOR_BACKEND_DELETE,
            self::EVENT_TYPE_DOMAIN_CREATE,
            self::EVENT_TYPE_DOMAIN_DELETE,
            self::EVENT_TYPE_DOMAIN_UPDATE,
            self::EVENT_TYPE_GZIP_CREATE,
            self::EVENT_TYPE_GZIP_DELETE,
            self::EVENT_TYPE_GZIP_UPDATE,
            self::EVENT_TYPE_HEADER_CREATE,
            self::EVENT_TYPE_HEADER_DELETE,
            self::EVENT_TYPE_HEADER_UPDATE,
            self::EVENT_TYPE_HEALTHCHECK_CREATE,
            self::EVENT_TYPE_HEALTHCHECK_DELETE,
            self::EVENT_TYPE_HEALTHCHECK_UPDATE,
            self::EVENT_TYPE_INVITATION_ACCEPT,
            self::EVENT_TYPE_INVITATION_SENT,
            self::EVENT_TYPE_INVOICE_FAILED_PAYMENT,
            self::EVENT_TYPE_INVOICE_PAYMENT,
            self::EVENT_TYPE_IO_SETTINGS_CREATE,
            self::EVENT_TYPE_IO_SETTINGS_DELETE,
            self::EVENT_TYPE_IO_SETTINGS_UPDATE,
            self::EVENT_TYPE_LOGGING_CREATE,
            self::EVENT_TYPE_LOGGING_DELETE,
            self::EVENT_TYPE_LOGGING_UPDATE,
            self::EVENT_TYPE_POOL_CREATE,
            self::EVENT_TYPE_POOL_DELETE,
            self::EVENT_TYPE_POOL_UPDATE,
            self::EVENT_TYPE_REQUEST_SETTINGS_CREATE,
            self::EVENT_TYPE_REQUEST_SETTINGS_DELETE,
            self::EVENT_TYPE_REQUEST_SETTINGS_UPDATE,
            self::EVENT_TYPE_RESPONSE_OBJECT_CREATE,
            self::EVENT_TYPE_RESPONSE_OBJECT_DELETE,
            self::EVENT_TYPE_RESPONSE_OBJECT_UPDATE,
            self::EVENT_TYPE_RULE_STATUS_UPDATE,
            self::EVENT_TYPE_RULE_STATUS_UPSERT,
            self::EVENT_TYPE_SECURITY_WORKSPACE_CREATE,
            self::EVENT_TYPE_SECURITY_WORKSPACE_UPDATE,
            self::EVENT_TYPE_SECURITY_WORKSPACE_DELETE,
            self::EVENT_TYPE_SECURITY_REDACTION_CREATE,
            self::EVENT_TYPE_SECURITY_REDACTION_UPDATE,
            self::EVENT_TYPE_SECURITY_REDACTION_DELETE,
            self::EVENT_TYPE_SECURITY_RULE_CREATE,
            self::EVENT_TYPE_SECURITY_RULE_UPDATE,
            self::EVENT_TYPE_SECURITY_RULE_DELETE,
            self::EVENT_TYPE_SECURITY_VIRTUAL_PATCH_CREATE,
            self::EVENT_TYPE_SECURITY_VIRTUAL_PATCH_UPDATE,
            self::EVENT_TYPE_SECURITY_VIRTUAL_PATCH_DELETE,
            self::EVENT_TYPE_SECURITY_EVENT_UPDATE,
            self::EVENT_TYPE_SERVER_CREATE,
            self::EVENT_TYPE_SERVER_DELETE,
            self::EVENT_TYPE_SERVER_UPDATE,
            self::EVENT_TYPE_SERVICE_CREATE,
            self::EVENT_TYPE_SERVICE_DELETE,
            self::EVENT_TYPE_SERVICE_MOVE,
            self::EVENT_TYPE_SERVICE_MOVE_DESTINATION,
            self::EVENT_TYPE_SERVICE_MOVE_SOURCE,
            self::EVENT_TYPE_SERVICE_PURGE_ALL,
            self::EVENT_TYPE_SERVICE_UPDATE,
            self::EVENT_TYPE_SERVICE_AUTHORIZATION_CREATE,
            self::EVENT_TYPE_SERVICE_AUTHORIZATION_DELETE,
            self::EVENT_TYPE_SERVICE_AUTHORIZATION_UPDATE,
            self::EVENT_TYPE_TLS_BULK_CERTIFICATE_CREATE,
            self::EVENT_TYPE_TLS_BULK_CERTIFICATE_DELETE,
            self::EVENT_TYPE_TLS_BULK_CERTIFICATE_UPDATE,
            self::EVENT_TYPE_TLS_CERTIFICATE_CREATE,
            self::EVENT_TYPE_TLS_CERTIFICATE_EXPIRATION_EMAIL,
            self::EVENT_TYPE_TLS_CERTIFICATE_UPDATE,
            self::EVENT_TYPE_TLS_CERTIFICATE_DELETE,
            self::EVENT_TYPE_TLS_CONFIGURATION_UPDATE,
            self::EVENT_TYPE_TLS_PRIVATE_KEY_CREATE,
            self::EVENT_TYPE_TLS_PRIVATE_KEY_DELETE,
            self::EVENT_TYPE_TLS_ACTIVATION_ENABLE,
            self::EVENT_TYPE_TLS_ACTIVATION_UPDATE,
            self::EVENT_TYPE_TLS_ACTIVATION_DISABLE,
            self::EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_CREATE,
            self::EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_VERIFY,
            self::EVENT_TYPE_TLS_GLOBALSIGN_DOMAIN_DELETE,
            self::EVENT_TYPE_TLS_SUBSCRIPTION_CREATE,
            self::EVENT_TYPE_TLS_SUBSCRIPTION_DELETE,
            self::EVENT_TYPE_TLS_SUBSCRIPTION_DNS_CHECK_EMAIL,
            self::EVENT_TYPE_TOKEN_CREATE,
            self::EVENT_TYPE_TOKEN_DESTROY,
            self::EVENT_TYPE_TWO_FACTOR_AUTH_DISABLE,
            self::EVENT_TYPE_TWO_FACTOR_AUTH_ENABLE,
            self::EVENT_TYPE_USER_CREATE,
            self::EVENT_TYPE_USER_DESTROY,
            self::EVENT_TYPE_USER_LOCK,
            self::EVENT_TYPE_USER_LOGIN,
            self::EVENT_TYPE_USER_LOGIN_FAILURE,
            self::EVENT_TYPE_USER_LOGOUT,
            self::EVENT_TYPE_USER_PASSWORD_UPDATE,
            self::EVENT_TYPE_USER_UNLOCK,
            self::EVENT_TYPE_USER_UPDATE,
            self::EVENT_TYPE_VCL_CREATE,
            self::EVENT_TYPE_VCL_DELETE,
            self::EVENT_TYPE_VCL_UPDATE,
            self::EVENT_TYPE_VERSION_ACTIVATE,
            self::EVENT_TYPE_VERSION_CLONE,
            self::EVENT_TYPE_VERSION_COPY,
            self::EVENT_TYPE_VERSION_COPY_DESTINATION,
            self::EVENT_TYPE_VERSION_COPY_SOURCE,
            self::EVENT_TYPE_VERSION_CREATE,
            self::EVENT_TYPE_VERSION_DEACTIVATE,
            self::EVENT_TYPE_VERSION_LOCK,
            self::EVENT_TYPE_VERSION_UPDATE,
            self::EVENT_TYPE_WAF_CONFIGURATION_SET_UPDATE,
            self::EVENT_TYPE_WAF_CREATE,
            self::EVENT_TYPE_WAF_DELETE,
            self::EVENT_TYPE_WAF_UPDATE,
            self::EVENT_TYPE_WAF_ENABLE,
            self::EVENT_TYPE_WAF_DISABLE,
            self::EVENT_TYPE_WAF_OWASP_CREATE,
            self::EVENT_TYPE_WAF_OWASP_UPDATE,
            self::EVENT_TYPE_WAF_RULESET_DEPLOY,
            self::EVENT_TYPE_WAF_RULESET_DEPLOY_FAILURE,
            self::EVENT_TYPE_WORDPRESS_CREATE,
            self::EVENT_TYPE_WORDPRESS_DELETE,
            self::EVENT_TYPE_WORDPRESS_UPDATE,
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
        $this->container['admin'] = $data['admin'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['ip'] = $data['ip'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['token_id'] = $data['token_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
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
     * Gets admin
     *
     * @return bool|null
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool|null $admin Indicates if event was performed by Fastly.
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date and time in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the event.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type Type of event. Can be used with `filter[event_type]`
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip IP addresses that the event was requested from.
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,object>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,object>|null $metadata Hash of key value pairs of additional information.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets token_id
     *
     * @return string|null
     */
    public function getTokenId()
    {
        return $this->container['token_id'];
    }

    /**
     * Sets token_id
     *
     * @param string|null $token_id token_id
     *
     * @return self
     */
    public function setTokenId($token_id)
    {
        $this->container['token_id'] = $token_id;

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


