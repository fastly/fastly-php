# Fastly PHP

A PHP client library for interacting with most facets of the [Fastly API](https://developer.fastly.com/reference/api).


## Installation

Requires PHP 7.3 or later.

To install via [Composer](https://getcomposer.org/), add the following to your project's `composer.json`:

```json
{
  "require": {
    "fastly/fastly": "*@dev"
  }
}
```

Then run `composer install`.

Composer generates a `vendor/autoload.php` file. You can include this file and start using the classes provided by this client without any extra work:

```php
<?php
require_once('/path/to/project/vendor/autoload.php');
```

## Usage

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Authorize the client with a Fastly API token.
$config = Fastly\Configuration::getDefaultConfiguration()->setApiToken('YOUR_API_TOKEN');

// Alternatively, set the FASTLY_API_TOKEN environment variable:
// $config = Fastly\Configuration::getDefaultConfiguration();

$apiInstance = new Fastly\Api\(
    // Optionally, pass a custom client that implements `GuzzleHttp\ClientInterface`.
    // `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$options['service_id'] = 'SU1Z0isxPaozGVKXdv0eY'; // string
$options['version_id'] = 56; // int
$options['name'] = 'my_acl'; // string

try {
    $result = $apiInstance->createAcl($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->createAcl: ', $e->getMessage(), PHP_EOL;
}
```

## Authorization

The Fastly API requires an [API token](https://developer.fastly.com/reference/api/#authentication) for most operations.  Set it in the PHP client by using the `setApiToken` method of a configuration as shown:

```php
Fastly\Configuration::getDefaultConfiguration()->setApiToken('YOUR_API_TOKEN');
```

Alternatively, set the `FASTLY_API_TOKEN` environment variable instead of using `setApiToken`. 

```php
Fastly\Configuration::getDefaultConfiguration();
```

## Endpoints

The main documentation for the Fastly API can be found on our [Developer Hub](https://developer.fastly.com/reference/api).

Class | Method | Description
------------ | ------------- | -------------
[*AclApi*](docs/Api/AclApi.md) | [**createAcl**](docs/Api/AclApi.md#createacl) | Create a new ACL
[*AclApi*](docs/Api/AclApi.md) | [**deleteAcl**](docs/Api/AclApi.md#deleteacl) | Delete an ACL
[*AclApi*](docs/Api/AclApi.md) | [**getAcl**](docs/Api/AclApi.md#getacl) | Describe an ACL
[*AclApi*](docs/Api/AclApi.md) | [**listAcls**](docs/Api/AclApi.md#listacls) | List ACLs
[*AclApi*](docs/Api/AclApi.md) | [**updateAcl**](docs/Api/AclApi.md#updateacl) | Update an ACL
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**bulkUpdateAclEntries**](docs/Api/AclEntryApi.md#bulkupdateaclentries) | Update multiple ACL entries
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**createAclEntry**](docs/Api/AclEntryApi.md#createaclentry) | Create an ACL entry
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**deleteAclEntry**](docs/Api/AclEntryApi.md#deleteaclentry) | Delete an ACL entry
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**getAclEntry**](docs/Api/AclEntryApi.md#getaclentry) | Describe an ACL entry
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**listAclEntries**](docs/Api/AclEntryApi.md#listaclentries) | List ACL entries
[*AclEntryApi*](docs/Api/AclEntryApi.md) | [**updateAclEntry**](docs/Api/AclEntryApi.md#updateaclentry) | Update an ACL entry
[*ApexRedirectApi*](docs/Api/ApexRedirectApi.md) | [**deleteApexRedirect**](docs/Api/ApexRedirectApi.md#deleteapexredirect) | Delete an apex redirect
[*ApexRedirectApi*](docs/Api/ApexRedirectApi.md) | [**getApexRedirect**](docs/Api/ApexRedirectApi.md#getapexredirect) | Get an apex redirect
[*ApexRedirectApi*](docs/Api/ApexRedirectApi.md) | [**listApexRedirects**](docs/Api/ApexRedirectApi.md#listapexredirects) | List apex redirects
[*ApexRedirectApi*](docs/Api/ApexRedirectApi.md) | [**updateApexRedirect**](docs/Api/ApexRedirectApi.md#updateapexredirect) | Update an apex redirect
[*AutomationTokensApi*](docs/Api/AutomationTokensApi.md) | [**createAutomationToken**](docs/Api/AutomationTokensApi.md#createautomationtoken) | Create Automation Token
[*AutomationTokensApi*](docs/Api/AutomationTokensApi.md) | [**getAutomationTokenId**](docs/Api/AutomationTokensApi.md#getautomationtokenid) | Retrieve an Automation Token by ID
[*AutomationTokensApi*](docs/Api/AutomationTokensApi.md) | [**getAutomationTokensIdServices**](docs/Api/AutomationTokensApi.md#getautomationtokensidservices) | List Automation Token Services
[*AutomationTokensApi*](docs/Api/AutomationTokensApi.md) | [**listAutomationTokens**](docs/Api/AutomationTokensApi.md#listautomationtokens) | List Customer Automation Tokens
[*AutomationTokensApi*](docs/Api/AutomationTokensApi.md) | [**revokeAutomationTokenId**](docs/Api/AutomationTokensApi.md#revokeautomationtokenid) | Revoke an Automation Token by ID
[*BackendApi*](docs/Api/BackendApi.md) | [**createBackend**](docs/Api/BackendApi.md#createbackend) | Create a backend
[*BackendApi*](docs/Api/BackendApi.md) | [**deleteBackend**](docs/Api/BackendApi.md#deletebackend) | Delete a backend
[*BackendApi*](docs/Api/BackendApi.md) | [**getBackend**](docs/Api/BackendApi.md#getbackend) | Describe a backend
[*BackendApi*](docs/Api/BackendApi.md) | [**listBackends**](docs/Api/BackendApi.md#listbackends) | List backends
[*BackendApi*](docs/Api/BackendApi.md) | [**updateBackend**](docs/Api/BackendApi.md#updatebackend) | Update a backend
[*BillingApi*](docs/Api/BillingApi.md) | [**getInvoice**](docs/Api/BillingApi.md#getinvoice) | Get an invoice
[*BillingApi*](docs/Api/BillingApi.md) | [**getInvoiceById**](docs/Api/BillingApi.md#getinvoicebyid) | Get an invoice
[*BillingApi*](docs/Api/BillingApi.md) | [**getInvoiceMtd**](docs/Api/BillingApi.md#getinvoicemtd) | Get month-to-date billing estimate
[*BillingAddressApi*](docs/Api/BillingAddressApi.md) | [**addBillingAddr**](docs/Api/BillingAddressApi.md#addbillingaddr) | Add a billing address to a customer
[*BillingAddressApi*](docs/Api/BillingAddressApi.md) | [**deleteBillingAddr**](docs/Api/BillingAddressApi.md#deletebillingaddr) | Delete a billing address
[*BillingAddressApi*](docs/Api/BillingAddressApi.md) | [**getBillingAddr**](docs/Api/BillingAddressApi.md#getbillingaddr) | Get a billing address
[*BillingAddressApi*](docs/Api/BillingAddressApi.md) | [**updateBillingAddr**](docs/Api/BillingAddressApi.md#updatebillingaddr) | Update a billing address
[*CacheSettingsApi*](docs/Api/CacheSettingsApi.md) | [**createCacheSettings**](docs/Api/CacheSettingsApi.md#createcachesettings) | Create a cache settings object
[*CacheSettingsApi*](docs/Api/CacheSettingsApi.md) | [**deleteCacheSettings**](docs/Api/CacheSettingsApi.md#deletecachesettings) | Delete a cache settings object
[*CacheSettingsApi*](docs/Api/CacheSettingsApi.md) | [**getCacheSettings**](docs/Api/CacheSettingsApi.md#getcachesettings) | Get a cache settings object
[*CacheSettingsApi*](docs/Api/CacheSettingsApi.md) | [**listCacheSettings**](docs/Api/CacheSettingsApi.md#listcachesettings) | List cache settings objects
[*CacheSettingsApi*](docs/Api/CacheSettingsApi.md) | [**updateCacheSettings**](docs/Api/CacheSettingsApi.md#updatecachesettings) | Update a cache settings object
[*ConditionApi*](docs/Api/ConditionApi.md) | [**createCondition**](docs/Api/ConditionApi.md#createcondition) | Create a condition
[*ConditionApi*](docs/Api/ConditionApi.md) | [**deleteCondition**](docs/Api/ConditionApi.md#deletecondition) | Delete a condition
[*ConditionApi*](docs/Api/ConditionApi.md) | [**getCondition**](docs/Api/ConditionApi.md#getcondition) | Describe a condition
[*ConditionApi*](docs/Api/ConditionApi.md) | [**listConditions**](docs/Api/ConditionApi.md#listconditions) | List conditions
[*ConditionApi*](docs/Api/ConditionApi.md) | [**updateCondition**](docs/Api/ConditionApi.md#updatecondition) | Update a condition
[*ContactApi*](docs/Api/ContactApi.md) | [**deleteContact**](docs/Api/ContactApi.md#deletecontact) | Delete a contact
[*ContactApi*](docs/Api/ContactApi.md) | [**listContacts**](docs/Api/ContactApi.md#listcontacts) | List contacts
[*ContentApi*](docs/Api/ContentApi.md) | [**contentCheck**](docs/Api/ContentApi.md#contentcheck) | Check status of content in each POP&#39;s cache
[*CustomerApi*](docs/Api/CustomerApi.md) | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | Delete a customer
[*CustomerApi*](docs/Api/CustomerApi.md) | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | Get a customer
[*CustomerApi*](docs/Api/CustomerApi.md) | [**getLoggedInCustomer**](docs/Api/CustomerApi.md#getloggedincustomer) | Get the logged in customer
[*CustomerApi*](docs/Api/CustomerApi.md) | [**listUsers**](docs/Api/CustomerApi.md#listusers) | List users
[*CustomerApi*](docs/Api/CustomerApi.md) | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | Update a customer
[*DictionaryApi*](docs/Api/DictionaryApi.md) | [**createDictionary**](docs/Api/DictionaryApi.md#createdictionary) | Create an edge dictionary
[*DictionaryApi*](docs/Api/DictionaryApi.md) | [**deleteDictionary**](docs/Api/DictionaryApi.md#deletedictionary) | Delete an edge dictionary
[*DictionaryApi*](docs/Api/DictionaryApi.md) | [**getDictionary**](docs/Api/DictionaryApi.md#getdictionary) | Get an edge dictionary
[*DictionaryApi*](docs/Api/DictionaryApi.md) | [**listDictionaries**](docs/Api/DictionaryApi.md#listdictionaries) | List edge dictionaries
[*DictionaryApi*](docs/Api/DictionaryApi.md) | [**updateDictionary**](docs/Api/DictionaryApi.md#updatedictionary) | Update an edge dictionary
[*DictionaryInfoApi*](docs/Api/DictionaryInfoApi.md) | [**getDictionaryInfo**](docs/Api/DictionaryInfoApi.md#getdictionaryinfo) | Get edge dictionary metadata
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**createDictionaryItem**](docs/Api/DictionaryItemApi.md#createdictionaryitem) | Create an entry in an edge dictionary
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**deleteDictionaryItem**](docs/Api/DictionaryItemApi.md#deletedictionaryitem) | Delete an item from an edge dictionary
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**getDictionaryItem**](docs/Api/DictionaryItemApi.md#getdictionaryitem) | Get an item from an edge dictionary
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**listDictionaryItems**](docs/Api/DictionaryItemApi.md#listdictionaryitems) | List items in an edge dictionary
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**updateDictionaryItem**](docs/Api/DictionaryItemApi.md#updatedictionaryitem) | Update an entry in an edge dictionary
[*DictionaryItemApi*](docs/Api/DictionaryItemApi.md) | [**upsertDictionaryItem**](docs/Api/DictionaryItemApi.md#upsertdictionaryitem) | Insert or update an entry in an edge dictionary
[*DiffApi*](docs/Api/DiffApi.md) | [**diffServiceVersions**](docs/Api/DiffApi.md#diffserviceversions) | Diff two service versions
[*DirectorApi*](docs/Api/DirectorApi.md) | [**createDirector**](docs/Api/DirectorApi.md#createdirector) | Create a director
[*DirectorApi*](docs/Api/DirectorApi.md) | [**deleteDirector**](docs/Api/DirectorApi.md#deletedirector) | Delete a director
[*DirectorApi*](docs/Api/DirectorApi.md) | [**getDirector**](docs/Api/DirectorApi.md#getdirector) | Get a director
[*DirectorApi*](docs/Api/DirectorApi.md) | [**listDirectors**](docs/Api/DirectorApi.md#listdirectors) | List directors
[*DirectorBackendApi*](docs/Api/DirectorBackendApi.md) | [**createDirectorBackend**](docs/Api/DirectorBackendApi.md#createdirectorbackend) | Create a director-backend relationship
[*DirectorBackendApi*](docs/Api/DirectorBackendApi.md) | [**deleteDirectorBackend**](docs/Api/DirectorBackendApi.md#deletedirectorbackend) | Delete a director-backend relationship
[*DirectorBackendApi*](docs/Api/DirectorBackendApi.md) | [**getDirectorBackend**](docs/Api/DirectorBackendApi.md#getdirectorbackend) | Get a director-backend relationship
[*DomainApi*](docs/Api/DomainApi.md) | [**checkDomain**](docs/Api/DomainApi.md#checkdomain) | Validate DNS configuration for a single domain on a service
[*DomainApi*](docs/Api/DomainApi.md) | [**checkDomains**](docs/Api/DomainApi.md#checkdomains) | Validate DNS configuration for all domains on a service
[*DomainApi*](docs/Api/DomainApi.md) | [**createDomain**](docs/Api/DomainApi.md#createdomain) | Add a domain name to a service
[*DomainApi*](docs/Api/DomainApi.md) | [**deleteDomain**](docs/Api/DomainApi.md#deletedomain) | Remove a domain from a service
[*DomainApi*](docs/Api/DomainApi.md) | [**getDomain**](docs/Api/DomainApi.md#getdomain) | Describe a domain
[*DomainApi*](docs/Api/DomainApi.md) | [**listDomains**](docs/Api/DomainApi.md#listdomains) | List domains
[*DomainApi*](docs/Api/DomainApi.md) | [**updateDomain**](docs/Api/DomainApi.md#updatedomain) | Update a domain
[*EnabledProductsApi*](docs/Api/EnabledProductsApi.md) | [**disableProduct**](docs/Api/EnabledProductsApi.md#disableproduct) | Disable a product
[*EnabledProductsApi*](docs/Api/EnabledProductsApi.md) | [**enableProduct**](docs/Api/EnabledProductsApi.md#enableproduct) | Enable a product
[*EnabledProductsApi*](docs/Api/EnabledProductsApi.md) | [**getEnabledProduct**](docs/Api/EnabledProductsApi.md#getenabledproduct) | Get enabled product
[*EventsApi*](docs/Api/EventsApi.md) | [**getEvent**](docs/Api/EventsApi.md#getevent) | Get an event
[*EventsApi*](docs/Api/EventsApi.md) | [**listEvents**](docs/Api/EventsApi.md#listevents) | List events
[*GzipApi*](docs/Api/GzipApi.md) | [**createGzipConfig**](docs/Api/GzipApi.md#creategzipconfig) | Create a gzip configuration
[*GzipApi*](docs/Api/GzipApi.md) | [**deleteGzipConfig**](docs/Api/GzipApi.md#deletegzipconfig) | Delete a gzip configuration
[*GzipApi*](docs/Api/GzipApi.md) | [**getGzipConfigs**](docs/Api/GzipApi.md#getgzipconfigs) | Get a gzip configuration
[*GzipApi*](docs/Api/GzipApi.md) | [**listGzipConfigs**](docs/Api/GzipApi.md#listgzipconfigs) | List gzip configurations
[*GzipApi*](docs/Api/GzipApi.md) | [**updateGzipConfig**](docs/Api/GzipApi.md#updategzipconfig) | Update a gzip configuration
[*HeaderApi*](docs/Api/HeaderApi.md) | [**createHeaderObject**](docs/Api/HeaderApi.md#createheaderobject) | Create a Header object
[*HeaderApi*](docs/Api/HeaderApi.md) | [**deleteHeaderObject**](docs/Api/HeaderApi.md#deleteheaderobject) | Delete a Header object
[*HeaderApi*](docs/Api/HeaderApi.md) | [**getHeaderObject**](docs/Api/HeaderApi.md#getheaderobject) | Get a Header object
[*HeaderApi*](docs/Api/HeaderApi.md) | [**listHeaderObjects**](docs/Api/HeaderApi.md#listheaderobjects) | List Header objects
[*HeaderApi*](docs/Api/HeaderApi.md) | [**updateHeaderObject**](docs/Api/HeaderApi.md#updateheaderobject) | Update a Header object
[*HealthcheckApi*](docs/Api/HealthcheckApi.md) | [**createHealthcheck**](docs/Api/HealthcheckApi.md#createhealthcheck) | Create a health check
[*HealthcheckApi*](docs/Api/HealthcheckApi.md) | [**deleteHealthcheck**](docs/Api/HealthcheckApi.md#deletehealthcheck) | Delete a health check
[*HealthcheckApi*](docs/Api/HealthcheckApi.md) | [**getHealthcheck**](docs/Api/HealthcheckApi.md#gethealthcheck) | Get a health check
[*HealthcheckApi*](docs/Api/HealthcheckApi.md) | [**listHealthchecks**](docs/Api/HealthcheckApi.md#listhealthchecks) | List health checks
[*HealthcheckApi*](docs/Api/HealthcheckApi.md) | [**updateHealthcheck**](docs/Api/HealthcheckApi.md#updatehealthcheck) | Update a health check
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getHistStats**](docs/Api/HistoricalApi.md#gethiststats) | Get historical stats
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getHistStatsAggregated**](docs/Api/HistoricalApi.md#gethiststatsaggregated) | Get aggregated historical stats
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getHistStatsField**](docs/Api/HistoricalApi.md#gethiststatsfield) | Get historical stats for a single field
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getHistStatsService**](docs/Api/HistoricalApi.md#gethiststatsservice) | Get historical stats for a single service
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getHistStatsServiceField**](docs/Api/HistoricalApi.md#gethiststatsservicefield) | Get historical stats for a single service/field combination
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getRegions**](docs/Api/HistoricalApi.md#getregions) | Get region codes
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getUsage**](docs/Api/HistoricalApi.md#getusage) | Get usage statistics
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getUsageMonth**](docs/Api/HistoricalApi.md#getusagemonth) | Get month-to-date usage statistics
[*HistoricalApi*](docs/Api/HistoricalApi.md) | [**getUsageService**](docs/Api/HistoricalApi.md#getusageservice) | Get usage statistics per service
[*Http3Api*](docs/Api/Http3Api.md) | [**createHttp3**](docs/Api/Http3Api.md#createhttp3) | Enable support for HTTP/3
[*Http3Api*](docs/Api/Http3Api.md) | [**deleteHttp3**](docs/Api/Http3Api.md#deletehttp3) | Disable support for HTTP/3
[*Http3Api*](docs/Api/Http3Api.md) | [**getHttp3**](docs/Api/Http3Api.md#gethttp3) | Get HTTP/3 status
[*IamPermissionsApi*](docs/Api/IamPermissionsApi.md) | [**listPermissions**](docs/Api/IamPermissionsApi.md#listpermissions) | List permissions
[*IamRolesApi*](docs/Api/IamRolesApi.md) | [**deleteARole**](docs/Api/IamRolesApi.md#deletearole) | Delete a role
[*IamRolesApi*](docs/Api/IamRolesApi.md) | [**getARole**](docs/Api/IamRolesApi.md#getarole) | Get a role
[*IamRolesApi*](docs/Api/IamRolesApi.md) | [**listRolePermissions**](docs/Api/IamRolesApi.md#listrolepermissions) | List permissions in a role
[*IamRolesApi*](docs/Api/IamRolesApi.md) | [**listRoles**](docs/Api/IamRolesApi.md#listroles) | List roles
[*IamServiceGroupsApi*](docs/Api/IamServiceGroupsApi.md) | [**deleteAServiceGroup**](docs/Api/IamServiceGroupsApi.md#deleteaservicegroup) | Delete a service group
[*IamServiceGroupsApi*](docs/Api/IamServiceGroupsApi.md) | [**getAServiceGroup**](docs/Api/IamServiceGroupsApi.md#getaservicegroup) | Get a service group
[*IamServiceGroupsApi*](docs/Api/IamServiceGroupsApi.md) | [**listServiceGroupServices**](docs/Api/IamServiceGroupsApi.md#listservicegroupservices) | List services to a service group
[*IamServiceGroupsApi*](docs/Api/IamServiceGroupsApi.md) | [**listServiceGroups**](docs/Api/IamServiceGroupsApi.md#listservicegroups) | List service groups
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**deleteAUserGroup**](docs/Api/IamUserGroupsApi.md#deleteausergroup) | Delete a user group
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**getAUserGroup**](docs/Api/IamUserGroupsApi.md#getausergroup) | Get a user group
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**listUserGroupMembers**](docs/Api/IamUserGroupsApi.md#listusergroupmembers) | List members of a user group
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**listUserGroupRoles**](docs/Api/IamUserGroupsApi.md#listusergrouproles) | List roles in a user group
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**listUserGroupServiceGroups**](docs/Api/IamUserGroupsApi.md#listusergroupservicegroups) | List service groups in a user group
[*IamUserGroupsApi*](docs/Api/IamUserGroupsApi.md) | [**listUserGroups**](docs/Api/IamUserGroupsApi.md#listusergroups) | List user groups
[*InvitationsApi*](docs/Api/InvitationsApi.md) | [**createInvitation**](docs/Api/InvitationsApi.md#createinvitation) | Create an invitation
[*InvitationsApi*](docs/Api/InvitationsApi.md) | [**deleteInvitation**](docs/Api/InvitationsApi.md#deleteinvitation) | Delete an invitation
[*InvitationsApi*](docs/Api/InvitationsApi.md) | [**listInvitations**](docs/Api/InvitationsApi.md#listinvitations) | List invitations
[*LoggingAzureblobApi*](docs/Api/LoggingAzureblobApi.md) | [**createLogAzure**](docs/Api/LoggingAzureblobApi.md#createlogazure) | Create an Azure Blob Storage log endpoint
[*LoggingAzureblobApi*](docs/Api/LoggingAzureblobApi.md) | [**deleteLogAzure**](docs/Api/LoggingAzureblobApi.md#deletelogazure) | Delete the Azure Blob Storage log endpoint
[*LoggingAzureblobApi*](docs/Api/LoggingAzureblobApi.md) | [**getLogAzure**](docs/Api/LoggingAzureblobApi.md#getlogazure) | Get an Azure Blob Storage log endpoint
[*LoggingAzureblobApi*](docs/Api/LoggingAzureblobApi.md) | [**listLogAzure**](docs/Api/LoggingAzureblobApi.md#listlogazure) | List Azure Blob Storage log endpoints
[*LoggingAzureblobApi*](docs/Api/LoggingAzureblobApi.md) | [**updateLogAzure**](docs/Api/LoggingAzureblobApi.md#updatelogazure) | Update an Azure Blob Storage log endpoint
[*LoggingBigqueryApi*](docs/Api/LoggingBigqueryApi.md) | [**createLogBigquery**](docs/Api/LoggingBigqueryApi.md#createlogbigquery) | Create a BigQuery log endpoint
[*LoggingBigqueryApi*](docs/Api/LoggingBigqueryApi.md) | [**deleteLogBigquery**](docs/Api/LoggingBigqueryApi.md#deletelogbigquery) | Delete a BigQuery log endpoint
[*LoggingBigqueryApi*](docs/Api/LoggingBigqueryApi.md) | [**getLogBigquery**](docs/Api/LoggingBigqueryApi.md#getlogbigquery) | Get a BigQuery log endpoint
[*LoggingBigqueryApi*](docs/Api/LoggingBigqueryApi.md) | [**listLogBigquery**](docs/Api/LoggingBigqueryApi.md#listlogbigquery) | List BigQuery log endpoints
[*LoggingBigqueryApi*](docs/Api/LoggingBigqueryApi.md) | [**updateLogBigquery**](docs/Api/LoggingBigqueryApi.md#updatelogbigquery) | Update a BigQuery log endpoint
[*LoggingCloudfilesApi*](docs/Api/LoggingCloudfilesApi.md) | [**createLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#createlogcloudfiles) | Create a Cloud Files log endpoint
[*LoggingCloudfilesApi*](docs/Api/LoggingCloudfilesApi.md) | [**deleteLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#deletelogcloudfiles) | Delete the Cloud Files log endpoint
[*LoggingCloudfilesApi*](docs/Api/LoggingCloudfilesApi.md) | [**getLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#getlogcloudfiles) | Get a Cloud Files log endpoint
[*LoggingCloudfilesApi*](docs/Api/LoggingCloudfilesApi.md) | [**listLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#listlogcloudfiles) | List Cloud Files log endpoints
[*LoggingCloudfilesApi*](docs/Api/LoggingCloudfilesApi.md) | [**updateLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#updatelogcloudfiles) | Update the Cloud Files log endpoint
[*LoggingDatadogApi*](docs/Api/LoggingDatadogApi.md) | [**createLogDatadog**](docs/Api/LoggingDatadogApi.md#createlogdatadog) | Create a Datadog log endpoint
[*LoggingDatadogApi*](docs/Api/LoggingDatadogApi.md) | [**deleteLogDatadog**](docs/Api/LoggingDatadogApi.md#deletelogdatadog) | Delete a Datadog log endpoint
[*LoggingDatadogApi*](docs/Api/LoggingDatadogApi.md) | [**getLogDatadog**](docs/Api/LoggingDatadogApi.md#getlogdatadog) | Get a Datadog log endpoint
[*LoggingDatadogApi*](docs/Api/LoggingDatadogApi.md) | [**listLogDatadog**](docs/Api/LoggingDatadogApi.md#listlogdatadog) | List Datadog log endpoints
[*LoggingDatadogApi*](docs/Api/LoggingDatadogApi.md) | [**updateLogDatadog**](docs/Api/LoggingDatadogApi.md#updatelogdatadog) | Update a Datadog log endpoint
[*LoggingDigitaloceanApi*](docs/Api/LoggingDigitaloceanApi.md) | [**createLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#createlogdigocean) | Create a DigitalOcean Spaces log endpoint
[*LoggingDigitaloceanApi*](docs/Api/LoggingDigitaloceanApi.md) | [**deleteLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#deletelogdigocean) | Delete a DigitalOcean Spaces log endpoint
[*LoggingDigitaloceanApi*](docs/Api/LoggingDigitaloceanApi.md) | [**getLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#getlogdigocean) | Get a DigitalOcean Spaces log endpoint
[*LoggingDigitaloceanApi*](docs/Api/LoggingDigitaloceanApi.md) | [**listLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#listlogdigocean) | List DigitalOcean Spaces log endpoints
[*LoggingDigitaloceanApi*](docs/Api/LoggingDigitaloceanApi.md) | [**updateLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#updatelogdigocean) | Update a DigitalOcean Spaces log endpoint
[*LoggingElasticsearchApi*](docs/Api/LoggingElasticsearchApi.md) | [**createLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#createlogelasticsearch) | Create an Elasticsearch log endpoint
[*LoggingElasticsearchApi*](docs/Api/LoggingElasticsearchApi.md) | [**deleteLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#deletelogelasticsearch) | Delete an Elasticsearch log endpoint
[*LoggingElasticsearchApi*](docs/Api/LoggingElasticsearchApi.md) | [**getLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#getlogelasticsearch) | Get an Elasticsearch log endpoint
[*LoggingElasticsearchApi*](docs/Api/LoggingElasticsearchApi.md) | [**listLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#listlogelasticsearch) | List Elasticsearch log endpoints
[*LoggingElasticsearchApi*](docs/Api/LoggingElasticsearchApi.md) | [**updateLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#updatelogelasticsearch) | Update an Elasticsearch log endpoint
[*LoggingFtpApi*](docs/Api/LoggingFtpApi.md) | [**createLogFtp**](docs/Api/LoggingFtpApi.md#createlogftp) | Create an FTP log endpoint
[*LoggingFtpApi*](docs/Api/LoggingFtpApi.md) | [**deleteLogFtp**](docs/Api/LoggingFtpApi.md#deletelogftp) | Delete an FTP log endpoint
[*LoggingFtpApi*](docs/Api/LoggingFtpApi.md) | [**getLogFtp**](docs/Api/LoggingFtpApi.md#getlogftp) | Get an FTP log endpoint
[*LoggingFtpApi*](docs/Api/LoggingFtpApi.md) | [**listLogFtp**](docs/Api/LoggingFtpApi.md#listlogftp) | List FTP log endpoints
[*LoggingFtpApi*](docs/Api/LoggingFtpApi.md) | [**updateLogFtp**](docs/Api/LoggingFtpApi.md#updatelogftp) | Update an FTP log endpoint
[*LoggingGcsApi*](docs/Api/LoggingGcsApi.md) | [**createLogGcs**](docs/Api/LoggingGcsApi.md#createloggcs) | Create a GCS log endpoint
[*LoggingGcsApi*](docs/Api/LoggingGcsApi.md) | [**deleteLogGcs**](docs/Api/LoggingGcsApi.md#deleteloggcs) | Delete a GCS log endpoint
[*LoggingGcsApi*](docs/Api/LoggingGcsApi.md) | [**getLogGcs**](docs/Api/LoggingGcsApi.md#getloggcs) | Get a GCS log endpoint
[*LoggingGcsApi*](docs/Api/LoggingGcsApi.md) | [**listLogGcs**](docs/Api/LoggingGcsApi.md#listloggcs) | List GCS log endpoints
[*LoggingGcsApi*](docs/Api/LoggingGcsApi.md) | [**updateLogGcs**](docs/Api/LoggingGcsApi.md#updateloggcs) | Update a GCS log endpoint
[*LoggingHerokuApi*](docs/Api/LoggingHerokuApi.md) | [**createLogHeroku**](docs/Api/LoggingHerokuApi.md#createlogheroku) | Create a Heroku log endpoint
[*LoggingHerokuApi*](docs/Api/LoggingHerokuApi.md) | [**deleteLogHeroku**](docs/Api/LoggingHerokuApi.md#deletelogheroku) | Delete the Heroku log endpoint
[*LoggingHerokuApi*](docs/Api/LoggingHerokuApi.md) | [**getLogHeroku**](docs/Api/LoggingHerokuApi.md#getlogheroku) | Get a Heroku log endpoint
[*LoggingHerokuApi*](docs/Api/LoggingHerokuApi.md) | [**listLogHeroku**](docs/Api/LoggingHerokuApi.md#listlogheroku) | List Heroku log endpoints
[*LoggingHerokuApi*](docs/Api/LoggingHerokuApi.md) | [**updateLogHeroku**](docs/Api/LoggingHerokuApi.md#updatelogheroku) | Update the Heroku log endpoint
[*LoggingHoneycombApi*](docs/Api/LoggingHoneycombApi.md) | [**createLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#createloghoneycomb) | Create a Honeycomb log endpoint
[*LoggingHoneycombApi*](docs/Api/LoggingHoneycombApi.md) | [**deleteLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#deleteloghoneycomb) | Delete the Honeycomb log endpoint
[*LoggingHoneycombApi*](docs/Api/LoggingHoneycombApi.md) | [**getLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#getloghoneycomb) | Get a Honeycomb log endpoint
[*LoggingHoneycombApi*](docs/Api/LoggingHoneycombApi.md) | [**listLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#listloghoneycomb) | List Honeycomb log endpoints
[*LoggingHoneycombApi*](docs/Api/LoggingHoneycombApi.md) | [**updateLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#updateloghoneycomb) | Update a Honeycomb log endpoint
[*LoggingHttpsApi*](docs/Api/LoggingHttpsApi.md) | [**createLogHttps**](docs/Api/LoggingHttpsApi.md#createloghttps) | Create an HTTPS log endpoint
[*LoggingHttpsApi*](docs/Api/LoggingHttpsApi.md) | [**deleteLogHttps**](docs/Api/LoggingHttpsApi.md#deleteloghttps) | Delete an HTTPS log endpoint
[*LoggingHttpsApi*](docs/Api/LoggingHttpsApi.md) | [**getLogHttps**](docs/Api/LoggingHttpsApi.md#getloghttps) | Get an HTTPS log endpoint
[*LoggingHttpsApi*](docs/Api/LoggingHttpsApi.md) | [**listLogHttps**](docs/Api/LoggingHttpsApi.md#listloghttps) | List HTTPS log endpoints
[*LoggingHttpsApi*](docs/Api/LoggingHttpsApi.md) | [**updateLogHttps**](docs/Api/LoggingHttpsApi.md#updateloghttps) | Update an HTTPS log endpoint
[*LoggingKafkaApi*](docs/Api/LoggingKafkaApi.md) | [**createLogKafka**](docs/Api/LoggingKafkaApi.md#createlogkafka) | Create a Kafka log endpoint
[*LoggingKafkaApi*](docs/Api/LoggingKafkaApi.md) | [**deleteLogKafka**](docs/Api/LoggingKafkaApi.md#deletelogkafka) | Delete the Kafka log endpoint
[*LoggingKafkaApi*](docs/Api/LoggingKafkaApi.md) | [**getLogKafka**](docs/Api/LoggingKafkaApi.md#getlogkafka) | Get a Kafka log endpoint
[*LoggingKafkaApi*](docs/Api/LoggingKafkaApi.md) | [**listLogKafka**](docs/Api/LoggingKafkaApi.md#listlogkafka) | List Kafka log endpoints
[*LoggingKinesisApi*](docs/Api/LoggingKinesisApi.md) | [**createLogKinesis**](docs/Api/LoggingKinesisApi.md#createlogkinesis) | Create  an Amazon Kinesis log endpoint
[*LoggingKinesisApi*](docs/Api/LoggingKinesisApi.md) | [**deleteLogKinesis**](docs/Api/LoggingKinesisApi.md#deletelogkinesis) | Delete the Amazon Kinesis log endpoint
[*LoggingKinesisApi*](docs/Api/LoggingKinesisApi.md) | [**getLogKinesis**](docs/Api/LoggingKinesisApi.md#getlogkinesis) | Get an Amazon Kinesis log endpoint
[*LoggingKinesisApi*](docs/Api/LoggingKinesisApi.md) | [**listLogKinesis**](docs/Api/LoggingKinesisApi.md#listlogkinesis) | List Amazon Kinesis log endpoints
[*LoggingLogentriesApi*](docs/Api/LoggingLogentriesApi.md) | [**createLogLogentries**](docs/Api/LoggingLogentriesApi.md#createloglogentries) | Create a Logentries log endpoint
[*LoggingLogentriesApi*](docs/Api/LoggingLogentriesApi.md) | [**deleteLogLogentries**](docs/Api/LoggingLogentriesApi.md#deleteloglogentries) | Delete a Logentries log endpoint
[*LoggingLogentriesApi*](docs/Api/LoggingLogentriesApi.md) | [**getLogLogentries**](docs/Api/LoggingLogentriesApi.md#getloglogentries) | Get a Logentries log endpoint
[*LoggingLogentriesApi*](docs/Api/LoggingLogentriesApi.md) | [**listLogLogentries**](docs/Api/LoggingLogentriesApi.md#listloglogentries) | List Logentries log endpoints
[*LoggingLogentriesApi*](docs/Api/LoggingLogentriesApi.md) | [**updateLogLogentries**](docs/Api/LoggingLogentriesApi.md#updateloglogentries) | Update a Logentries log endpoint
[*LoggingLogglyApi*](docs/Api/LoggingLogglyApi.md) | [**createLogLoggly**](docs/Api/LoggingLogglyApi.md#createlogloggly) | Create a Loggly log endpoint
[*LoggingLogglyApi*](docs/Api/LoggingLogglyApi.md) | [**deleteLogLoggly**](docs/Api/LoggingLogglyApi.md#deletelogloggly) | Delete a Loggly log endpoint
[*LoggingLogglyApi*](docs/Api/LoggingLogglyApi.md) | [**getLogLoggly**](docs/Api/LoggingLogglyApi.md#getlogloggly) | Get a Loggly log endpoint
[*LoggingLogglyApi*](docs/Api/LoggingLogglyApi.md) | [**listLogLoggly**](docs/Api/LoggingLogglyApi.md#listlogloggly) | List Loggly log endpoints
[*LoggingLogglyApi*](docs/Api/LoggingLogglyApi.md) | [**updateLogLoggly**](docs/Api/LoggingLogglyApi.md#updatelogloggly) | Update a Loggly log endpoint
[*LoggingLogshuttleApi*](docs/Api/LoggingLogshuttleApi.md) | [**createLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#createloglogshuttle) | Create a Log Shuttle log endpoint
[*LoggingLogshuttleApi*](docs/Api/LoggingLogshuttleApi.md) | [**deleteLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#deleteloglogshuttle) | Delete a Log Shuttle log endpoint
[*LoggingLogshuttleApi*](docs/Api/LoggingLogshuttleApi.md) | [**getLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#getloglogshuttle) | Get a Log Shuttle log endpoint
[*LoggingLogshuttleApi*](docs/Api/LoggingLogshuttleApi.md) | [**listLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#listloglogshuttle) | List Log Shuttle log endpoints
[*LoggingLogshuttleApi*](docs/Api/LoggingLogshuttleApi.md) | [**updateLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#updateloglogshuttle) | Update a Log Shuttle log endpoint
[*LoggingNewrelicApi*](docs/Api/LoggingNewrelicApi.md) | [**createLogNewrelic**](docs/Api/LoggingNewrelicApi.md#createlognewrelic) | Create a New Relic log endpoint
[*LoggingNewrelicApi*](docs/Api/LoggingNewrelicApi.md) | [**deleteLogNewrelic**](docs/Api/LoggingNewrelicApi.md#deletelognewrelic) | Delete a New Relic log endpoint
[*LoggingNewrelicApi*](docs/Api/LoggingNewrelicApi.md) | [**getLogNewrelic**](docs/Api/LoggingNewrelicApi.md#getlognewrelic) | Get a New Relic log endpoint
[*LoggingNewrelicApi*](docs/Api/LoggingNewrelicApi.md) | [**listLogNewrelic**](docs/Api/LoggingNewrelicApi.md#listlognewrelic) | List New Relic log endpoints
[*LoggingNewrelicApi*](docs/Api/LoggingNewrelicApi.md) | [**updateLogNewrelic**](docs/Api/LoggingNewrelicApi.md#updatelognewrelic) | Update a New Relic log endpoint
[*LoggingOpenstackApi*](docs/Api/LoggingOpenstackApi.md) | [**createLogOpenstack**](docs/Api/LoggingOpenstackApi.md#createlogopenstack) | Create an OpenStack log endpoint
[*LoggingOpenstackApi*](docs/Api/LoggingOpenstackApi.md) | [**deleteLogOpenstack**](docs/Api/LoggingOpenstackApi.md#deletelogopenstack) | Delete an OpenStack log endpoint
[*LoggingOpenstackApi*](docs/Api/LoggingOpenstackApi.md) | [**getLogOpenstack**](docs/Api/LoggingOpenstackApi.md#getlogopenstack) | Get an OpenStack log endpoint
[*LoggingOpenstackApi*](docs/Api/LoggingOpenstackApi.md) | [**listLogOpenstack**](docs/Api/LoggingOpenstackApi.md#listlogopenstack) | List OpenStack log endpoints
[*LoggingOpenstackApi*](docs/Api/LoggingOpenstackApi.md) | [**updateLogOpenstack**](docs/Api/LoggingOpenstackApi.md#updatelogopenstack) | Update an OpenStack log endpoint
[*LoggingPapertrailApi*](docs/Api/LoggingPapertrailApi.md) | [**createLogPapertrail**](docs/Api/LoggingPapertrailApi.md#createlogpapertrail) | Create a Papertrail log endpoint
[*LoggingPapertrailApi*](docs/Api/LoggingPapertrailApi.md) | [**deleteLogPapertrail**](docs/Api/LoggingPapertrailApi.md#deletelogpapertrail) | Delete a Papertrail log endpoint
[*LoggingPapertrailApi*](docs/Api/LoggingPapertrailApi.md) | [**getLogPapertrail**](docs/Api/LoggingPapertrailApi.md#getlogpapertrail) | Get a Papertrail log endpoint
[*LoggingPapertrailApi*](docs/Api/LoggingPapertrailApi.md) | [**listLogPapertrail**](docs/Api/LoggingPapertrailApi.md#listlogpapertrail) | List Papertrail log endpoints
[*LoggingPapertrailApi*](docs/Api/LoggingPapertrailApi.md) | [**updateLogPapertrail**](docs/Api/LoggingPapertrailApi.md#updatelogpapertrail) | Update a Papertrail log endpoint
[*LoggingPubsubApi*](docs/Api/LoggingPubsubApi.md) | [**createLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#createloggcppubsub) | Create a GCP Cloud Pub/Sub log endpoint
[*LoggingPubsubApi*](docs/Api/LoggingPubsubApi.md) | [**deleteLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#deleteloggcppubsub) | Delete a GCP Cloud Pub/Sub log endpoint
[*LoggingPubsubApi*](docs/Api/LoggingPubsubApi.md) | [**getLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#getloggcppubsub) | Get a GCP Cloud Pub/Sub log endpoint
[*LoggingPubsubApi*](docs/Api/LoggingPubsubApi.md) | [**listLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#listloggcppubsub) | List GCP Cloud Pub/Sub log endpoints
[*LoggingPubsubApi*](docs/Api/LoggingPubsubApi.md) | [**updateLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#updateloggcppubsub) | Update a GCP Cloud Pub/Sub log endpoint
[*LoggingS3Api*](docs/Api/LoggingS3Api.md) | [**createLogAwsS3**](docs/Api/LoggingS3Api.md#createlogawss3) | Create an AWS S3 log endpoint
[*LoggingS3Api*](docs/Api/LoggingS3Api.md) | [**deleteLogAwsS3**](docs/Api/LoggingS3Api.md#deletelogawss3) | Delete an AWS S3 log endpoint
[*LoggingS3Api*](docs/Api/LoggingS3Api.md) | [**getLogAwsS3**](docs/Api/LoggingS3Api.md#getlogawss3) | Get an AWS S3 log endpoint
[*LoggingS3Api*](docs/Api/LoggingS3Api.md) | [**listLogAwsS3**](docs/Api/LoggingS3Api.md#listlogawss3) | List AWS S3 log endpoints
[*LoggingS3Api*](docs/Api/LoggingS3Api.md) | [**updateLogAwsS3**](docs/Api/LoggingS3Api.md#updatelogawss3) | Update an AWS S3 log endpoint
[*LoggingScalyrApi*](docs/Api/LoggingScalyrApi.md) | [**createLogScalyr**](docs/Api/LoggingScalyrApi.md#createlogscalyr) | Create a Scalyr log endpoint
[*LoggingScalyrApi*](docs/Api/LoggingScalyrApi.md) | [**deleteLogScalyr**](docs/Api/LoggingScalyrApi.md#deletelogscalyr) | Delete the Scalyr log endpoint
[*LoggingScalyrApi*](docs/Api/LoggingScalyrApi.md) | [**getLogScalyr**](docs/Api/LoggingScalyrApi.md#getlogscalyr) | Get a Scalyr log endpoint
[*LoggingScalyrApi*](docs/Api/LoggingScalyrApi.md) | [**listLogScalyr**](docs/Api/LoggingScalyrApi.md#listlogscalyr) | List Scalyr log endpoints
[*LoggingScalyrApi*](docs/Api/LoggingScalyrApi.md) | [**updateLogScalyr**](docs/Api/LoggingScalyrApi.md#updatelogscalyr) | Update the Scalyr log endpoint
[*LoggingSftpApi*](docs/Api/LoggingSftpApi.md) | [**createLogSftp**](docs/Api/LoggingSftpApi.md#createlogsftp) | Create an SFTP log endpoint
[*LoggingSftpApi*](docs/Api/LoggingSftpApi.md) | [**deleteLogSftp**](docs/Api/LoggingSftpApi.md#deletelogsftp) | Delete an SFTP log endpoint
[*LoggingSftpApi*](docs/Api/LoggingSftpApi.md) | [**getLogSftp**](docs/Api/LoggingSftpApi.md#getlogsftp) | Get an SFTP log endpoint
[*LoggingSftpApi*](docs/Api/LoggingSftpApi.md) | [**listLogSftp**](docs/Api/LoggingSftpApi.md#listlogsftp) | List SFTP log endpoints
[*LoggingSftpApi*](docs/Api/LoggingSftpApi.md) | [**updateLogSftp**](docs/Api/LoggingSftpApi.md#updatelogsftp) | Update an SFTP log endpoint
[*LoggingSplunkApi*](docs/Api/LoggingSplunkApi.md) | [**createLogSplunk**](docs/Api/LoggingSplunkApi.md#createlogsplunk) | Create a Splunk log endpoint
[*LoggingSplunkApi*](docs/Api/LoggingSplunkApi.md) | [**deleteLogSplunk**](docs/Api/LoggingSplunkApi.md#deletelogsplunk) | Delete a Splunk log endpoint
[*LoggingSplunkApi*](docs/Api/LoggingSplunkApi.md) | [**getLogSplunk**](docs/Api/LoggingSplunkApi.md#getlogsplunk) | Get a Splunk log endpoint
[*LoggingSplunkApi*](docs/Api/LoggingSplunkApi.md) | [**listLogSplunk**](docs/Api/LoggingSplunkApi.md#listlogsplunk) | List Splunk log endpoints
[*LoggingSplunkApi*](docs/Api/LoggingSplunkApi.md) | [**updateLogSplunk**](docs/Api/LoggingSplunkApi.md#updatelogsplunk) | Update a Splunk log endpoint
[*LoggingSumologicApi*](docs/Api/LoggingSumologicApi.md) | [**createLogSumologic**](docs/Api/LoggingSumologicApi.md#createlogsumologic) | Create a Sumologic log endpoint
[*LoggingSumologicApi*](docs/Api/LoggingSumologicApi.md) | [**deleteLogSumologic**](docs/Api/LoggingSumologicApi.md#deletelogsumologic) | Delete a Sumologic log endpoint
[*LoggingSumologicApi*](docs/Api/LoggingSumologicApi.md) | [**getLogSumologic**](docs/Api/LoggingSumologicApi.md#getlogsumologic) | Get a Sumologic log endpoint
[*LoggingSumologicApi*](docs/Api/LoggingSumologicApi.md) | [**listLogSumologic**](docs/Api/LoggingSumologicApi.md#listlogsumologic) | List Sumologic log endpoints
[*LoggingSumologicApi*](docs/Api/LoggingSumologicApi.md) | [**updateLogSumologic**](docs/Api/LoggingSumologicApi.md#updatelogsumologic) | Update a Sumologic log endpoint
[*LoggingSyslogApi*](docs/Api/LoggingSyslogApi.md) | [**createLogSyslog**](docs/Api/LoggingSyslogApi.md#createlogsyslog) | Create a syslog log endpoint
[*LoggingSyslogApi*](docs/Api/LoggingSyslogApi.md) | [**deleteLogSyslog**](docs/Api/LoggingSyslogApi.md#deletelogsyslog) | Delete a syslog log endpoint
[*LoggingSyslogApi*](docs/Api/LoggingSyslogApi.md) | [**getLogSyslog**](docs/Api/LoggingSyslogApi.md#getlogsyslog) | Get a syslog log endpoint
[*LoggingSyslogApi*](docs/Api/LoggingSyslogApi.md) | [**listLogSyslog**](docs/Api/LoggingSyslogApi.md#listlogsyslog) | List Syslog log endpoints
[*LoggingSyslogApi*](docs/Api/LoggingSyslogApi.md) | [**updateLogSyslog**](docs/Api/LoggingSyslogApi.md#updatelogsyslog) | Update a syslog log endpoint
[*MutualAuthenticationApi*](docs/Api/MutualAuthenticationApi.md) | [**createMutualTlsAuthentication**](docs/Api/MutualAuthenticationApi.md#createmutualtlsauthentication) | Create a Mutual Authentication
[*MutualAuthenticationApi*](docs/Api/MutualAuthenticationApi.md) | [**deleteMutualTls**](docs/Api/MutualAuthenticationApi.md#deletemutualtls) | Delete a Mutual TLS
[*MutualAuthenticationApi*](docs/Api/MutualAuthenticationApi.md) | [**getMutualAuthentication**](docs/Api/MutualAuthenticationApi.md#getmutualauthentication) | Get a Mutual Authentication
[*MutualAuthenticationApi*](docs/Api/MutualAuthenticationApi.md) | [**listMutualAuthentications**](docs/Api/MutualAuthenticationApi.md#listmutualauthentications) | List Mutual Authentications
[*MutualAuthenticationApi*](docs/Api/MutualAuthenticationApi.md) | [**patchMutualAuthentication**](docs/Api/MutualAuthenticationApi.md#patchmutualauthentication) | Update a Mutual Authentication
[*PackageApi*](docs/Api/PackageApi.md) | [**getPackage**](docs/Api/PackageApi.md#getpackage) | Get details of the service&#39;s Compute@Edge package.
[*PackageApi*](docs/Api/PackageApi.md) | [**putPackage**](docs/Api/PackageApi.md#putpackage) | Upload a Compute@Edge package.
[*PoolApi*](docs/Api/PoolApi.md) | [**createServerPool**](docs/Api/PoolApi.md#createserverpool) | Create a server pool
[*PoolApi*](docs/Api/PoolApi.md) | [**deleteServerPool**](docs/Api/PoolApi.md#deleteserverpool) | Delete a server pool
[*PoolApi*](docs/Api/PoolApi.md) | [**getServerPool**](docs/Api/PoolApi.md#getserverpool) | Get a server pool
[*PoolApi*](docs/Api/PoolApi.md) | [**listServerPools**](docs/Api/PoolApi.md#listserverpools) | List server pools
[*PoolApi*](docs/Api/PoolApi.md) | [**updateServerPool**](docs/Api/PoolApi.md#updateserverpool) | Update a server pool
[*PopApi*](docs/Api/PopApi.md) | [**listPops**](docs/Api/PopApi.md#listpops) | List Fastly POPs
[*PublicIpListApi*](docs/Api/PublicIpListApi.md) | [**listFastlyIps**](docs/Api/PublicIpListApi.md#listfastlyips) | List Fastly&#39;s public IPs
[*PublishApi*](docs/Api/PublishApi.md) | [**publish**](docs/Api/PublishApi.md#publish) | Send messages to Fanout subscribers
[*PurgeApi*](docs/Api/PurgeApi.md) | [**bulkPurgeTag**](docs/Api/PurgeApi.md#bulkpurgetag) | Purge multiple surrogate key tags
[*PurgeApi*](docs/Api/PurgeApi.md) | [**purgeAll**](docs/Api/PurgeApi.md#purgeall) | Purge everything from a service
[*PurgeApi*](docs/Api/PurgeApi.md) | [**purgeSingleUrl**](docs/Api/PurgeApi.md#purgesingleurl) | Purge a URL
[*PurgeApi*](docs/Api/PurgeApi.md) | [**purgeTag**](docs/Api/PurgeApi.md#purgetag) | Purge by surrogate key tag
[*RateLimiterApi*](docs/Api/RateLimiterApi.md) | [**deleteRateLimiter**](docs/Api/RateLimiterApi.md#deleteratelimiter) | Delete a rate limiter
[*RateLimiterApi*](docs/Api/RateLimiterApi.md) | [**getRateLimiter**](docs/Api/RateLimiterApi.md#getratelimiter) | Get a rate limiter
[*RateLimiterApi*](docs/Api/RateLimiterApi.md) | [**listRateLimiters**](docs/Api/RateLimiterApi.md#listratelimiters) | List rate limiters
[*RealtimeApi*](docs/Api/RealtimeApi.md) | [**getStatsLast120Seconds**](docs/Api/RealtimeApi.md#getstatslast120seconds) | Get real-time data for the last 120 seconds
[*RealtimeApi*](docs/Api/RealtimeApi.md) | [**getStatsLast120SecondsLimitEntries**](docs/Api/RealtimeApi.md#getstatslast120secondslimitentries) | Get a limited number of real-time data entries
[*RealtimeApi*](docs/Api/RealtimeApi.md) | [**getStatsLastSecond**](docs/Api/RealtimeApi.md#getstatslastsecond) | Get real-time data from specified time
[*RequestSettingsApi*](docs/Api/RequestSettingsApi.md) | [**deleteRequestSettings**](docs/Api/RequestSettingsApi.md#deleterequestsettings) | Delete a Request Settings object
[*RequestSettingsApi*](docs/Api/RequestSettingsApi.md) | [**getRequestSettings**](docs/Api/RequestSettingsApi.md#getrequestsettings) | Get a Request Settings object
[*RequestSettingsApi*](docs/Api/RequestSettingsApi.md) | [**listRequestSettings**](docs/Api/RequestSettingsApi.md#listrequestsettings) | List Request Settings objects
[*RequestSettingsApi*](docs/Api/RequestSettingsApi.md) | [**updateRequestSettings**](docs/Api/RequestSettingsApi.md#updaterequestsettings) | Update a Request Settings object
[*ResourceApi*](docs/Api/ResourceApi.md) | [**createResource**](docs/Api/ResourceApi.md#createresource) | Create a resource
[*ResourceApi*](docs/Api/ResourceApi.md) | [**deleteResource**](docs/Api/ResourceApi.md#deleteresource) | Delete a resource
[*ResourceApi*](docs/Api/ResourceApi.md) | [**getResource**](docs/Api/ResourceApi.md#getresource) | Display a resource
[*ResourceApi*](docs/Api/ResourceApi.md) | [**listResources**](docs/Api/ResourceApi.md#listresources) | List resources
[*ResourceApi*](docs/Api/ResourceApi.md) | [**updateResource**](docs/Api/ResourceApi.md#updateresource) | Update a resource
[*ResponseObjectApi*](docs/Api/ResponseObjectApi.md) | [**deleteResponseObject**](docs/Api/ResponseObjectApi.md#deleteresponseobject) | Delete a Response Object
[*ResponseObjectApi*](docs/Api/ResponseObjectApi.md) | [**getResponseObject**](docs/Api/ResponseObjectApi.md#getresponseobject) | Get a Response object
[*ResponseObjectApi*](docs/Api/ResponseObjectApi.md) | [**listResponseObjects**](docs/Api/ResponseObjectApi.md#listresponseobjects) | List Response objects
[*ServerApi*](docs/Api/ServerApi.md) | [**createPoolServer**](docs/Api/ServerApi.md#createpoolserver) | Add a server to a pool
[*ServerApi*](docs/Api/ServerApi.md) | [**deletePoolServer**](docs/Api/ServerApi.md#deletepoolserver) | Delete a server from a pool
[*ServerApi*](docs/Api/ServerApi.md) | [**getPoolServer**](docs/Api/ServerApi.md#getpoolserver) | Get a pool server
[*ServerApi*](docs/Api/ServerApi.md) | [**listPoolServers**](docs/Api/ServerApi.md#listpoolservers) | List servers in a pool
[*ServerApi*](docs/Api/ServerApi.md) | [**updatePoolServer**](docs/Api/ServerApi.md#updatepoolserver) | Update a server
[*ServiceApi*](docs/Api/ServiceApi.md) | [**createService**](docs/Api/ServiceApi.md#createservice) | Create a service
[*ServiceApi*](docs/Api/ServiceApi.md) | [**deleteService**](docs/Api/ServiceApi.md#deleteservice) | Delete a service
[*ServiceApi*](docs/Api/ServiceApi.md) | [**getService**](docs/Api/ServiceApi.md#getservice) | Get a service
[*ServiceApi*](docs/Api/ServiceApi.md) | [**getServiceDetail**](docs/Api/ServiceApi.md#getservicedetail) | Get service details
[*ServiceApi*](docs/Api/ServiceApi.md) | [**listServiceDomains**](docs/Api/ServiceApi.md#listservicedomains) | List the domains within a service
[*ServiceApi*](docs/Api/ServiceApi.md) | [**listServices**](docs/Api/ServiceApi.md#listservices) | List services
[*ServiceApi*](docs/Api/ServiceApi.md) | [**searchService**](docs/Api/ServiceApi.md#searchservice) | Search for a service by name
[*ServiceApi*](docs/Api/ServiceApi.md) | [**updateService**](docs/Api/ServiceApi.md#updateservice) | Update a service
[*ServiceAuthorizationsApi*](docs/Api/ServiceAuthorizationsApi.md) | [**createServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#createserviceauthorization) | Create service authorization
[*ServiceAuthorizationsApi*](docs/Api/ServiceAuthorizationsApi.md) | [**deleteServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#deleteserviceauthorization) | Delete service authorization
[*ServiceAuthorizationsApi*](docs/Api/ServiceAuthorizationsApi.md) | [**listServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#listserviceauthorization) | List service authorizations
[*ServiceAuthorizationsApi*](docs/Api/ServiceAuthorizationsApi.md) | [**showServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#showserviceauthorization) | Show service authorization
[*ServiceAuthorizationsApi*](docs/Api/ServiceAuthorizationsApi.md) | [**updateServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#updateserviceauthorization) | Update service authorization
[*SettingsApi*](docs/Api/SettingsApi.md) | [**getServiceSettings**](docs/Api/SettingsApi.md#getservicesettings) | Get service settings
[*SnippetApi*](docs/Api/SnippetApi.md) | [**createSnippet**](docs/Api/SnippetApi.md#createsnippet) | Create a snippet
[*SnippetApi*](docs/Api/SnippetApi.md) | [**deleteSnippet**](docs/Api/SnippetApi.md#deletesnippet) | Delete a snippet
[*SnippetApi*](docs/Api/SnippetApi.md) | [**getSnippet**](docs/Api/SnippetApi.md#getsnippet) | Get a versioned snippet
[*SnippetApi*](docs/Api/SnippetApi.md) | [**getSnippetDynamic**](docs/Api/SnippetApi.md#getsnippetdynamic) | Get a dynamic snippet
[*SnippetApi*](docs/Api/SnippetApi.md) | [**listSnippets**](docs/Api/SnippetApi.md#listsnippets) | List snippets
[*SnippetApi*](docs/Api/SnippetApi.md) | [**updateSnippetDynamic**](docs/Api/SnippetApi.md#updatesnippetdynamic) | Update a dynamic snippet
[*StarApi*](docs/Api/StarApi.md) | [**createServiceStar**](docs/Api/StarApi.md#createservicestar) | Create a star
[*StarApi*](docs/Api/StarApi.md) | [**deleteServiceStar**](docs/Api/StarApi.md#deleteservicestar) | Delete a star
[*StarApi*](docs/Api/StarApi.md) | [**getServiceStar**](docs/Api/StarApi.md#getservicestar) | Get a star
[*StarApi*](docs/Api/StarApi.md) | [**listServiceStars**](docs/Api/StarApi.md#listservicestars) | List stars
[*StatsApi*](docs/Api/StatsApi.md) | [**getServiceStats**](docs/Api/StatsApi.md#getservicestats) | Get stats for a service
[*TlsActivationsApi*](docs/Api/TlsActivationsApi.md) | [**createTlsActivation**](docs/Api/TlsActivationsApi.md#createtlsactivation) | Enable TLS for a domain using a custom certificate
[*TlsActivationsApi*](docs/Api/TlsActivationsApi.md) | [**deleteTlsActivation**](docs/Api/TlsActivationsApi.md#deletetlsactivation) | Disable TLS on a domain
[*TlsActivationsApi*](docs/Api/TlsActivationsApi.md) | [**getTlsActivation**](docs/Api/TlsActivationsApi.md#gettlsactivation) | Get a TLS activation
[*TlsActivationsApi*](docs/Api/TlsActivationsApi.md) | [**listTlsActivations**](docs/Api/TlsActivationsApi.md#listtlsactivations) | List TLS activations
[*TlsActivationsApi*](docs/Api/TlsActivationsApi.md) | [**updateTlsActivation**](docs/Api/TlsActivationsApi.md#updatetlsactivation) | Update a certificate
[*TlsBulkCertificatesApi*](docs/Api/TlsBulkCertificatesApi.md) | [**deleteBulkTlsCert**](docs/Api/TlsBulkCertificatesApi.md#deletebulktlscert) | Delete a certificate
[*TlsBulkCertificatesApi*](docs/Api/TlsBulkCertificatesApi.md) | [**getTlsBulkCert**](docs/Api/TlsBulkCertificatesApi.md#gettlsbulkcert) | Get a certificate
[*TlsBulkCertificatesApi*](docs/Api/TlsBulkCertificatesApi.md) | [**listTlsBulkCerts**](docs/Api/TlsBulkCertificatesApi.md#listtlsbulkcerts) | List certificates
[*TlsBulkCertificatesApi*](docs/Api/TlsBulkCertificatesApi.md) | [**updateBulkTlsCert**](docs/Api/TlsBulkCertificatesApi.md#updatebulktlscert) | Update a certificate
[*TlsBulkCertificatesApi*](docs/Api/TlsBulkCertificatesApi.md) | [**uploadTlsBulkCert**](docs/Api/TlsBulkCertificatesApi.md#uploadtlsbulkcert) | Upload a certificate
[*TlsCertificatesApi*](docs/Api/TlsCertificatesApi.md) | [**createTlsCert**](docs/Api/TlsCertificatesApi.md#createtlscert) | Create a TLS certificate
[*TlsCertificatesApi*](docs/Api/TlsCertificatesApi.md) | [**deleteTlsCert**](docs/Api/TlsCertificatesApi.md#deletetlscert) | Delete a TLS certificate
[*TlsCertificatesApi*](docs/Api/TlsCertificatesApi.md) | [**getTlsCert**](docs/Api/TlsCertificatesApi.md#gettlscert) | Get a TLS certificate
[*TlsCertificatesApi*](docs/Api/TlsCertificatesApi.md) | [**listTlsCerts**](docs/Api/TlsCertificatesApi.md#listtlscerts) | List TLS certificates
[*TlsCertificatesApi*](docs/Api/TlsCertificatesApi.md) | [**updateTlsCert**](docs/Api/TlsCertificatesApi.md#updatetlscert) | Update a TLS certificate
[*TlsConfigurationsApi*](docs/Api/TlsConfigurationsApi.md) | [**getTlsConfig**](docs/Api/TlsConfigurationsApi.md#gettlsconfig) | Get a TLS configuration
[*TlsConfigurationsApi*](docs/Api/TlsConfigurationsApi.md) | [**listTlsConfigs**](docs/Api/TlsConfigurationsApi.md#listtlsconfigs) | List TLS configurations
[*TlsConfigurationsApi*](docs/Api/TlsConfigurationsApi.md) | [**updateTlsConfig**](docs/Api/TlsConfigurationsApi.md#updatetlsconfig) | Update a TLS configuration
[*TlsCsrsApi*](docs/Api/TlsCsrsApi.md) | [**createCsr**](docs/Api/TlsCsrsApi.md#createcsr) | Create CSR
[*TlsDomainsApi*](docs/Api/TlsDomainsApi.md) | [**listTlsDomains**](docs/Api/TlsDomainsApi.md#listtlsdomains) | List TLS domains
[*TlsPrivateKeysApi*](docs/Api/TlsPrivateKeysApi.md) | [**createTlsKey**](docs/Api/TlsPrivateKeysApi.md#createtlskey) | Create a TLS private key
[*TlsPrivateKeysApi*](docs/Api/TlsPrivateKeysApi.md) | [**deleteTlsKey**](docs/Api/TlsPrivateKeysApi.md#deletetlskey) | Delete a TLS private key
[*TlsPrivateKeysApi*](docs/Api/TlsPrivateKeysApi.md) | [**getTlsKey**](docs/Api/TlsPrivateKeysApi.md#gettlskey) | Get a TLS private key
[*TlsPrivateKeysApi*](docs/Api/TlsPrivateKeysApi.md) | [**listTlsKeys**](docs/Api/TlsPrivateKeysApi.md#listtlskeys) | List TLS private keys
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**createGlobalsignEmailChallenge**](docs/Api/TlsSubscriptionsApi.md#createglobalsignemailchallenge) | Creates a GlobalSign email challenge.
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**createTlsSub**](docs/Api/TlsSubscriptionsApi.md#createtlssub) | Create a TLS subscription
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**deleteGlobalsignEmailChallenge**](docs/Api/TlsSubscriptionsApi.md#deleteglobalsignemailchallenge) | Delete a GlobalSign email challenge
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**deleteTlsSub**](docs/Api/TlsSubscriptionsApi.md#deletetlssub) | Delete a TLS subscription
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**getTlsSub**](docs/Api/TlsSubscriptionsApi.md#gettlssub) | Get a TLS subscription
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**listTlsSubs**](docs/Api/TlsSubscriptionsApi.md#listtlssubs) | List TLS subscriptions
[*TlsSubscriptionsApi*](docs/Api/TlsSubscriptionsApi.md) | [**patchTlsSub**](docs/Api/TlsSubscriptionsApi.md#patchtlssub) | Update a TLS subscription
[*TokensApi*](docs/Api/TokensApi.md) | [**getTokenCurrent**](docs/Api/TokensApi.md#gettokencurrent) | Get the current token
[*TokensApi*](docs/Api/TokensApi.md) | [**listTokensCustomer**](docs/Api/TokensApi.md#listtokenscustomer) | List tokens for a customer
[*TokensApi*](docs/Api/TokensApi.md) | [**listTokensUser**](docs/Api/TokensApi.md#listtokensuser) | List tokens for the authenticated user
[*TokensApi*](docs/Api/TokensApi.md) | [**revokeToken**](docs/Api/TokensApi.md#revoketoken) | Revoke a token
[*TokensApi*](docs/Api/TokensApi.md) | [**revokeTokenCurrent**](docs/Api/TokensApi.md#revoketokencurrent) | Revoke the current token
[*UserApi*](docs/Api/UserApi.md) | [**createUser**](docs/Api/UserApi.md#createuser) | Create a user
[*UserApi*](docs/Api/UserApi.md) | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | Delete a user
[*UserApi*](docs/Api/UserApi.md) | [**getCurrentUser**](docs/Api/UserApi.md#getcurrentuser) | Get the current user
[*UserApi*](docs/Api/UserApi.md) | [**getUser**](docs/Api/UserApi.md#getuser) | Get a user
[*UserApi*](docs/Api/UserApi.md) | [**requestPasswordReset**](docs/Api/UserApi.md#requestpasswordreset) | Request a password reset
[*UserApi*](docs/Api/UserApi.md) | [**updateUser**](docs/Api/UserApi.md#updateuser) | Update a user
[*UserApi*](docs/Api/UserApi.md) | [**updateUserPassword**](docs/Api/UserApi.md#updateuserpassword) | Update the user&#39;s password
[*VclApi*](docs/Api/VclApi.md) | [**createCustomVcl**](docs/Api/VclApi.md#createcustomvcl) | Create a custom VCL file
[*VclApi*](docs/Api/VclApi.md) | [**deleteCustomVcl**](docs/Api/VclApi.md#deletecustomvcl) | Delete a custom VCL file
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVcl**](docs/Api/VclApi.md#getcustomvcl) | Get a custom VCL file
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVclBoilerplate**](docs/Api/VclApi.md#getcustomvclboilerplate) | Get boilerplate VCL
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVclGenerated**](docs/Api/VclApi.md#getcustomvclgenerated) | Get the generated VCL for a service
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVclGeneratedHighlighted**](docs/Api/VclApi.md#getcustomvclgeneratedhighlighted) | Get the generated VCL with syntax highlighting
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVclHighlighted**](docs/Api/VclApi.md#getcustomvclhighlighted) | Get a custom VCL file with syntax highlighting
[*VclApi*](docs/Api/VclApi.md) | [**getCustomVclRaw**](docs/Api/VclApi.md#getcustomvclraw) | Download a custom VCL file
[*VclApi*](docs/Api/VclApi.md) | [**lintVclDefault**](docs/Api/VclApi.md#lintvcldefault) | Lint (validate) VCL using a default set of flags.
[*VclApi*](docs/Api/VclApi.md) | [**lintVclForService**](docs/Api/VclApi.md#lintvclforservice) | Lint (validate) VCL using flags set for the service.
[*VclApi*](docs/Api/VclApi.md) | [**listCustomVcl**](docs/Api/VclApi.md#listcustomvcl) | List custom VCL files
[*VclApi*](docs/Api/VclApi.md) | [**setCustomVclMain**](docs/Api/VclApi.md#setcustomvclmain) | Set a custom VCL file as main
[*VclApi*](docs/Api/VclApi.md) | [**updateCustomVcl**](docs/Api/VclApi.md#updatecustomvcl) | Update a custom VCL file
[*VclDiffApi*](docs/Api/VclDiffApi.md) | [**vclDiffServiceVersions**](docs/Api/VclDiffApi.md#vcldiffserviceversions) | Get a comparison of the VCL changes between two service versions
[*VersionApi*](docs/Api/VersionApi.md) | [**activateServiceVersion**](docs/Api/VersionApi.md#activateserviceversion) | Activate a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**cloneServiceVersion**](docs/Api/VersionApi.md#cloneserviceversion) | Clone a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**createServiceVersion**](docs/Api/VersionApi.md#createserviceversion) | Create a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**deactivateServiceVersion**](docs/Api/VersionApi.md#deactivateserviceversion) | Deactivate a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**getServiceVersion**](docs/Api/VersionApi.md#getserviceversion) | Get a version of a service
[*VersionApi*](docs/Api/VersionApi.md) | [**listServiceVersions**](docs/Api/VersionApi.md#listserviceversions) | List versions of a service
[*VersionApi*](docs/Api/VersionApi.md) | [**lockServiceVersion**](docs/Api/VersionApi.md#lockserviceversion) | Lock a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**updateServiceVersion**](docs/Api/VersionApi.md#updateserviceversion) | Update a service version
[*VersionApi*](docs/Api/VersionApi.md) | [**validateServiceVersion**](docs/Api/VersionApi.md#validateserviceversion) | Validate a service version
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**bulkUpdateWafActiveRules**](docs/Api/WafActiveRulesApi.md#bulkupdatewafactiverules) | Update multiple active rules
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**createWafActiveRule**](docs/Api/WafActiveRulesApi.md#createwafactiverule) | Add a rule to a WAF as an active rule
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**createWafActiveRulesTag**](docs/Api/WafActiveRulesApi.md#createwafactiverulestag) | Create active rules by tag
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**deleteWafActiveRule**](docs/Api/WafActiveRulesApi.md#deletewafactiverule) | Delete an active rule
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**getWafActiveRule**](docs/Api/WafActiveRulesApi.md#getwafactiverule) | Get an active WAF rule object
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**listWafActiveRules**](docs/Api/WafActiveRulesApi.md#listwafactiverules) | List active rules on a WAF
[*WafActiveRulesApi*](docs/Api/WafActiveRulesApi.md) | [**updateWafActiveRule**](docs/Api/WafActiveRulesApi.md#updatewafactiverule) | Update an active rule
[*WafExclusionsApi*](docs/Api/WafExclusionsApi.md) | [**createWafRuleExclusion**](docs/Api/WafExclusionsApi.md#createwafruleexclusion) | Create a WAF rule exclusion
[*WafExclusionsApi*](docs/Api/WafExclusionsApi.md) | [**deleteWafRuleExclusion**](docs/Api/WafExclusionsApi.md#deletewafruleexclusion) | Delete a WAF rule exclusion
[*WafExclusionsApi*](docs/Api/WafExclusionsApi.md) | [**getWafRuleExclusion**](docs/Api/WafExclusionsApi.md#getwafruleexclusion) | Get a WAF rule exclusion
[*WafExclusionsApi*](docs/Api/WafExclusionsApi.md) | [**listWafRuleExclusions**](docs/Api/WafExclusionsApi.md#listwafruleexclusions) | List WAF rule exclusions
[*WafExclusionsApi*](docs/Api/WafExclusionsApi.md) | [**updateWafRuleExclusion**](docs/Api/WafExclusionsApi.md#updatewafruleexclusion) | Update a WAF rule exclusion
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**cloneWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#clonewaffirewallversion) | Clone a firewall version
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**createWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#createwaffirewallversion) | Create a firewall version
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**deployActivateWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#deployactivatewaffirewallversion) | Deploy or activate a firewall version
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**getWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#getwaffirewallversion) | Get a firewall version
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**listWafFirewallVersions**](docs/Api/WafFirewallVersionsApi.md#listwaffirewallversions) | List firewall versions
[*WafFirewallVersionsApi*](docs/Api/WafFirewallVersionsApi.md) | [**updateWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#updatewaffirewallversion) | Update a firewall version
[*WafFirewallsApi*](docs/Api/WafFirewallsApi.md) | [**createWafFirewall**](docs/Api/WafFirewallsApi.md#createwaffirewall) | Create a firewall
[*WafFirewallsApi*](docs/Api/WafFirewallsApi.md) | [**deleteWafFirewall**](docs/Api/WafFirewallsApi.md#deletewaffirewall) | Delete a firewall
[*WafFirewallsApi*](docs/Api/WafFirewallsApi.md) | [**getWafFirewall**](docs/Api/WafFirewallsApi.md#getwaffirewall) | Get a firewall
[*WafFirewallsApi*](docs/Api/WafFirewallsApi.md) | [**listWafFirewalls**](docs/Api/WafFirewallsApi.md#listwaffirewalls) | List firewalls
[*WafFirewallsApi*](docs/Api/WafFirewallsApi.md) | [**updateWafFirewall**](docs/Api/WafFirewallsApi.md#updatewaffirewall) | Update a firewall
[*WafRuleRevisionsApi*](docs/Api/WafRuleRevisionsApi.md) | [**getWafRuleRevision**](docs/Api/WafRuleRevisionsApi.md#getwafrulerevision) | Get a revision of a rule
[*WafRuleRevisionsApi*](docs/Api/WafRuleRevisionsApi.md) | [**listWafRuleRevisions**](docs/Api/WafRuleRevisionsApi.md#listwafrulerevisions) | List revisions for a rule
[*WafRulesApi*](docs/Api/WafRulesApi.md) | [**getWafRule**](docs/Api/WafRulesApi.md#getwafrule) | Get a rule
[*WafRulesApi*](docs/Api/WafRulesApi.md) | [**listWafRules**](docs/Api/WafRulesApi.md#listwafrules) | List available WAF rules
[*WafTagsApi*](docs/Api/WafTagsApi.md) | [**listWafTags**](docs/Api/WafTagsApi.md#listwaftags) | List tags


## Issues

The fastly-php API client currently does not support the following endpoints:

- [`/customer/{customer_id}/contacts`](https://developer.fastly.com/reference/api/account/contact) (POST)
- [`/metrics/domains/services/{service_id}`](https://developer.fastly.com/reference/api/metrics-stats/domain-inspector/historical) (GET)
- [`/metrics/origins/services/{service_id}`](https://developer.fastly.com/reference/api/metrics-stats/origin-inspector/historical) (GET)
- [`/rate-limiters/{rate_limiter_id}`](https://developer.fastly.com/reference/api/vcl-services/rate-limiter) (PUT)
- [`/resources/stores/object/{store_id}/keys/{key_name}`](https://developer.fastly.com/reference/api/) (DELETE, GET, PUT)
- [`/resources/stores/object/{store_id}/keys`](https://developer.fastly.com/reference/api/) (GET)
- [`/resources/stores/object/{store_id}`](https://developer.fastly.com/reference/api/) (DELETE, GET)
- [`/resources/stores/object`](https://developer.fastly.com/reference/api/) (GET, POST)
- [`/resources/stores/secret/{store_id}/secrets/{secret_name}`](https://developer.fastly.com/reference/api/) (DELETE, GET)
- [`/resources/stores/secret/{store_id}/secrets`](https://developer.fastly.com/reference/api/) (GET, POST)
- [`/resources/stores/secret/{store_id}`](https://developer.fastly.com/reference/api/) (DELETE, GET)
- [`/resources/stores/secret`](https://developer.fastly.com/reference/api/) (GET, POST)
- [`/roles/{role_id}/permissions`](https://developer.fastly.com/reference/api/account/roles) (DELETE, POST)
- [`/roles/{role_id}`](https://developer.fastly.com/reference/api/account/roles) (PATCH)
- [`/roles`](https://developer.fastly.com/reference/api/account/roles) (POST)
- [`/service-authorizations`](https://developer.fastly.com/reference/api/account/service-authorization) (DELETE, PATCH)
- [`/service-groups/{service_group_id}/services`](https://developer.fastly.com/reference/api/account/service-groups) (DELETE, POST)
- [`/service-groups/{service_group_id}`](https://developer.fastly.com/reference/api/account/service-groups) (PATCH)
- [`/service-groups`](https://developer.fastly.com/reference/api/account/service-groups) (POST)
- [`/service/{service_id}/dictionary/{dictionary_id}/items`](https://developer.fastly.com/reference/api/dictionaries/dictionary-item) (PATCH)
- [`/service/{service_id}/version/{version_id}/apex-redirects`](https://developer.fastly.com/reference/api/vcl-services/apex-redirect) (POST)
- [`/service/{service_id}/version/{version_id}/director/{director_name}`](https://developer.fastly.com/reference/api/load-balancing/directors/director) (PUT)
- [`/service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name}`](https://developer.fastly.com/reference/api/logging/kafka) (PUT)
- [`/service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name}`](https://developer.fastly.com/reference/api/logging/kinesis) (PUT)
- [`/service/{service_id}/version/{version_id}/rate-limiters`](https://developer.fastly.com/reference/api/vcl-services/rate-limiter) (POST)
- [`/service/{service_id}/version/{version_id}/request_settings`](https://developer.fastly.com/reference/api/vcl-services/request-settings) (POST)
- [`/service/{service_id}/version/{version_id}/response_object/{response_object_name}`](https://developer.fastly.com/reference/api/vcl-services/response-object) (PUT)
- [`/service/{service_id}/version/{version_id}/response_object`](https://developer.fastly.com/reference/api/vcl-services/response-object) (POST)
- [`/service/{service_id}/version/{version_id}/settings`](https://developer.fastly.com/reference/api/vcl-services/settings) (PUT)
- [`/service/{service_id}/version/{version_id}/snippet/{snippet_name}`](https://developer.fastly.com/reference/api/vcl-services/snippet) (PUT)
- [`/service/{service_id}/version/{version_id}/wafs/{firewall_id}`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (GET, PATCH)
- [`/service/{service_id}/version/{version_id}/wafs`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (GET, POST)
- [`/service/{service_id}/wafs/{firewall_id}/owasp`](https://developer.fastly.com/reference/api/legacy-waf/owasp) (GET, PATCH, POST)
- [`/service/{service_id}/wafs/{firewall_id}/rule_statuses`](https://developer.fastly.com/reference/api/legacy-waf/rule-status) (GET, POST)
- [`/service/{service_id}/wafs/{firewall_id}/rules/{waf_rule_id}/rule_status`](https://developer.fastly.com/reference/api/legacy-waf/rule-status) (GET, PATCH)
- [`/service/{service_id}/wafs/{firewall_id}/ruleset/preview`](https://developer.fastly.com/reference/api/legacy-waf/ruleset) (GET)
- [`/service/{service_id}/wafs/{firewall_id}/ruleset`](https://developer.fastly.com/reference/api/legacy-waf/ruleset) (GET, PATCH)
- [`/service/{service_id}/wafs/{firewall_id}/update_statuses/{update_status_id}`](https://developer.fastly.com/reference/api/legacy-waf/update-status) (GET)
- [`/service/{service_id}/wafs/{firewall_id}/update_statuses`](https://developer.fastly.com/reference/api/legacy-waf/update-status) (GET)
- [`/sudo`](https://developer.fastly.com/reference/api/utils/sudo) (POST)
- [`/tls/activations/{tls_activation_id}`](https://developer.fastly.com/reference/api/tls/mutual-tls/activations) (GET, PATCH)
- [`/tls/activations`](https://developer.fastly.com/reference/api/tls/mutual-tls/activations) (GET)
- [`/tokens`](https://developer.fastly.com/reference/api/auth-tokens/user) (DELETE, POST)
- [`/user-groups/{user_group_id}/members`](https://developer.fastly.com/reference/api/account/user-groups) (DELETE, POST)
- [`/user-groups/{user_group_id}/roles`](https://developer.fastly.com/reference/api/account/user-groups) (DELETE, POST)
- [`/user-groups/{user_group_id}/service-groups`](https://developer.fastly.com/reference/api/account/user-groups) (DELETE, POST)
- [`/user-groups/{user_group_id}`](https://developer.fastly.com/reference/api/account/user-groups) (PATCH)
- [`/user-groups`](https://developer.fastly.com/reference/api/account/user-groups) (POST)
- [`/v1/channel/{service_id}/ts/h/limit/{max_entries}`](https://developer.fastly.com/reference/api/metrics-stats/origin-insights) (GET)
- [`/v1/channel/{service_id}/ts/h`](https://developer.fastly.com/reference/api/metrics-stats/origin-insights) (GET)
- [`/v1/channel/{service_id}/ts/{start_timestamp}`](https://developer.fastly.com/reference/api/metrics-stats/origin-insights) (GET)
- [`/v1/domains/{service_id}/ts/h/limit/{max_entries}`](https://developer.fastly.com/reference/api/metrics-stats/domain-inspector/real-time) (GET)
- [`/v1/domains/{service_id}/ts/h`](https://developer.fastly.com/reference/api/metrics-stats/domain-inspector/real-time) (GET)
- [`/v1/domains/{service_id}/ts/{start_timestamp}`](https://developer.fastly.com/reference/api/metrics-stats/domain-inspector/real-time) (GET)
- [`/v1/origins/{service_id}/ts/h/limit/{max_entries}`](https://developer.fastly.com/reference/api/metrics-stats/origin-inspector/real-time) (GET)
- [`/v1/origins/{service_id}/ts/h`](https://developer.fastly.com/reference/api/metrics-stats/origin-inspector/real-time) (GET)
- [`/v1/origins/{service_id}/ts/{start_timestamp}`](https://developer.fastly.com/reference/api/metrics-stats/origin-inspector/real-time) (GET)
- [`/waf/firewalls/{firewall_id}/versions/{version_id}/active-rules`](https://developer.fastly.com/reference/api/waf/rules/active) (DELETE)
- [`/wafs/configuration_sets/{configuration_set_id}/relationships/wafs`](https://developer.fastly.com/reference/api/legacy-waf/configuration-set) (GET, PATCH)
- [`/wafs/configuration_sets`](https://developer.fastly.com/reference/api/legacy-waf/configuration-set) (GET)
- [`/wafs/rules/{waf_rule_id}/vcl`](https://developer.fastly.com/reference/api/legacy-waf/rule) (GET)
- [`/wafs/rules/{waf_rule_id}`](https://developer.fastly.com/reference/api/legacy-waf/rule) (GET)
- [`/wafs/rules`](https://developer.fastly.com/reference/api/legacy-waf/rule) (GET)
- [`/wafs/tags`](https://developer.fastly.com/reference/api/legacy-waf/tag) (GET)
- [`/wafs/{firewall_id}/disable`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (PATCH)
- [`/wafs/{firewall_id}/enable`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (PATCH)
- [`/wafs/{firewall_id}/rules/{waf_rule_id}/vcl`](https://developer.fastly.com/reference/api/legacy-waf/rule) (GET)
- [`/wafs/{firewall_id}`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (GET)
- [`/wafs`](https://developer.fastly.com/reference/api/legacy-waf/firewall) (GET)


If you encounter any non-security-related bug or unexpected behavior, please [file an issue][bug]
using the bug report template.

[bug]: https://github.com/fastly/fastly-php/issues/new?labels=bug

### Security issues

Please see our [SECURITY.md](./SECURITY.md) for guidance on reporting security-related issues.

## License

[MIT](./LICENSE).
