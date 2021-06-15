# OpenAPIClient-php

Via the Fastly API you can perform any of the operations that are possible within the management console,  including creating services, domains, and backends, configuring rules or uploading your own application code, as well as account operations such as user administration and billing reports.
The API is organized into collections of endpoints that allow manipulation of objects related to Fastly services and accounts.
For the most accurate and up-to-date API reference content, visit developer.fastly.com/reference/api/



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Fastly-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Fastly-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AclApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$version_id = 56; // int
$created_at = 'created_at_example'; // string | Date and time in ISO 8601 format.
$deleted_at = 'deleted_at_example'; // string | Date and time in ISO 8601 format.
$updated_at = 'updated_at_example'; // string | Date and time in ISO 8601 format.
$service_id2 = 'service_id_example'; // string | Alphanumeric string identifying the service.
$version = 56; // int | Integer identifying a service version.
$name = 'name_example'; // string | Name for the ACL. Must start with an alphanumeric character and contain only alphanumeric characters, underscores, and whitespace. Required.
$id = 'id_example'; // string | Alphanumeric string identifying a ACL.

try {
    $result = $apiInstance->createAcl($service_id, $version_id, $created_at, $deleted_at, $updated_at, $service_id2, $version, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclApi->createAcl: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.fastly.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AclApi* | [**createAcl**](docs/Api/AclApi.md#createacl) | **POST** /service/{service_id}/version/{version_id}/acl | Create a new ACL
*AclApi* | [**deleteAcl**](docs/Api/AclApi.md#deleteacl) | **DELETE** /service/{service_id}/version/{version_id}/acl/{acl_name} | Delete an ACL
*AclApi* | [**getAcl**](docs/Api/AclApi.md#getacl) | **GET** /service/{service_id}/version/{version_id}/acl/{acl_name} | Describe an ACL
*AclApi* | [**listAcls**](docs/Api/AclApi.md#listacls) | **GET** /service/{service_id}/version/{version_id}/acl | List ACLs
*AclApi* | [**updateAcl**](docs/Api/AclApi.md#updateacl) | **PUT** /service/{service_id}/version/{version_id}/acl/{acl_name} | Update an ACL
*AclEntryApi* | [**bulkUpdateAclEntries**](docs/Api/AclEntryApi.md#bulkupdateaclentries) | **PATCH** /service/{service_id}/acl/{acl_id}/entries | Update multiple ACL entries
*AclEntryApi* | [**createAclEntry**](docs/Api/AclEntryApi.md#createaclentry) | **POST** /service/{service_id}/acl/{acl_id}/entry | Create an ACL entry
*AclEntryApi* | [**deleteAclEntry**](docs/Api/AclEntryApi.md#deleteaclentry) | **DELETE** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Delete an ACL entry
*AclEntryApi* | [**getAclEntry**](docs/Api/AclEntryApi.md#getaclentry) | **GET** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Describe an ACL entry
*AclEntryApi* | [**listAclEntries**](docs/Api/AclEntryApi.md#listaclentries) | **GET** /service/{service_id}/acl/{acl_id}/entries | List ACL entries
*AclEntryApi* | [**updateAclEntry**](docs/Api/AclEntryApi.md#updateaclentry) | **PATCH** /service/{service_id}/acl/{acl_id}/entry/{acl_entry_id} | Update an ACL entry
*BackendApi* | [**createBackend**](docs/Api/BackendApi.md#createbackend) | **POST** /service/{service_id}/version/{version_id}/backend | Create a backend
*BackendApi* | [**deleteBackend**](docs/Api/BackendApi.md#deletebackend) | **DELETE** /service/{service_id}/version/{version_id}/backend/{backend_name} | Delete a backend
*BackendApi* | [**getBackend**](docs/Api/BackendApi.md#getbackend) | **GET** /service/{service_id}/version/{version_id}/backend/{backend_name} | Describe a backend
*BackendApi* | [**listBackends**](docs/Api/BackendApi.md#listbackends) | **GET** /service/{service_id}/version/{version_id}/backend | List backends
*BackendApi* | [**updateBackend**](docs/Api/BackendApi.md#updatebackend) | **PUT** /service/{service_id}/version/{version_id}/backend/{backend_name} | Update a backend
*BillingApi* | [**getInvoice**](docs/Api/BillingApi.md#getinvoice) | **GET** /billing/v2/year/{year}/month/{month} | Get an invoice
*BillingApi* | [**getInvoiceMtd**](docs/Api/BillingApi.md#getinvoicemtd) | **GET** /billing/v2/account_customers/{customer_id}/mtd_invoice | Get month-to-date billing estimate
*BillingAddressApi* | [**addBillingAddr**](docs/Api/BillingAddressApi.md#addbillingaddr) | **POST** /customer/{customer_id}/billing_address | Add a billing address to a customer
*BillingAddressApi* | [**deleteBillingAddr**](docs/Api/BillingAddressApi.md#deletebillingaddr) | **DELETE** /customer/{customer_id}/billing_address | Delete a billing address
*BillingAddressApi* | [**getBillingAddr**](docs/Api/BillingAddressApi.md#getbillingaddr) | **GET** /customer/{customer_id}/billing_address | Get a billing address
*BillingAddressApi* | [**updateBillingAddr**](docs/Api/BillingAddressApi.md#updatebillingaddr) | **PATCH** /customer/{customer_id}/billing_address | Update a billing address
*CacheSettingsApi* | [**createCacheSettings**](docs/Api/CacheSettingsApi.md#createcachesettings) | **POST** /service/{service_id}/version/{version_id}/cache_settings | Create a cache settings object
*CacheSettingsApi* | [**deleteCacheSettings**](docs/Api/CacheSettingsApi.md#deletecachesettings) | **DELETE** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Delete a cache settings object
*CacheSettingsApi* | [**getCacheSettings**](docs/Api/CacheSettingsApi.md#getcachesettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Get a cache settings object
*CacheSettingsApi* | [**listCacheSettings**](docs/Api/CacheSettingsApi.md#listcachesettings) | **GET** /service/{service_id}/version/{version_id}/cache_settings | List cache settings objects
*CacheSettingsApi* | [**updateCacheSettings**](docs/Api/CacheSettingsApi.md#updatecachesettings) | **PUT** /service/{service_id}/version/{version_id}/cache_settings/{cache_settings_name} | Update a cache settings object
*ConditionApi* | [**createCondition**](docs/Api/ConditionApi.md#createcondition) | **POST** /service/{service_id}/version/{version_id}/condition | Create a condition
*ConditionApi* | [**deleteCondition**](docs/Api/ConditionApi.md#deletecondition) | **DELETE** /service/{service_id}/version/{version_id}/condition/{condition_name} | Delete a condition
*ConditionApi* | [**getCondition**](docs/Api/ConditionApi.md#getcondition) | **GET** /service/{service_id}/version/{version_id}/condition/{condition_name} | Describe a condition
*ConditionApi* | [**listConditions**](docs/Api/ConditionApi.md#listconditions) | **GET** /service/{service_id}/version/{version_id}/condition | List conditions
*ConditionApi* | [**updateCondition**](docs/Api/ConditionApi.md#updatecondition) | **PUT** /service/{service_id}/version/{version_id}/condition/{condition_name} | Update a condition
*ContentApi* | [**contentCheck**](docs/Api/ContentApi.md#contentcheck) | **GET** /content/edge_check | Check status of content in each data center cache
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/{customer_id} | Delete a customer
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/{customer_id} | Get a customer
*CustomerApi* | [**getLoggedInCustomer**](docs/Api/CustomerApi.md#getloggedincustomer) | **GET** /current_customer | Get the logged in customer
*CustomerApi* | [**listUsers**](docs/Api/CustomerApi.md#listusers) | **GET** /customer/{customer_id}/users | List users
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /customer/{customer_id} | Update a customer
*DatacenterApi* | [**listDatacenters**](docs/Api/DatacenterApi.md#listdatacenters) | **GET** /datacenters | List Fastly datacenters
*DictionaryApi* | [**createDictionary**](docs/Api/DictionaryApi.md#createdictionary) | **POST** /service/{service_id}/version/{version_id}/dictionary | Create an edge dictionary
*DictionaryApi* | [**deleteDictionary**](docs/Api/DictionaryApi.md#deletedictionary) | **DELETE** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Delete an edge dictionary
*DictionaryApi* | [**getDictionary**](docs/Api/DictionaryApi.md#getdictionary) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Get an edge dictionary
*DictionaryApi* | [**listDictionaries**](docs/Api/DictionaryApi.md#listdictionaries) | **GET** /service/{service_id}/version/{version_id}/dictionary | List edge dictionaries
*DictionaryApi* | [**updateDictionary**](docs/Api/DictionaryApi.md#updatedictionary) | **PUT** /service/{service_id}/version/{version_id}/dictionary/{dictionary_name} | Update an edge dictionary
*DictionaryInfoApi* | [**getDictionaryInfo**](docs/Api/DictionaryInfoApi.md#getdictionaryinfo) | **GET** /service/{service_id}/version/{version_id}/dictionary/{dictionary_id}/info | Get edge dictionary metadata
*DictionaryItemApi* | [**bulkUpdateDictionaryItem**](docs/Api/DictionaryItemApi.md#bulkupdatedictionaryitem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/items | Update multiple entries in an edge dictionary
*DictionaryItemApi* | [**createDictionaryItem**](docs/Api/DictionaryItemApi.md#createdictionaryitem) | **POST** /service/{service_id}/dictionary/{dictionary_id}/item | Create an entry in an edge dictionary
*DictionaryItemApi* | [**deleteDictionaryItem**](docs/Api/DictionaryItemApi.md#deletedictionaryitem) | **DELETE** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Delete an item from an edge dictionary
*DictionaryItemApi* | [**getDictionaryItem**](docs/Api/DictionaryItemApi.md#getdictionaryitem) | **GET** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Get an item from an edge dictionary
*DictionaryItemApi* | [**listDictionaryItems**](docs/Api/DictionaryItemApi.md#listdictionaryitems) | **GET** /service/{service_id}/dictionary/{dictionary_id}/items | List items in an edge dictionary
*DictionaryItemApi* | [**updateDictionaryItem**](docs/Api/DictionaryItemApi.md#updatedictionaryitem) | **PATCH** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Update an entry in an edge dictionary
*DictionaryItemApi* | [**upsertDictionaryItem**](docs/Api/DictionaryItemApi.md#upsertdictionaryitem) | **PUT** /service/{service_id}/dictionary/{dictionary_id}/item/{dictionary_item_key} | Insert or update an entry in an edge dictionary
*DiffApi* | [**diffServiceVersions**](docs/Api/DiffApi.md#diffserviceversions) | **GET** /service/{service_id}/diff/from/{from_version_id}/to/{to_version_id} | Diff two service versions
*DirectorApi* | [**createDirector**](docs/Api/DirectorApi.md#createdirector) | **POST** /service/{service_id}/version/{version_id}/director | Create a director
*DirectorApi* | [**deleteDirector**](docs/Api/DirectorApi.md#deletedirector) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name} | Delete a director
*DirectorApi* | [**getDirector**](docs/Api/DirectorApi.md#getdirector) | **GET** /service/{service_id}/version/{version_id}/director/{director_name} | Get a director
*DirectorApi* | [**listDirectors**](docs/Api/DirectorApi.md#listdirectors) | **GET** /service/{service_id}/version/{version_id}/director | List directors
*DirectorApi* | [**updateDirector**](docs/Api/DirectorApi.md#updatedirector) | **PUT** /service/{service_id}/version/{version_id}/director/{director_name} | Update a director
*DirectorBackendApi* | [**createDirectorBackend**](docs/Api/DirectorBackendApi.md#createdirectorbackend) | **POST** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Create a director-backend relationship
*DirectorBackendApi* | [**deleteDirectorBackend**](docs/Api/DirectorBackendApi.md#deletedirectorbackend) | **DELETE** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Delete a director-backend relationship
*DirectorBackendApi* | [**getDirectorBackend**](docs/Api/DirectorBackendApi.md#getdirectorbackend) | **GET** /service/{service_id}/version/{version_id}/director/{director_name}/backend/{backend_name} | Get a director-backend relationship
*DomainApi* | [**checkDomain**](docs/Api/DomainApi.md#checkdomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name}/check | Validate DNS configuration for a single domain on a service
*DomainApi* | [**checkDomains**](docs/Api/DomainApi.md#checkdomains) | **GET** /service/{service_id}/version/{version_id}/domain/check_all | Validate DNS configuration for all domains on a service
*DomainApi* | [**createDomain**](docs/Api/DomainApi.md#createdomain) | **POST** /service/{service_id}/version/{version_id}/domain | Add a domain name to a service
*DomainApi* | [**deleteDomain**](docs/Api/DomainApi.md#deletedomain) | **DELETE** /service/{service_id}/version/{version_id}/domain/{domain_name} | Remove a domain from a service
*DomainApi* | [**getDomain**](docs/Api/DomainApi.md#getdomain) | **GET** /service/{service_id}/version/{version_id}/domain/{domain_name} | Describe a domain
*DomainApi* | [**listDomains**](docs/Api/DomainApi.md#listdomains) | **GET** /service/{service_id}/version/{version_id}/domain | List domains
*DomainApi* | [**updateDomain**](docs/Api/DomainApi.md#updatedomain) | **PUT** /service/{service_id}/version/{version_id}/domain/{domain_name} | Update a domain
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{event_id} | Get an event
*EventsApi* | [**listEvents**](docs/Api/EventsApi.md#listevents) | **GET** /events | List events
*GzipApi* | [**createGzipConfig**](docs/Api/GzipApi.md#creategzipconfig) | **POST** /service/{service_id}/version/{version_id}/gzip | Create a gzip configuration
*GzipApi* | [**deleteGzipConfig**](docs/Api/GzipApi.md#deletegzipconfig) | **DELETE** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Delete a gzip configuration
*GzipApi* | [**getGzipConfigs**](docs/Api/GzipApi.md#getgzipconfigs) | **GET** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Get a gzip configuration
*GzipApi* | [**listGzipConfigs**](docs/Api/GzipApi.md#listgzipconfigs) | **GET** /service/{service_id}/version/{version_id}/gzip | List gzip configurations
*GzipApi* | [**updateGzipConfig**](docs/Api/GzipApi.md#updategzipconfig) | **PUT** /service/{service_id}/version/{version_id}/gzip/{gzip_name} | Update a gzip configuration
*HeaderApi* | [**createHeaderObject**](docs/Api/HeaderApi.md#createheaderobject) | **POST** /service/{service_id}/version/{version_id}/header | Create a Header object
*HeaderApi* | [**deleteHeaderObject**](docs/Api/HeaderApi.md#deleteheaderobject) | **DELETE** /service/{service_id}/version/{version_id}/header/{header_name} | Delete a Header object
*HeaderApi* | [**getHeaderObject**](docs/Api/HeaderApi.md#getheaderobject) | **GET** /service/{service_id}/version/{version_id}/header/{header_name} | Get a Header object
*HeaderApi* | [**listHeaderObjects**](docs/Api/HeaderApi.md#listheaderobjects) | **GET** /service/{service_id}/version/{version_id}/header | List Header objects
*HeaderApi* | [**updateHeaderObject**](docs/Api/HeaderApi.md#updateheaderobject) | **PUT** /service/{service_id}/version/{version_id}/header/{header_name} | Update a Header object
*HealthcheckApi* | [**createHealthcheck**](docs/Api/HealthcheckApi.md#createhealthcheck) | **POST** /service/{service_id}/version/{version_id}/healthcheck | Create a healthcheck
*HealthcheckApi* | [**deleteHealthcheck**](docs/Api/HealthcheckApi.md#deletehealthcheck) | **DELETE** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Delete a healthcheck
*HealthcheckApi* | [**getHealthcheck**](docs/Api/HealthcheckApi.md#gethealthcheck) | **GET** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Get a healthcheck
*HealthcheckApi* | [**listHealthchecks**](docs/Api/HealthcheckApi.md#listhealthchecks) | **GET** /service/{service_id}/version/{version_id}/healthcheck | List healthchecks
*HealthcheckApi* | [**updateHealthcheck**](docs/Api/HealthcheckApi.md#updatehealthcheck) | **PUT** /service/{service_id}/version/{version_id}/healthcheck/{healthcheck_name} | Update a healthcheck
*InvitationsApi* | [**createInvitation**](docs/Api/InvitationsApi.md#createinvitation) | **POST** /invitations | Create an invitation
*InvitationsApi* | [**deleteInvitation**](docs/Api/InvitationsApi.md#deleteinvitation) | **DELETE** /invitations/{invitation_id} | Delete an invitation
*InvitationsApi* | [**listInvitations**](docs/Api/InvitationsApi.md#listinvitations) | **GET** /invitations | List invitations
*LoggingAzureblobApi* | [**createLogAzure**](docs/Api/LoggingAzureblobApi.md#createlogazure) | **POST** /service/{service_id}/version/{version_id}/logging/azureblob | Create an Azure Blob Storage log endpoint
*LoggingAzureblobApi* | [**deleteLoogAzure**](docs/Api/LoggingAzureblobApi.md#deleteloogazure) | **DELETE** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Delete the Azure Blob Storage log endpoint
*LoggingAzureblobApi* | [**getLogAzure**](docs/Api/LoggingAzureblobApi.md#getlogazure) | **GET** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Get an Azure Blob Storage log endpoint
*LoggingAzureblobApi* | [**listLogAzure**](docs/Api/LoggingAzureblobApi.md#listlogazure) | **GET** /service/{service_id}/version/{version_id}/logging/azureblob | List Azure Blob Storage log endpoints
*LoggingAzureblobApi* | [**updateLogAzure**](docs/Api/LoggingAzureblobApi.md#updatelogazure) | **PUT** /service/{service_id}/version/{version_id}/logging/azureblob/{logging_azureblob_name} | Update an Azure Blob Storage log endpoint
*LoggingBigqueryApi* | [**createLogBigquery**](docs/Api/LoggingBigqueryApi.md#createlogbigquery) | **POST** /service/{service_id}/version/{version_id}/logging/bigquery | Create a BigQuery log endpoint
*LoggingBigqueryApi* | [**deleteLogBigquery**](docs/Api/LoggingBigqueryApi.md#deletelogbigquery) | **DELETE** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Delete a BigQuery log endpoint
*LoggingBigqueryApi* | [**getLogBigquery**](docs/Api/LoggingBigqueryApi.md#getlogbigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Get a BigQuery log endpoint
*LoggingBigqueryApi* | [**listLogBigquery**](docs/Api/LoggingBigqueryApi.md#listlogbigquery) | **GET** /service/{service_id}/version/{version_id}/logging/bigquery | List BigQuery log endpoints
*LoggingBigqueryApi* | [**updateLogBigquery**](docs/Api/LoggingBigqueryApi.md#updatelogbigquery) | **PUT** /service/{service_id}/version/{version_id}/logging/bigquery/{logging_bigquery_name} | Update a BigQuery log endpoint
*LoggingCloudfilesApi* | [**createLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#createlogcloudfiles) | **POST** /service/{service_id}/version/{version_id}/logging/cloudfiles | Create a Cloud Files log endpoint
*LoggingCloudfilesApi* | [**deleteLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#deletelogcloudfiles) | **DELETE** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Delete the Cloud Files log endpoint
*LoggingCloudfilesApi* | [**getLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#getlogcloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Get a Cloud Files log endpoint
*LoggingCloudfilesApi* | [**listLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#listlogcloudfiles) | **GET** /service/{service_id}/version/{version_id}/logging/cloudfiles | List Cloud Files log endpoints
*LoggingCloudfilesApi* | [**updateLogCloudfiles**](docs/Api/LoggingCloudfilesApi.md#updatelogcloudfiles) | **PUT** /service/{service_id}/version/{version_id}/logging/cloudfiles/{logging_cloudfiles_name} | Update the Cloud Files log endpoint
*LoggingDatadogApi* | [**createLogDatadog**](docs/Api/LoggingDatadogApi.md#createlogdatadog) | **POST** /service/{service_id}/version/{version_id}/logging/datadog | Create a Datadog log endpoint
*LoggingDatadogApi* | [**deleteLogDatadog**](docs/Api/LoggingDatadogApi.md#deletelogdatadog) | **DELETE** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Delete a Datadog log endpoint
*LoggingDatadogApi* | [**getLogDatadog**](docs/Api/LoggingDatadogApi.md#getlogdatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Get a Datadog log endpoint
*LoggingDatadogApi* | [**listLogDatadog**](docs/Api/LoggingDatadogApi.md#listlogdatadog) | **GET** /service/{service_id}/version/{version_id}/logging/datadog | List Datadog log endpoints
*LoggingDatadogApi* | [**updateLogDatadog**](docs/Api/LoggingDatadogApi.md#updatelogdatadog) | **PUT** /service/{service_id}/version/{version_id}/logging/datadog/{logging_datadog_name} | Update a Datadog log endpoint
*LoggingDigitaloceanApi* | [**createLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#createlogdigocean) | **POST** /service/{service_id}/version/{version_id}/logging/digitalocean | Create a DigitalOcean Spaces log endpoint
*LoggingDigitaloceanApi* | [**deleteLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#deletelogdigocean) | **DELETE** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Delete a DigitalOcean Spaces log endpoint
*LoggingDigitaloceanApi* | [**getLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#getlogdigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Get a DigitalOcean Spaces log endpoint
*LoggingDigitaloceanApi* | [**listLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#listlogdigocean) | **GET** /service/{service_id}/version/{version_id}/logging/digitalocean | List DigitalOcean Spaces log endpoints
*LoggingDigitaloceanApi* | [**updateLogDigocean**](docs/Api/LoggingDigitaloceanApi.md#updatelogdigocean) | **PUT** /service/{service_id}/version/{version_id}/logging/digitalocean/{logging_digitalocean_name} | Update a DigitalOcean Spaces log endpoint
*LoggingElasticsearchApi* | [**createLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#createlogelasticsearch) | **POST** /service/{service_id}/version/{version_id}/logging/elasticsearch | Create an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**deleteLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#deletelogelasticsearch) | **DELETE** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Delete an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**getLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#getlogelasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Get an Elasticsearch log endpoint
*LoggingElasticsearchApi* | [**listLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#listlogelasticsearch) | **GET** /service/{service_id}/version/{version_id}/logging/elasticsearch | List Elasticsearch log endpoints
*LoggingElasticsearchApi* | [**updateLogElasticsearch**](docs/Api/LoggingElasticsearchApi.md#updatelogelasticsearch) | **PUT** /service/{service_id}/version/{version_id}/logging/elasticsearch/{logging_elasticsearch_name} | Update an Elasticsearch log endpoint
*LoggingFtpApi* | [**createLogFtp**](docs/Api/LoggingFtpApi.md#createlogftp) | **POST** /service/{service_id}/version/{version_id}/logging/ftp | Create an FTP log endpoint
*LoggingFtpApi* | [**deleteLogFtp**](docs/Api/LoggingFtpApi.md#deletelogftp) | **DELETE** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Delete an FTP log endpoint
*LoggingFtpApi* | [**getLogFtp**](docs/Api/LoggingFtpApi.md#getlogftp) | **GET** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Get an FTP log endpoint
*LoggingFtpApi* | [**listLogFtp**](docs/Api/LoggingFtpApi.md#listlogftp) | **GET** /service/{service_id}/version/{version_id}/logging/ftp | List FTP log endpoints
*LoggingFtpApi* | [**updateLogFtp**](docs/Api/LoggingFtpApi.md#updatelogftp) | **PUT** /service/{service_id}/version/{version_id}/logging/ftp/{logging_ftp_name} | Update an FTP log endpoint
*LoggingGcsApi* | [**createLogGcs**](docs/Api/LoggingGcsApi.md#createloggcs) | **POST** /service/{service_id}/version/{version_id}/logging/gcs | Create a GCS log endpoint
*LoggingGcsApi* | [**deleteLogGcs**](docs/Api/LoggingGcsApi.md#deleteloggcs) | **DELETE** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Delete a GCS log endpoint
*LoggingGcsApi* | [**getLogGcs**](docs/Api/LoggingGcsApi.md#getloggcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Get a GCS log endpoint
*LoggingGcsApi* | [**listLogGcs**](docs/Api/LoggingGcsApi.md#listloggcs) | **GET** /service/{service_id}/version/{version_id}/logging/gcs | List GCS log endpoints
*LoggingGcsApi* | [**updateLogGcs**](docs/Api/LoggingGcsApi.md#updateloggcs) | **PUT** /service/{service_id}/version/{version_id}/logging/gcs/{logging_gcs_name} | Update a GCS log endpoint
*LoggingHerokuApi* | [**createLogHeroku**](docs/Api/LoggingHerokuApi.md#createlogheroku) | **POST** /service/{service_id}/version/{version_id}/logging/heroku | Create a Heroku log endpoint
*LoggingHerokuApi* | [**deleteLogHeroku**](docs/Api/LoggingHerokuApi.md#deletelogheroku) | **DELETE** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Delete the Heroku log endpoint
*LoggingHerokuApi* | [**getLogHeroku**](docs/Api/LoggingHerokuApi.md#getlogheroku) | **GET** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Get a Heroku log endpoint
*LoggingHerokuApi* | [**listLogHeroku**](docs/Api/LoggingHerokuApi.md#listlogheroku) | **GET** /service/{service_id}/version/{version_id}/logging/heroku | List Heroku log endpoints
*LoggingHerokuApi* | [**updateLogHeroku**](docs/Api/LoggingHerokuApi.md#updatelogheroku) | **PUT** /service/{service_id}/version/{version_id}/logging/heroku/{logging_heroku_name} | Update the Heroku log endpoint
*LoggingHoneycombApi* | [**createLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#createloghoneycomb) | **POST** /service/{service_id}/version/{version_id}/logging/honeycomb | Create a Honeycomb log endpoint
*LoggingHoneycombApi* | [**deleteLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#deleteloghoneycomb) | **DELETE** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Delete the Honeycomb log endpoint
*LoggingHoneycombApi* | [**getLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#getloghoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Get a Honeycomb log endpoint
*LoggingHoneycombApi* | [**listLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#listloghoneycomb) | **GET** /service/{service_id}/version/{version_id}/logging/honeycomb | List Honeycomb log endpoints
*LoggingHoneycombApi* | [**updateLogHoneycomb**](docs/Api/LoggingHoneycombApi.md#updateloghoneycomb) | **PUT** /service/{service_id}/version/{version_id}/logging/honeycomb/{logging_honeycomb_name} | Update a Honeycomb log endpoint
*LoggingHttpsApi* | [**createLogHttps**](docs/Api/LoggingHttpsApi.md#createloghttps) | **POST** /service/{service_id}/version/{version_id}/logging/https | Create an HTTPS log endpoint
*LoggingHttpsApi* | [**deleteLogHttps**](docs/Api/LoggingHttpsApi.md#deleteloghttps) | **DELETE** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Delete an HTTPS log endpoint
*LoggingHttpsApi* | [**getLogHttps**](docs/Api/LoggingHttpsApi.md#getloghttps) | **GET** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Get an HTTPS log endpoint
*LoggingHttpsApi* | [**listLogHttps**](docs/Api/LoggingHttpsApi.md#listloghttps) | **GET** /service/{service_id}/version/{version_id}/logging/https | List HTTPS log endpoints
*LoggingHttpsApi* | [**updateLogHttps**](docs/Api/LoggingHttpsApi.md#updateloghttps) | **PUT** /service/{service_id}/version/{version_id}/logging/https/{logging_https_name} | Update an HTTPS log endpoint
*LoggingKafkaApi* | [**createLogKafka**](docs/Api/LoggingKafkaApi.md#createlogkafka) | **POST** /service/{service_id}/version/{version_id}/logging/kafka | Create a Kafka log endpoint
*LoggingKafkaApi* | [**deleteLogKafka**](docs/Api/LoggingKafkaApi.md#deletelogkafka) | **DELETE** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Delete the Kafka log endpoint
*LoggingKafkaApi* | [**getLogKafka**](docs/Api/LoggingKafkaApi.md#getlogkafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Get a Kafka log endpoint
*LoggingKafkaApi* | [**listLogKafka**](docs/Api/LoggingKafkaApi.md#listlogkafka) | **GET** /service/{service_id}/version/{version_id}/logging/kafka | List Kafka log endpoints
*LoggingKafkaApi* | [**updateLogKafka**](docs/Api/LoggingKafkaApi.md#updatelogkafka) | **PUT** /service/{service_id}/version/{version_id}/logging/kafka/{logging_kafka_name} | Update the Kafka log endpoint
*LoggingKinesisApi* | [**createLogKinesis**](docs/Api/LoggingKinesisApi.md#createlogkinesis) | **POST** /service/{service_id}/version/{version_id}/logging/kinesis | Create  an Amazon Kinesis log endpoint
*LoggingKinesisApi* | [**deleteLogKinesis**](docs/Api/LoggingKinesisApi.md#deletelogkinesis) | **DELETE** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Delete the Amazon Kinesis log endpoint
*LoggingKinesisApi* | [**getLogKinesis**](docs/Api/LoggingKinesisApi.md#getlogkinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Get an Amazon Kinesis log endpoint
*LoggingKinesisApi* | [**listLogKinesis**](docs/Api/LoggingKinesisApi.md#listlogkinesis) | **GET** /service/{service_id}/version/{version_id}/logging/kinesis | List Amazon Kinesis log endpoints
*LoggingKinesisApi* | [**updateLogKinesis**](docs/Api/LoggingKinesisApi.md#updatelogkinesis) | **PUT** /service/{service_id}/version/{version_id}/logging/kinesis/{logging_kinesis_name} | Update the Amazon Kinesis log endpoint
*LoggingLogentriesApi* | [**createLogLogentries**](docs/Api/LoggingLogentriesApi.md#createloglogentries) | **POST** /service/{service_id}/version/{version_id}/logging/logentries | Create a Logentries log endpoint
*LoggingLogentriesApi* | [**deleteLogLogentries**](docs/Api/LoggingLogentriesApi.md#deleteloglogentries) | **DELETE** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Delete a Logentries log endpoint
*LoggingLogentriesApi* | [**getLogLogentries**](docs/Api/LoggingLogentriesApi.md#getloglogentries) | **GET** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Get a Logentries log endpoint
*LoggingLogentriesApi* | [**listLogLogentries**](docs/Api/LoggingLogentriesApi.md#listloglogentries) | **GET** /service/{service_id}/version/{version_id}/logging/logentries | List Logentries log endpoints
*LoggingLogentriesApi* | [**updateLogLogentries**](docs/Api/LoggingLogentriesApi.md#updateloglogentries) | **PUT** /service/{service_id}/version/{version_id}/logging/logentries/{logging_logentries_name} | Update a Logentries log endpoint
*LoggingLogglyApi* | [**createLogLoggly**](docs/Api/LoggingLogglyApi.md#createlogloggly) | **POST** /service/{service_id}/version/{version_id}/logging/loggly | Create a Loggly log endpoint
*LoggingLogglyApi* | [**deleteLogLoggly**](docs/Api/LoggingLogglyApi.md#deletelogloggly) | **DELETE** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Delete a Loggly log endpoint
*LoggingLogglyApi* | [**getLogLoggly**](docs/Api/LoggingLogglyApi.md#getlogloggly) | **GET** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Get a Loggly log endpoint
*LoggingLogglyApi* | [**listLogLoggly**](docs/Api/LoggingLogglyApi.md#listlogloggly) | **GET** /service/{service_id}/version/{version_id}/logging/loggly | List Loggly log endpoints
*LoggingLogglyApi* | [**updateLogLoggly**](docs/Api/LoggingLogglyApi.md#updatelogloggly) | **PUT** /service/{service_id}/version/{version_id}/logging/loggly/{logging_loggly_name} | Update a Loggly log endpoint
*LoggingLogshuttleApi* | [**createLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#createloglogshuttle) | **POST** /service/{service_id}/version/{version_id}/logging/logshuttle | Create a Log Shuttle log endpoint
*LoggingLogshuttleApi* | [**deleteLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#deleteloglogshuttle) | **DELETE** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Delete a Log Shuttle log endpoint
*LoggingLogshuttleApi* | [**getLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#getloglogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Get a Log Shuttle log endpoint
*LoggingLogshuttleApi* | [**listLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#listloglogshuttle) | **GET** /service/{service_id}/version/{version_id}/logging/logshuttle | List Log Shuttle log endpoints
*LoggingLogshuttleApi* | [**updateLogLogshuttle**](docs/Api/LoggingLogshuttleApi.md#updateloglogshuttle) | **PUT** /service/{service_id}/version/{version_id}/logging/logshuttle/{logging_logshuttle_name} | Update a Log Shuttle log endpoint
*LoggingNewrelicApi* | [**createLogNewrelic**](docs/Api/LoggingNewrelicApi.md#createlognewrelic) | **POST** /service/{service_id}/version/{version_id}/logging/newrelic | Create a New Relic log endpoint
*LoggingNewrelicApi* | [**deleteLogNewrelic**](docs/Api/LoggingNewrelicApi.md#deletelognewrelic) | **DELETE** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Delete a New Relic log endpoint
*LoggingNewrelicApi* | [**getLogNewrelic**](docs/Api/LoggingNewrelicApi.md#getlognewrelic) | **GET** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Get a New Relic log endpoint
*LoggingNewrelicApi* | [**listLogNewrelic**](docs/Api/LoggingNewrelicApi.md#listlognewrelic) | **GET** /service/{service_id}/version/{version_id}/logging/newrelic | List New Relic log endpoints
*LoggingNewrelicApi* | [**updateLogNewrelic**](docs/Api/LoggingNewrelicApi.md#updatelognewrelic) | **PUT** /service/{service_id}/version/{version_id}/logging/newrelic/{logging_newrelic_name} | Update a New Relic log endpoint
*LoggingOpenstackApi* | [**createLogOpenstack**](docs/Api/LoggingOpenstackApi.md#createlogopenstack) | **POST** /service/{service_id}/version/{version_id}/logging/openstack | Create an OpenStack log endpoint
*LoggingOpenstackApi* | [**deleteLogOpenstack**](docs/Api/LoggingOpenstackApi.md#deletelogopenstack) | **DELETE** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Delete an OpenStack log endpoint
*LoggingOpenstackApi* | [**getLogOpenstack**](docs/Api/LoggingOpenstackApi.md#getlogopenstack) | **GET** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Get an OpenStack log endpoint
*LoggingOpenstackApi* | [**listLogOpenstack**](docs/Api/LoggingOpenstackApi.md#listlogopenstack) | **GET** /service/{service_id}/version/{version_id}/logging/openstack | List OpenStack log endpoints
*LoggingOpenstackApi* | [**updateLogOpenstack**](docs/Api/LoggingOpenstackApi.md#updatelogopenstack) | **PUT** /service/{service_id}/version/{version_id}/logging/openstack/{logging_openstack_name} | Update an OpenStack log endpoint
*LoggingPapertrailApi* | [**createLogPapertrail**](docs/Api/LoggingPapertrailApi.md#createlogpapertrail) | **POST** /service/{service_id}/version/{version_id}/logging/papertrail | Create a Papertrail log endpoint
*LoggingPapertrailApi* | [**deleteLogPapertrail**](docs/Api/LoggingPapertrailApi.md#deletelogpapertrail) | **DELETE** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Delete a Papertrail log endpoint
*LoggingPapertrailApi* | [**getLogPapertrail**](docs/Api/LoggingPapertrailApi.md#getlogpapertrail) | **GET** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Get a Papertrail log endpoint
*LoggingPapertrailApi* | [**listLogPapertrail**](docs/Api/LoggingPapertrailApi.md#listlogpapertrail) | **GET** /service/{service_id}/version/{version_id}/logging/papertrail | List Papertrail log endpoints
*LoggingPapertrailApi* | [**updateLogPapertrail**](docs/Api/LoggingPapertrailApi.md#updatelogpapertrail) | **PUT** /service/{service_id}/version/{version_id}/logging/papertrail/{logging_papertrail_name} | Update a Papertrail log endpoint
*LoggingPubsubApi* | [**createLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#createloggcppubsub) | **POST** /service/{service_id}/version/{version_id}/logging/pubsub | Create a GCP Cloud Pub/Sub log endpoint
*LoggingPubsubApi* | [**deleteLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#deleteloggcppubsub) | **DELETE** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Delete a GCP Cloud Pub/Sub log endpoint
*LoggingPubsubApi* | [**getLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#getloggcppubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Get a GCP Cloud Pub/Sub log endpoint
*LoggingPubsubApi* | [**listLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#listloggcppubsub) | **GET** /service/{service_id}/version/{version_id}/logging/pubsub | List GCP Cloud Pub/Sub log endpoints
*LoggingPubsubApi* | [**updateLogGcpPubsub**](docs/Api/LoggingPubsubApi.md#updateloggcppubsub) | **PUT** /service/{service_id}/version/{version_id}/logging/pubsub/{logging_google_pubsub_name} | Update a GCP Cloud Pub/Sub log endpoint
*LoggingS3Api* | [**createLogAwsS3**](docs/Api/LoggingS3Api.md#createlogawss3) | **POST** /service/{service_id}/version/{version_id}/logging/s3 | Create an AWS S3 log endpoint
*LoggingS3Api* | [**deleteLogAwsS3**](docs/Api/LoggingS3Api.md#deletelogawss3) | **DELETE** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Delete an AWS S3 log endpoint
*LoggingS3Api* | [**getLogAwsS3**](docs/Api/LoggingS3Api.md#getlogawss3) | **GET** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Get an AWS S3 log endpoint
*LoggingS3Api* | [**listLogAwsS3**](docs/Api/LoggingS3Api.md#listlogawss3) | **GET** /service/{service_id}/version/{version_id}/logging/s3 | List AWS S3 log endpoints
*LoggingS3Api* | [**updateLogAwsS3**](docs/Api/LoggingS3Api.md#updatelogawss3) | **PUT** /service/{service_id}/version/{version_id}/logging/s3/{logging_s3_name} | Update an AWS S3 log endpoint
*LoggingScalyrApi* | [**createLogScalyr**](docs/Api/LoggingScalyrApi.md#createlogscalyr) | **POST** /service/{service_id}/version/{version_id}/logging/scalyr | Create a Scalyr log endpoint
*LoggingScalyrApi* | [**deleteLogScalyr**](docs/Api/LoggingScalyrApi.md#deletelogscalyr) | **DELETE** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Delete the Scalyr log endpoint
*LoggingScalyrApi* | [**getLogScalyr**](docs/Api/LoggingScalyrApi.md#getlogscalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Get a Scalyr log endpoint
*LoggingScalyrApi* | [**listLogScalyr**](docs/Api/LoggingScalyrApi.md#listlogscalyr) | **GET** /service/{service_id}/version/{version_id}/logging/scalyr | List Scalyr log endpoints
*LoggingScalyrApi* | [**updateLogScalyr**](docs/Api/LoggingScalyrApi.md#updatelogscalyr) | **PUT** /service/{service_id}/version/{version_id}/logging/scalyr/{logging_scalyr_name} | Update the Scalyr log endpoint
*LoggingSftpApi* | [**createLogSftp**](docs/Api/LoggingSftpApi.md#createlogsftp) | **POST** /service/{service_id}/version/{version_id}/logging/sftp | Create an SFTP log endpoint
*LoggingSftpApi* | [**deleteLogSftp**](docs/Api/LoggingSftpApi.md#deletelogsftp) | **DELETE** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Delete an SFTP log endpoint
*LoggingSftpApi* | [**getLogSftp**](docs/Api/LoggingSftpApi.md#getlogsftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Get an SFTP log endpoint
*LoggingSftpApi* | [**listLogSftp**](docs/Api/LoggingSftpApi.md#listlogsftp) | **GET** /service/{service_id}/version/{version_id}/logging/sftp | List SFTP log endpoints
*LoggingSftpApi* | [**updateLogSftp**](docs/Api/LoggingSftpApi.md#updatelogsftp) | **PUT** /service/{service_id}/version/{version_id}/logging/sftp/{logging_sftp_name} | Update an SFTP log endpoint
*LoggingSplunkApi* | [**createLogSplunk**](docs/Api/LoggingSplunkApi.md#createlogsplunk) | **POST** /service/{service_id}/version/{version_id}/logging/splunk | Create a Splunk log endpoint
*LoggingSplunkApi* | [**deleteLogSplunk**](docs/Api/LoggingSplunkApi.md#deletelogsplunk) | **DELETE** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Delete a Splunk log endpoint
*LoggingSplunkApi* | [**getLogSplunk**](docs/Api/LoggingSplunkApi.md#getlogsplunk) | **GET** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Get a Splunk log endpoint
*LoggingSplunkApi* | [**listLogSplunk**](docs/Api/LoggingSplunkApi.md#listlogsplunk) | **GET** /service/{service_id}/version/{version_id}/logging/splunk | List Splunk log endpoints
*LoggingSplunkApi* | [**updateLogSplunk**](docs/Api/LoggingSplunkApi.md#updatelogsplunk) | **PUT** /service/{service_id}/version/{version_id}/logging/splunk/{logging_splunk_name} | Update a Splunk log endpoint
*LoggingSumologicApi* | [**createLogSumologic**](docs/Api/LoggingSumologicApi.md#createlogsumologic) | **POST** /service/{service_id}/version/{version_id}/logging/sumologic | Create a Sumologic log endpoint
*LoggingSumologicApi* | [**deleteLogSumologic**](docs/Api/LoggingSumologicApi.md#deletelogsumologic) | **DELETE** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Delete a Sumologic log endpoint
*LoggingSumologicApi* | [**getLogSumologic**](docs/Api/LoggingSumologicApi.md#getlogsumologic) | **GET** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Get a Sumologic log endpoint
*LoggingSumologicApi* | [**listLogSumologic**](docs/Api/LoggingSumologicApi.md#listlogsumologic) | **GET** /service/{service_id}/version/{version_id}/logging/sumologic | List Sumologic log endpoints
*LoggingSumologicApi* | [**updateLogSumologic**](docs/Api/LoggingSumologicApi.md#updatelogsumologic) | **PUT** /service/{service_id}/version/{version_id}/logging/sumologic/{logging_sumologic_name} | Update a Sumologic log endpoint
*LoggingSyslogApi* | [**createLogSyslog**](docs/Api/LoggingSyslogApi.md#createlogsyslog) | **POST** /service/{service_id}/version/{version_id}/logging/syslog | Create a syslog log endpoint
*LoggingSyslogApi* | [**deleteLogSyslog**](docs/Api/LoggingSyslogApi.md#deletelogsyslog) | **DELETE** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Delete a syslog log endpoint
*LoggingSyslogApi* | [**getLogSyslog**](docs/Api/LoggingSyslogApi.md#getlogsyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Get a syslog log endpoint
*LoggingSyslogApi* | [**listLogSyslog**](docs/Api/LoggingSyslogApi.md#listlogsyslog) | **GET** /service/{service_id}/version/{version_id}/logging/syslog | List Syslog log endpoints
*LoggingSyslogApi* | [**updateLogSyslog**](docs/Api/LoggingSyslogApi.md#updatelogsyslog) | **PUT** /service/{service_id}/version/{version_id}/logging/syslog/{logging_syslog_name} | Update a syslog log endpoint
*OriginInsightsApi* | [**getOriginInsightsLast120Seconds**](docs/Api/OriginInsightsApi.md#getorigininsightslast120seconds) | **GET** /v1/channel/{service_id}/ts/h?kind&#x3D;origin_insights | Get real-time origin data for the last 120 seconds
*OriginInsightsApi* | [**getOriginInsightsLastMaxEntries**](docs/Api/OriginInsightsApi.md#getorigininsightslastmaxentries) | **GET** /v1/channel/{service_id}/ts/h/limit/{max_entries}?kind&#x3D;origin_insights | Get a limited number of real-time origin data entries
*OriginInsightsApi* | [**getOriginInsightsLastSecond**](docs/Api/OriginInsightsApi.md#getorigininsightslastsecond) | **GET** /v1/channel/{service_id}/ts/{start_timestamp}?kind&#x3D;origin_insights | Get real-time origin data for the last second
*PackageApi* | [**getPackage**](docs/Api/PackageApi.md#getpackage) | **GET** /service/{service_id}/version/{version_id}/package | Get details of the service&#39;s Compute@Edge package.
*PackageApi* | [**putPackage**](docs/Api/PackageApi.md#putpackage) | **PUT** /service/{service_id}/version/{version_id}/package | Upload a Compute@Edge package.
*PoolApi* | [**createServerPool**](docs/Api/PoolApi.md#createserverpool) | **POST** /service/{service_id}/version/{version_id}/pool | Create a server pool
*PoolApi* | [**deleteServerPool**](docs/Api/PoolApi.md#deleteserverpool) | **DELETE** /service/{service_id}/version/{version_id}/pool/{pool_name} | Delete a server pool
*PoolApi* | [**getServerPool**](docs/Api/PoolApi.md#getserverpool) | **GET** /service/{service_id}/version/{version_id}/pool/{pool_name} | Get a server pool
*PoolApi* | [**listServerPools**](docs/Api/PoolApi.md#listserverpools) | **GET** /service/{service_id}/version/{version_id}/pool | List server pools
*PoolApi* | [**updateServerPool**](docs/Api/PoolApi.md#updateserverpool) | **PUT** /service/{service_id}/version/{version_id}/pool/{pool_name} | Update a server pool
*PublicIpListApi* | [**listFastlyIps**](docs/Api/PublicIpListApi.md#listfastlyips) | **GET** /public-ip-list | List Fastly&#39;s public IPs
*RateLimiterApi* | [**createRateLimiter**](docs/Api/RateLimiterApi.md#createratelimiter) | **POST** /service/{service_id}/version/{version_id}/rate-limiters | Create a rate limiter
*RateLimiterApi* | [**deleteRateLimiter**](docs/Api/RateLimiterApi.md#deleteratelimiter) | **DELETE** /rate-limiters/{rate_limiter_id} | Delete a rate limiter
*RateLimiterApi* | [**getRateLimiter**](docs/Api/RateLimiterApi.md#getratelimiter) | **GET** /rate-limiters/{rate_limiter_id} | Get a rate limiter
*RateLimiterApi* | [**listRateLimiters**](docs/Api/RateLimiterApi.md#listratelimiters) | **GET** /service/{service_id}/version/{version_id}/rate-limiters | List rate limiters
*RateLimiterApi* | [**updateRateLimiter**](docs/Api/RateLimiterApi.md#updateratelimiter) | **PUT** /rate-limiters/{rate_limiter_id} | Update a rate limiter
*RealtimeApi* | [**getStatsLast120Seconds**](docs/Api/RealtimeApi.md#getstatslast120seconds) | **GET** /v1/channel/{service_id}/ts/h | Get real-time data for the last 120 seconds
*RealtimeApi* | [**getStatsLast120SecondsLimitEntries**](docs/Api/RealtimeApi.md#getstatslast120secondslimitentries) | **GET** /v1/channel/{service_id}/ts/h/limit/{max_entries} | Get a limited number of real-time data entries
*RealtimeApi* | [**getStatsLastSecond**](docs/Api/RealtimeApi.md#getstatslastsecond) | **GET** /v1/channel/{service_id}/ts/{timestamp_in_seconds} | Get real-time data for the last second
*RequestSettingsApi* | [**createRequestSettings**](docs/Api/RequestSettingsApi.md#createrequestsettings) | **POST** /service/{service_id}/version/{version_id}/request_settings | Create a Request Settings object
*RequestSettingsApi* | [**deleteRequestSettings**](docs/Api/RequestSettingsApi.md#deleterequestsettings) | **DELETE** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Delete a Request Settings object
*RequestSettingsApi* | [**getRequestSettings**](docs/Api/RequestSettingsApi.md#getrequestsettings) | **GET** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Get a Request Settings object
*RequestSettingsApi* | [**listRequestSettings**](docs/Api/RequestSettingsApi.md#listrequestsettings) | **GET** /service/{service_id}/version/{version_id}/request_settings | List Request Settings objects
*RequestSettingsApi* | [**updateRequestSettings**](docs/Api/RequestSettingsApi.md#updaterequestsettings) | **PUT** /service/{service_id}/version/{version_id}/request_settings/{request_settings_name} | Update a Request Settings object
*ResponseObjectApi* | [**createResponseObject**](docs/Api/ResponseObjectApi.md#createresponseobject) | **POST** /service/{service_id}/version/{version_id}/response_object | Create a Response object
*ResponseObjectApi* | [**deleteResponseObject**](docs/Api/ResponseObjectApi.md#deleteresponseobject) | **DELETE** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Delete a Response Object
*ResponseObjectApi* | [**getResponseObject**](docs/Api/ResponseObjectApi.md#getresponseobject) | **GET** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Get a Response object
*ResponseObjectApi* | [**listResponseObjects**](docs/Api/ResponseObjectApi.md#listresponseobjects) | **GET** /service/{service_id}/version/{version_id}/response_object | List Response objects
*ResponseObjectApi* | [**updateResponseObject**](docs/Api/ResponseObjectApi.md#updateresponseobject) | **PUT** /service/{service_id}/version/{version_id}/response_object/{response_object_name} | Update a Response object
*ServerApi* | [**createPoolServer**](docs/Api/ServerApi.md#createpoolserver) | **POST** /service/{service_id}/pool/{pool_id}/server | Add a server to a pool
*ServerApi* | [**deletePoolServer**](docs/Api/ServerApi.md#deletepoolserver) | **DELETE** /service/{service_id}/pool/{pool_id}/server/{server_id} | Delete a server from a pool
*ServerApi* | [**getPoolServer**](docs/Api/ServerApi.md#getpoolserver) | **GET** /service/{service_id}/pool/{pool_id}/server/{server_id} | Get a pool server
*ServerApi* | [**listPoolServers**](docs/Api/ServerApi.md#listpoolservers) | **GET** /service/{service_id}/pool/{pool_id}/servers | List servers in a pool
*ServerApi* | [**updatePoolServer**](docs/Api/ServerApi.md#updatepoolserver) | **PUT** /service/{service_id}/pool/{pool_id}/server/{server_id} | Update a server
*ServiceApi* | [**createService**](docs/Api/ServiceApi.md#createservice) | **POST** /service | Create a service
*ServiceApi* | [**deleteService**](docs/Api/ServiceApi.md#deleteservice) | **DELETE** /service/{service_id} | Delete a service
*ServiceApi* | [**getService**](docs/Api/ServiceApi.md#getservice) | **GET** /service/{service_id} | Get a service
*ServiceApi* | [**getServiceDetail**](docs/Api/ServiceApi.md#getservicedetail) | **GET** /service/{service_id}/details | Get service details
*ServiceApi* | [**listServiceDomains**](docs/Api/ServiceApi.md#listservicedomains) | **GET** /service/{service_id}/domain | List the domains within a service
*ServiceApi* | [**listServices**](docs/Api/ServiceApi.md#listservices) | **GET** /service | List services
*ServiceApi* | [**searchService**](docs/Api/ServiceApi.md#searchservice) | **GET** /service/search | Search for a service by name
*ServiceApi* | [**updateService**](docs/Api/ServiceApi.md#updateservice) | **PUT** /service/{service_id} | Update a service
*ServiceAuthorizationsApi* | [**createServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#createserviceauthorization) | **POST** /service-authorizations | Create service authorization
*ServiceAuthorizationsApi* | [**deleteServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#deleteserviceauthorization) | **DELETE** /service-authorizations/{service_authorization_id} | Delete service authorization
*ServiceAuthorizationsApi* | [**deleteServiceAuthorization2**](docs/Api/ServiceAuthorizationsApi.md#deleteserviceauthorization2) | **DELETE** /service-authorizations | Delete service authorizations
*ServiceAuthorizationsApi* | [**listServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#listserviceauthorization) | **GET** /service-authorizations | List service authorizations
*ServiceAuthorizationsApi* | [**showServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#showserviceauthorization) | **GET** /service-authorizations/{service_authorization_id} | Show service authorization
*ServiceAuthorizationsApi* | [**updateServiceAuthorization**](docs/Api/ServiceAuthorizationsApi.md#updateserviceauthorization) | **PATCH** /service-authorizations/{service_authorization_id} | Update service authorization
*ServiceAuthorizationsApi* | [**updateServiceAuthorization2**](docs/Api/ServiceAuthorizationsApi.md#updateserviceauthorization2) | **PATCH** /service-authorizations | Update service authorizations
*SettingsApi* | [**getServiceSettings**](docs/Api/SettingsApi.md#getservicesettings) | **GET** /service/{service_id}/version/{version_id}/settings | Get service settings
*SettingsApi* | [**updateServiceSettings**](docs/Api/SettingsApi.md#updateservicesettings) | **PUT** /service/{service_id}/version/{version_id}/settings | Update service settings
*SnippetApi* | [**createSnippet**](docs/Api/SnippetApi.md#createsnippet) | **POST** /service/{service_id}/version/{version_id}/snippet | Create a snippet
*SnippetApi* | [**deleteSnippet**](docs/Api/SnippetApi.md#deletesnippet) | **DELETE** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Delete a snippet
*SnippetApi* | [**getSnippet**](docs/Api/SnippetApi.md#getsnippet) | **GET** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Get a versioned snippet
*SnippetApi* | [**getSnippetDynamic**](docs/Api/SnippetApi.md#getsnippetdynamic) | **GET** /service/{service_id}/snippet/{snippet_id} | Get a dynamic snippet
*SnippetApi* | [**listSnippets**](docs/Api/SnippetApi.md#listsnippets) | **GET** /service/{service_id}/version/{version_id}/snippet | List snippets
*SnippetApi* | [**updateSnippet**](docs/Api/SnippetApi.md#updatesnippet) | **PUT** /service/{service_id}/version/{version_id}/snippet/{snippet_name} | Update a versioned snippet
*SnippetApi* | [**updateSnippetDynamic**](docs/Api/SnippetApi.md#updatesnippetdynamic) | **PUT** /service/{service_id}/snippet/{snippet_id} | Update a dynamic snippet
*StarApi* | [**createServiceStar**](docs/Api/StarApi.md#createservicestar) | **POST** /stars | Create a star
*StarApi* | [**deleteServiceStar**](docs/Api/StarApi.md#deleteservicestar) | **DELETE** /stars/{star_id} | Delete a star
*StarApi* | [**getServiceStar**](docs/Api/StarApi.md#getservicestar) | **GET** /stars/{star_id} | Get a star
*StarApi* | [**listServiceStars**](docs/Api/StarApi.md#listservicestars) | **GET** /stars | List stars
*StatsApi* | [**getServiceStats**](docs/Api/StatsApi.md#getservicestats) | **GET** /service/{service_id}/stats/summary | Get stats for a service
*TlsActivationsApi* | [**createTlsActivation**](docs/Api/TlsActivationsApi.md#createtlsactivation) | **POST** /tls/activations | Enable TLS for a domain using a custom certificate
*TlsActivationsApi* | [**deleteTlsActivation**](docs/Api/TlsActivationsApi.md#deletetlsactivation) | **DELETE** /tls/activations/{tls_activation_id} | Disable TLS on a domain
*TlsActivationsApi* | [**getTlsActivation**](docs/Api/TlsActivationsApi.md#gettlsactivation) | **GET** /tls/activations/{tls_activation_id} | Get a TLS activation
*TlsActivationsApi* | [**listTlsActivations**](docs/Api/TlsActivationsApi.md#listtlsactivations) | **GET** /tls/activations | List TLS activations
*TlsActivationsApi* | [**updateTlsActivation**](docs/Api/TlsActivationsApi.md#updatetlsactivation) | **PATCH** /tls/activations/{tls_activation_id} | Update a certificate
*TlsBulkCertificatesApi* | [**deleteBulkTlsCert**](docs/Api/TlsBulkCertificatesApi.md#deletebulktlscert) | **DELETE** /tls/bulk/certificates/{certificate_id} | Delete a certificate
*TlsBulkCertificatesApi* | [**getTlsBulkCert**](docs/Api/TlsBulkCertificatesApi.md#gettlsbulkcert) | **GET** /tls/bulk/certificates/{certificate_id} | Get a certificate
*TlsBulkCertificatesApi* | [**listTlsBulkCerts**](docs/Api/TlsBulkCertificatesApi.md#listtlsbulkcerts) | **GET** /tls/bulk/certificates | List certificates
*TlsBulkCertificatesApi* | [**updateBulkTlsCert**](docs/Api/TlsBulkCertificatesApi.md#updatebulktlscert) | **PATCH** /tls/bulk/certificates/{certificate_id} | Update a certificate
*TlsBulkCertificatesApi* | [**uploadTlsBulkCert**](docs/Api/TlsBulkCertificatesApi.md#uploadtlsbulkcert) | **POST** /tls/bulk/certificates | Upload a certificate
*TlsCertificatesApi* | [**createTlsCert**](docs/Api/TlsCertificatesApi.md#createtlscert) | **POST** /tls/certificates | Create a TLS certificate
*TlsCertificatesApi* | [**deleteTlsCert**](docs/Api/TlsCertificatesApi.md#deletetlscert) | **DELETE** /tls/certificates/{tls_certificate_id} | Delete a TLS certificate
*TlsCertificatesApi* | [**getTlsCert**](docs/Api/TlsCertificatesApi.md#gettlscert) | **GET** /tls/certificates/{tls_certificate_id} | Get a TLS certificate
*TlsCertificatesApi* | [**listTlsCerts**](docs/Api/TlsCertificatesApi.md#listtlscerts) | **GET** /tls/certificates | List TLS certificates
*TlsCertificatesApi* | [**updateTlsCert**](docs/Api/TlsCertificatesApi.md#updatetlscert) | **PATCH** /tls/certificates/{tls_certificate_id} | Update a TLS certificate
*TlsConfigurationsApi* | [**getTlsConfig**](docs/Api/TlsConfigurationsApi.md#gettlsconfig) | **GET** /tls/configurations/{tls_configuration_id} | Get a TLS configuration
*TlsConfigurationsApi* | [**listTlsConfigs**](docs/Api/TlsConfigurationsApi.md#listtlsconfigs) | **GET** /tls/configurations | List TLS configurations
*TlsConfigurationsApi* | [**updateTlsConfig**](docs/Api/TlsConfigurationsApi.md#updatetlsconfig) | **PATCH** /tls/configurations/{tls_configuration_id} | Update a TLS configuration
*TlsDomainsApi* | [**listTlsDomains**](docs/Api/TlsDomainsApi.md#listtlsdomains) | **GET** /tls/domains | List TLS domains
*TlsPrivateKeysApi* | [**createTlsKey**](docs/Api/TlsPrivateKeysApi.md#createtlskey) | **POST** /tls/private_keys | Create a TLS private key
*TlsPrivateKeysApi* | [**deleteTlsKey**](docs/Api/TlsPrivateKeysApi.md#deletetlskey) | **DELETE** /tls/private_keys/{tls_private_key_id} | Delete a TLS private key
*TlsPrivateKeysApi* | [**getTlsKey**](docs/Api/TlsPrivateKeysApi.md#gettlskey) | **GET** /tls/private_keys/{tls_private_key_id} | Get a TLS private key
*TlsPrivateKeysApi* | [**listTlsKeys**](docs/Api/TlsPrivateKeysApi.md#listtlskeys) | **GET** /tls/private_keys | List TLS private keys
*TlsSubscriptionsApi* | [**createTlsSub**](docs/Api/TlsSubscriptionsApi.md#createtlssub) | **POST** /tls/subscriptions | Create a TLS subscription
*TlsSubscriptionsApi* | [**deleteTlsSub**](docs/Api/TlsSubscriptionsApi.md#deletetlssub) | **DELETE** /tls/subscriptions/{tls_subscription_id} | Delete a TLS subscription
*TlsSubscriptionsApi* | [**getTlsSub**](docs/Api/TlsSubscriptionsApi.md#gettlssub) | **GET** /tls/subscriptions/{tls_subscription_id} | Get a TLS subscription
*TlsSubscriptionsApi* | [**listTlsSubs**](docs/Api/TlsSubscriptionsApi.md#listtlssubs) | **GET** /tls/subscriptions | List TLS subscriptions
*TlsSubscriptionsApi* | [**patchTlsSub**](docs/Api/TlsSubscriptionsApi.md#patchtlssub) | **PATCH** /tls/subscriptions/{tls_subscription_id} | Update a TLS subscription
*TokensApi* | [**bulkRevokeTokens**](docs/Api/TokensApi.md#bulkrevoketokens) | **DELETE** /tokens | Revoke multiple tokens
*TokensApi* | [**createToken**](docs/Api/TokensApi.md#createtoken) | **POST** /tokens | Create a token
*TokensApi* | [**getTokenCurrent**](docs/Api/TokensApi.md#gettokencurrent) | **GET** /tokens/self | Get the current token
*TokensApi* | [**listTokensCustomer**](docs/Api/TokensApi.md#listtokenscustomer) | **GET** /customer/{customer_id}/tokens | List tokens for a customer
*TokensApi* | [**listTokensUser**](docs/Api/TokensApi.md#listtokensuser) | **GET** /tokens | List tokens for the authenticated user
*TokensApi* | [**revokeToken**](docs/Api/TokensApi.md#revoketoken) | **DELETE** /tokens/{token_id} | Revoke a token
*TokensApi* | [**revokeTokenCurrent**](docs/Api/TokensApi.md#revoketokencurrent) | **DELETE** /tokens/self | Revoke the current token
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user | Create a user
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/{user_id} | Delete a user
*UserApi* | [**getCurrentUser**](docs/Api/UserApi.md#getcurrentuser) | **GET** /current_user | Get the current user
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user/{user_id} | Get a user
*UserApi* | [**requestPasswordReset**](docs/Api/UserApi.md#requestpasswordreset) | **POST** /user/{user_login}/password/request_reset | Request a password reset
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /user/{user_id} | Update a user
*UserApi* | [**updateUserPassword**](docs/Api/UserApi.md#updateuserpassword) | **POST** /current_user/password | Update the user&#39;s password
*VclApi* | [**createCustomVcl**](docs/Api/VclApi.md#createcustomvcl) | **POST** /service/{service_id}/version/{version_id}/vcl | Create a custom VCL file
*VclApi* | [**deleteCustomVcl**](docs/Api/VclApi.md#deletecustomvcl) | **DELETE** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Delete a custom VCL file
*VclApi* | [**getCustomVcl**](docs/Api/VclApi.md#getcustomvcl) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Get a custom VCL file
*VclApi* | [**getCustomVclBoilerplate**](docs/Api/VclApi.md#getcustomvclboilerplate) | **GET** /service/{service_id}/version/{version_id}/boilerplate | Get boilerplate VCL
*VclApi* | [**getCustomVclGenerated**](docs/Api/VclApi.md#getcustomvclgenerated) | **GET** /service/{service_id}/version/{version_id}/generated_vcl | Get the generated VCL for a service
*VclApi* | [**getCustomVclGeneratedHighlighted**](docs/Api/VclApi.md#getcustomvclgeneratedhighlighted) | **GET** /service/{service_id}/version/{version_id}/generated_vcl/content | Get the generated VCL with syntax highlighting
*VclApi* | [**getCustomVclHighlighted**](docs/Api/VclApi.md#getcustomvclhighlighted) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/content | Get a custom VCL file with syntax highlighting
*VclApi* | [**getCustomVclRaw**](docs/Api/VclApi.md#getcustomvclraw) | **GET** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/download | Download a custom VCL file
*VclApi* | [**listCustomVcl**](docs/Api/VclApi.md#listcustomvcl) | **GET** /service/{service_id}/version/{version_id}/vcl | List custom VCL files
*VclApi* | [**setCustomVclMain**](docs/Api/VclApi.md#setcustomvclmain) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name}/main | Set a custom VCL file as main
*VclApi* | [**updateCustomVcl**](docs/Api/VclApi.md#updatecustomvcl) | **PUT** /service/{service_id}/version/{version_id}/vcl/{vcl_name} | Update a custom VCL file
*VclDiffApi* | [**vclDiffServiceVersions**](docs/Api/VclDiffApi.md#vcldiffserviceversions) | **GET** /service/{service_id}/vcl/diff/from/{from_version_id}/to/{to_version_id} | Get a comparison of the VCL changes between two service versions
*VersionApi* | [**activateServiceVersion**](docs/Api/VersionApi.md#activateserviceversion) | **PUT** /service/{service_id}/version/{version_id}/activate | Activate a service version
*VersionApi* | [**cloneServiceVersion**](docs/Api/VersionApi.md#cloneserviceversion) | **PUT** /service/{service_id}/version/{version_id}/clone | Clone a service version
*VersionApi* | [**createServiceVersion**](docs/Api/VersionApi.md#createserviceversion) | **POST** /service/{service_id}/version | Create a service version
*VersionApi* | [**deactivateServiceVersion**](docs/Api/VersionApi.md#deactivateserviceversion) | **PUT** /service/{service_id}/version/{version_id}/deactivate | Deactivate a service version
*VersionApi* | [**getServiceVersion**](docs/Api/VersionApi.md#getserviceversion) | **GET** /service/{service_id}/version/{version_id} | Get a version of a service
*VersionApi* | [**listServiceVersions**](docs/Api/VersionApi.md#listserviceversions) | **GET** /service/{service_id}/version | List versions of a service
*VersionApi* | [**lockServiceVersion**](docs/Api/VersionApi.md#lockserviceversion) | **PUT** /service/{service_id}/version/{version_id}/lock | Lock a service version
*VersionApi* | [**updateServiceVersion**](docs/Api/VersionApi.md#updateserviceversion) | **PUT** /service/{service_id}/version/{version_id} | Update a service version
*VersionApi* | [**validateServiceVersion**](docs/Api/VersionApi.md#validateserviceversion) | **GET** /service/{service_id}/version/{version_id}/validate | Validate a service version
*WafActiveRulesApi* | [**bulkDeleteWafActiveRules**](docs/Api/WafActiveRulesApi.md#bulkdeletewafactiverules) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Delete multiple active rules from a WAF
*WafActiveRulesApi* | [**bulkUpdateWafActiveRules**](docs/Api/WafActiveRulesApi.md#bulkupdatewafactiverules) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/bulk | Update multiple active rules
*WafActiveRulesApi* | [**createWafActiveRule**](docs/Api/WafActiveRulesApi.md#createwafactiverule) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | Add a rule to a WAF as an active rule
*WafActiveRulesApi* | [**createWafActiveRulesTag**](docs/Api/WafActiveRulesApi.md#createwafactiverulestag) | **POST** /waf/firewalls/{firewall_id}/versions/{version_id}/tags/{waf_tag_name}/active-rules | Create active rules by tag
*WafActiveRulesApi* | [**deleteWafActiveRule**](docs/Api/WafActiveRulesApi.md#deletewafactiverule) | **DELETE** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Delete an active rule
*WafActiveRulesApi* | [**getWafActiveRule**](docs/Api/WafActiveRulesApi.md#getwafactiverule) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Get an active WAF rule object
*WafActiveRulesApi* | [**listWafActiveRules**](docs/Api/WafActiveRulesApi.md#listwafactiverules) | **GET** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules | List active rules on a WAF
*WafActiveRulesApi* | [**updateWafActiveRule**](docs/Api/WafActiveRulesApi.md#updatewafactiverule) | **PATCH** /waf/firewalls/{firewall_id}/versions/{version_id}/active-rules/{waf_rule_id} | Update an active rule
*WafExclusionsApi* | [**createWafRuleExclusion**](docs/Api/WafExclusionsApi.md#createwafruleexclusion) | **POST** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | Create a WAF rule exclusion
*WafExclusionsApi* | [**deleteWafRuleExclusion**](docs/Api/WafExclusionsApi.md#deletewafruleexclusion) | **DELETE** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Delete a WAF rule exclusion
*WafExclusionsApi* | [**getWafRuleExclusion**](docs/Api/WafExclusionsApi.md#getwafruleexclusion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Get a WAF rule exclusion
*WafExclusionsApi* | [**listWafRuleExclusions**](docs/Api/WafExclusionsApi.md#listwafruleexclusions) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions | List WAF rule exclusions
*WafExclusionsApi* | [**updateWafRuleExclusion**](docs/Api/WafExclusionsApi.md#updatewafruleexclusion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/exclusions/{exclusion_number} | Update a WAF rule exclusion
*WafFirewallVersionsApi* | [**cloneWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#clonewaffirewallversion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/clone | Clone a firewall version
*WafFirewallVersionsApi* | [**createWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#createwaffirewallversion) | **POST** /waf/firewalls/{firewall_id}/versions | Create a firewall version
*WafFirewallVersionsApi* | [**deployActivateWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#deployactivatewaffirewallversion) | **PUT** /waf/firewalls/{firewall_id}/versions/{firewall_version_number}/activate | Deploy or activate a firewall version
*WafFirewallVersionsApi* | [**getWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#getwaffirewallversion) | **GET** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Get a firewall version
*WafFirewallVersionsApi* | [**listWafFirewallVersions**](docs/Api/WafFirewallVersionsApi.md#listwaffirewallversions) | **GET** /waf/firewalls/{firewall_id}/versions | List firewall versions
*WafFirewallVersionsApi* | [**updateWafFirewallVersion**](docs/Api/WafFirewallVersionsApi.md#updatewaffirewallversion) | **PATCH** /waf/firewalls/{firewall_id}/versions/{firewall_version_number} | Update a firewall version
*WafFirewallsApi* | [**createWafFirewall**](docs/Api/WafFirewallsApi.md#createwaffirewall) | **POST** /waf/firewalls | Create a firewall
*WafFirewallsApi* | [**deleteWafFirewall**](docs/Api/WafFirewallsApi.md#deletewaffirewall) | **DELETE** /waf/firewalls/{firewall_id} | Delete a firewall
*WafFirewallsApi* | [**getWafFirewall**](docs/Api/WafFirewallsApi.md#getwaffirewall) | **GET** /waf/firewalls/{firewall_id} | Get a firewall
*WafFirewallsApi* | [**listWafFirewalls**](docs/Api/WafFirewallsApi.md#listwaffirewalls) | **GET** /waf/firewalls | List firewalls
*WafFirewallsApi* | [**updateWafFirewall**](docs/Api/WafFirewallsApi.md#updatewaffirewall) | **PATCH** /waf/firewalls/{firewall_id} | Update a firewall
*WafRuleRevisionsApi* | [**getWafRuleRevision**](docs/Api/WafRuleRevisionsApi.md#getwafrulerevision) | **GET** /waf/rules/{waf_rule_id}/revisions/{waf_rule_revision_number} | Get a revision of a rule
*WafRuleRevisionsApi* | [**listWafRuleRevisions**](docs/Api/WafRuleRevisionsApi.md#listwafrulerevisions) | **GET** /waf/rules/{waf_rule_id}/revisions | List revisions for a rule
*WafRulesApi* | [**getWafRule**](docs/Api/WafRulesApi.md#getwafrule) | **GET** /waf/rules/{waf_rule_id} | Get a rule
*WafRulesApi* | [**listWafRules**](docs/Api/WafRulesApi.md#listwafrules) | **GET** /waf/rules | List available WAF rules
*WafTagsApi* | [**listWafTags**](docs/Api/WafTagsApi.md#listwaftags) | **GET** /waf/tags | List tags

## Models

- [CustomerCustomerIdBillingAddressData](docs/Model/CustomerCustomerIdBillingAddressData.md)
- [CustomerCustomerIdBillingAddressData1](docs/Model/CustomerCustomerIdBillingAddressData1.md)
- [Direction](docs/Model/Direction.md)
- [GenericTokenError](docs/Model/GenericTokenError.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse204](docs/Model/InlineResponse204.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InvitationsData](docs/Model/InvitationsData.md)
- [LoggingAddressAndPort](docs/Model/LoggingAddressAndPort.md)
- [LoggingCommon](docs/Model/LoggingCommon.md)
- [LoggingCompressionCodec](docs/Model/LoggingCompressionCodec.md)
- [LoggingFormatVersion](docs/Model/LoggingFormatVersion.md)
- [LoggingGcsCommon](docs/Model/LoggingGcsCommon.md)
- [LoggingGenericCommon](docs/Model/LoggingGenericCommon.md)
- [LoggingMessageType](docs/Model/LoggingMessageType.md)
- [LoggingPlacement](docs/Model/LoggingPlacement.md)
- [LoggingRequestCapsCommon](docs/Model/LoggingRequestCapsCommon.md)
- [LoggingTlsCommon](docs/Model/LoggingTlsCommon.md)
- [LoggingUseTls](docs/Model/LoggingUseTls.md)
- [ModelAcl](docs/Model/ModelAcl.md)
- [ModelAclAllOf](docs/Model/ModelAclAllOf.md)
- [ModelAclEntry](docs/Model/ModelAclEntry.md)
- [ModelAclEntryAllOf](docs/Model/ModelAclEntryAllOf.md)
- [ModelBackend](docs/Model/ModelBackend.md)
- [ModelBackendAllOf](docs/Model/ModelBackendAllOf.md)
- [ModelBilling](docs/Model/ModelBilling.md)
- [ModelBillingAddress](docs/Model/ModelBillingAddress.md)
- [ModelBillingStatus](docs/Model/ModelBillingStatus.md)
- [ModelBillingTotal](docs/Model/ModelBillingTotal.md)
- [ModelBillingTotalExtras](docs/Model/ModelBillingTotalExtras.md)
- [ModelCacheSettings](docs/Model/ModelCacheSettings.md)
- [ModelCacheSettingsAllOf](docs/Model/ModelCacheSettingsAllOf.md)
- [ModelCompatInvitation](docs/Model/ModelCompatInvitation.md)
- [ModelCompatService](docs/Model/ModelCompatService.md)
- [ModelCompatServiceAllOf](docs/Model/ModelCompatServiceAllOf.md)
- [ModelCompatServiceAuthorization](docs/Model/ModelCompatServiceAuthorization.md)
- [ModelCompatStar](docs/Model/ModelCompatStar.md)
- [ModelCompatTlsConfiguration](docs/Model/ModelCompatTlsConfiguration.md)
- [ModelCompatTlsSubscriptions](docs/Model/ModelCompatTlsSubscriptions.md)
- [ModelCompatWafExclusions](docs/Model/ModelCompatWafExclusions.md)
- [ModelCompatWafExclusionsData](docs/Model/ModelCompatWafExclusionsData.md)
- [ModelCompatWafExclusionsDataRelationships](docs/Model/ModelCompatWafExclusionsDataRelationships.md)
- [ModelCompatWafExclusionsDataRelationshipsWafRules](docs/Model/ModelCompatWafExclusionsDataRelationshipsWafRules.md)
- [ModelCompatWafExclusionsDataRelationshipsWafRulesData](docs/Model/ModelCompatWafExclusionsDataRelationshipsWafRulesData.md)
- [ModelCondition](docs/Model/ModelCondition.md)
- [ModelConditionAllOf](docs/Model/ModelConditionAllOf.md)
- [ModelCustomer](docs/Model/ModelCustomer.md)
- [ModelCustomerAllOf](docs/Model/ModelCustomerAllOf.md)
- [ModelDictionary](docs/Model/ModelDictionary.md)
- [ModelDictionaryAllOf](docs/Model/ModelDictionaryAllOf.md)
- [ModelDictionaryInfo](docs/Model/ModelDictionaryInfo.md)
- [ModelDictionaryItem](docs/Model/ModelDictionaryItem.md)
- [ModelDictionaryItemAllOf](docs/Model/ModelDictionaryItemAllOf.md)
- [ModelDiff](docs/Model/ModelDiff.md)
- [ModelDirector](docs/Model/ModelDirector.md)
- [ModelDirectorAllOf](docs/Model/ModelDirectorAllOf.md)
- [ModelDirectorBackend](docs/Model/ModelDirectorBackend.md)
- [ModelDirectorBackendAllOf](docs/Model/ModelDirectorBackendAllOf.md)
- [ModelDomain](docs/Model/ModelDomain.md)
- [ModelDomainAllOf](docs/Model/ModelDomainAllOf.md)
- [ModelEvent](docs/Model/ModelEvent.md)
- [ModelGzip](docs/Model/ModelGzip.md)
- [ModelGzipAllOf](docs/Model/ModelGzipAllOf.md)
- [ModelHeader](docs/Model/ModelHeader.md)
- [ModelHeaderAllOf](docs/Model/ModelHeaderAllOf.md)
- [ModelHealthcheck](docs/Model/ModelHealthcheck.md)
- [ModelHealthcheckAllOf](docs/Model/ModelHealthcheckAllOf.md)
- [ModelHistorical](docs/Model/ModelHistorical.md)
- [ModelInvitation](docs/Model/ModelInvitation.md)
- [ModelInvitationAllOf](docs/Model/ModelInvitationAllOf.md)
- [ModelLoggingAzureblob](docs/Model/ModelLoggingAzureblob.md)
- [ModelLoggingAzureblobAllOf](docs/Model/ModelLoggingAzureblobAllOf.md)
- [ModelLoggingBigquery](docs/Model/ModelLoggingBigquery.md)
- [ModelLoggingBigqueryAllOf](docs/Model/ModelLoggingBigqueryAllOf.md)
- [ModelLoggingCloudfiles](docs/Model/ModelLoggingCloudfiles.md)
- [ModelLoggingCloudfilesAllOf](docs/Model/ModelLoggingCloudfilesAllOf.md)
- [ModelLoggingDatadog](docs/Model/ModelLoggingDatadog.md)
- [ModelLoggingDatadogAllOf](docs/Model/ModelLoggingDatadogAllOf.md)
- [ModelLoggingDigitalocean](docs/Model/ModelLoggingDigitalocean.md)
- [ModelLoggingDigitaloceanAllOf](docs/Model/ModelLoggingDigitaloceanAllOf.md)
- [ModelLoggingElasticsearch](docs/Model/ModelLoggingElasticsearch.md)
- [ModelLoggingElasticsearchAllOf](docs/Model/ModelLoggingElasticsearchAllOf.md)
- [ModelLoggingFtp](docs/Model/ModelLoggingFtp.md)
- [ModelLoggingFtpAllOf](docs/Model/ModelLoggingFtpAllOf.md)
- [ModelLoggingGcs](docs/Model/ModelLoggingGcs.md)
- [ModelLoggingGcsAllOf](docs/Model/ModelLoggingGcsAllOf.md)
- [ModelLoggingGooglePubsub](docs/Model/ModelLoggingGooglePubsub.md)
- [ModelLoggingGooglePubsubAllOf](docs/Model/ModelLoggingGooglePubsubAllOf.md)
- [ModelLoggingHeroku](docs/Model/ModelLoggingHeroku.md)
- [ModelLoggingHerokuAllOf](docs/Model/ModelLoggingHerokuAllOf.md)
- [ModelLoggingHoneycomb](docs/Model/ModelLoggingHoneycomb.md)
- [ModelLoggingHoneycombAllOf](docs/Model/ModelLoggingHoneycombAllOf.md)
- [ModelLoggingHttps](docs/Model/ModelLoggingHttps.md)
- [ModelLoggingHttpsAllOf](docs/Model/ModelLoggingHttpsAllOf.md)
- [ModelLoggingKafka](docs/Model/ModelLoggingKafka.md)
- [ModelLoggingKafkaAllOf](docs/Model/ModelLoggingKafkaAllOf.md)
- [ModelLoggingKinesis](docs/Model/ModelLoggingKinesis.md)
- [ModelLoggingKinesisAllOf](docs/Model/ModelLoggingKinesisAllOf.md)
- [ModelLoggingLogentries](docs/Model/ModelLoggingLogentries.md)
- [ModelLoggingLogentriesAllOf](docs/Model/ModelLoggingLogentriesAllOf.md)
- [ModelLoggingLoggly](docs/Model/ModelLoggingLoggly.md)
- [ModelLoggingLogglyAllOf](docs/Model/ModelLoggingLogglyAllOf.md)
- [ModelLoggingLogshuttle](docs/Model/ModelLoggingLogshuttle.md)
- [ModelLoggingLogshuttleAllOf](docs/Model/ModelLoggingLogshuttleAllOf.md)
- [ModelLoggingNewrelic](docs/Model/ModelLoggingNewrelic.md)
- [ModelLoggingNewrelicAllOf](docs/Model/ModelLoggingNewrelicAllOf.md)
- [ModelLoggingOpenstack](docs/Model/ModelLoggingOpenstack.md)
- [ModelLoggingOpenstackAllOf](docs/Model/ModelLoggingOpenstackAllOf.md)
- [ModelLoggingPapertrail](docs/Model/ModelLoggingPapertrail.md)
- [ModelLoggingS3](docs/Model/ModelLoggingS3.md)
- [ModelLoggingS3AllOf](docs/Model/ModelLoggingS3AllOf.md)
- [ModelLoggingScalyr](docs/Model/ModelLoggingScalyr.md)
- [ModelLoggingScalyrAllOf](docs/Model/ModelLoggingScalyrAllOf.md)
- [ModelLoggingSftp](docs/Model/ModelLoggingSftp.md)
- [ModelLoggingSftpAllOf](docs/Model/ModelLoggingSftpAllOf.md)
- [ModelLoggingSplunk](docs/Model/ModelLoggingSplunk.md)
- [ModelLoggingSplunkAllOf](docs/Model/ModelLoggingSplunkAllOf.md)
- [ModelLoggingSumologic](docs/Model/ModelLoggingSumologic.md)
- [ModelLoggingSumologicAllOf](docs/Model/ModelLoggingSumologicAllOf.md)
- [ModelLoggingSyslog](docs/Model/ModelLoggingSyslog.md)
- [ModelLoggingSyslogAllOf](docs/Model/ModelLoggingSyslogAllOf.md)
- [ModelOriginInsights](docs/Model/ModelOriginInsights.md)
- [ModelOriginInsightsEntry](docs/Model/ModelOriginInsightsEntry.md)
- [ModelOriginInsightsMeasurements](docs/Model/ModelOriginInsightsMeasurements.md)
- [ModelPackage](docs/Model/ModelPackage.md)
- [ModelPackageAllOf](docs/Model/ModelPackageAllOf.md)
- [ModelPackageMetadata](docs/Model/ModelPackageMetadata.md)
- [ModelPool](docs/Model/ModelPool.md)
- [ModelPoolAllOf](docs/Model/ModelPoolAllOf.md)
- [ModelRateLimiter](docs/Model/ModelRateLimiter.md)
- [ModelRateLimiterAllOf](docs/Model/ModelRateLimiterAllOf.md)
- [ModelRateLimiterAllOfResponse](docs/Model/ModelRateLimiterAllOfResponse.md)
- [ModelRealtime](docs/Model/ModelRealtime.md)
- [ModelRealtimeEntry](docs/Model/ModelRealtimeEntry.md)
- [ModelRealtimeMeasurements](docs/Model/ModelRealtimeMeasurements.md)
- [ModelRequestSettings](docs/Model/ModelRequestSettings.md)
- [ModelRequestSettingsAllOf](docs/Model/ModelRequestSettingsAllOf.md)
- [ModelResponseObject](docs/Model/ModelResponseObject.md)
- [ModelResponseObjectAllOf](docs/Model/ModelResponseObjectAllOf.md)
- [ModelServer](docs/Model/ModelServer.md)
- [ModelServerAllOf](docs/Model/ModelServerAllOf.md)
- [ModelService](docs/Model/ModelService.md)
- [ModelServiceAllOf](docs/Model/ModelServiceAllOf.md)
- [ModelServiceAuthorization](docs/Model/ModelServiceAuthorization.md)
- [ModelServiceAuthorizationAllOf](docs/Model/ModelServiceAuthorizationAllOf.md)
- [ModelServiceDetail](docs/Model/ModelServiceDetail.md)
- [ModelServiceDetailAllOf](docs/Model/ModelServiceDetailAllOf.md)
- [ModelSettings](docs/Model/ModelSettings.md)
- [ModelSettingsAllOf](docs/Model/ModelSettingsAllOf.md)
- [ModelSnippet](docs/Model/ModelSnippet.md)
- [ModelSnippetAllOf](docs/Model/ModelSnippetAllOf.md)
- [ModelStar](docs/Model/ModelStar.md)
- [ModelStarAllOf](docs/Model/ModelStarAllOf.md)
- [ModelTlsActivation](docs/Model/ModelTlsActivation.md)
- [ModelTlsBulkCertificate](docs/Model/ModelTlsBulkCertificate.md)
- [ModelTlsCertificate](docs/Model/ModelTlsCertificate.md)
- [ModelTlsConfiguration](docs/Model/ModelTlsConfiguration.md)
- [ModelTlsConfigurationRelationships](docs/Model/ModelTlsConfigurationRelationships.md)
- [ModelTlsDnsRecord](docs/Model/ModelTlsDnsRecord.md)
- [ModelTlsDomain](docs/Model/ModelTlsDomain.md)
- [ModelTlsPrivateKey](docs/Model/ModelTlsPrivateKey.md)
- [ModelTlsSubscription](docs/Model/ModelTlsSubscription.md)
- [ModelToken](docs/Model/ModelToken.md)
- [ModelTokenCreated](docs/Model/ModelTokenCreated.md)
- [ModelTokenCreatedAllOf](docs/Model/ModelTokenCreatedAllOf.md)
- [ModelUser](docs/Model/ModelUser.md)
- [ModelUserAllOf](docs/Model/ModelUserAllOf.md)
- [ModelVcl](docs/Model/ModelVcl.md)
- [ModelVclAllOf](docs/Model/ModelVclAllOf.md)
- [ModelVclDiff](docs/Model/ModelVclDiff.md)
- [ModelVersion](docs/Model/ModelVersion.md)
- [ModelVersionAllOf](docs/Model/ModelVersionAllOf.md)
- [ModelVersionDetail](docs/Model/ModelVersionDetail.md)
- [ModelWafActiveRule](docs/Model/ModelWafActiveRule.md)
- [ModelWafActiveRuleAllOf](docs/Model/ModelWafActiveRuleAllOf.md)
- [ModelWafExclusions](docs/Model/ModelWafExclusions.md)
- [ModelWafExclusionsAllOf](docs/Model/ModelWafExclusionsAllOf.md)
- [ModelWafFirewall](docs/Model/ModelWafFirewall.md)
- [ModelWafFirewallVersions](docs/Model/ModelWafFirewallVersions.md)
- [ModelWafRule](docs/Model/ModelWafRule.md)
- [ModelWafRuleRevision](docs/Model/ModelWafRuleRevision.md)
- [ModelWafTag](docs/Model/ModelWafTag.md)
- [NestedModelVersion](docs/Model/NestedModelVersion.md)
- [Pagination](docs/Model/Pagination.md)
- [PaginationLinks](docs/Model/PaginationLinks.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [Permission](docs/Model/Permission.md)
- [RelationshipCustomer](docs/Model/RelationshipCustomer.md)
- [RelationshipCustomerCustomer](docs/Model/RelationshipCustomerCustomer.md)
- [RelationshipCustomerCustomerData](docs/Model/RelationshipCustomerCustomerData.md)
- [RelationshipService](docs/Model/RelationshipService.md)
- [RelationshipServiceInvitation](docs/Model/RelationshipServiceInvitation.md)
- [RelationshipServiceInvitationServiceInvitation](docs/Model/RelationshipServiceInvitationServiceInvitation.md)
- [RelationshipServiceInvitationServiceInvitationData](docs/Model/RelationshipServiceInvitationServiceInvitationData.md)
- [RelationshipServiceService](docs/Model/RelationshipServiceService.md)
- [RelationshipServiceServiceData](docs/Model/RelationshipServiceServiceData.md)
- [RelationshipUser](docs/Model/RelationshipUser.md)
- [RelationshipUserUser](docs/Model/RelationshipUserUser.md)
- [RelationshipUserUserData](docs/Model/RelationshipUserUserData.md)
- [ResourceBillingAddress](docs/Model/ResourceBillingAddress.md)
- [ResourceBillingAddressData](docs/Model/ResourceBillingAddressData.md)
- [ResourceEvent](docs/Model/ResourceEvent.md)
- [ResourceEventData](docs/Model/ResourceEventData.md)
- [ResourceInvitation](docs/Model/ResourceInvitation.md)
- [ResourceInvitationData](docs/Model/ResourceInvitationData.md)
- [ResourceServiceAuthorization](docs/Model/ResourceServiceAuthorization.md)
- [ResourceServiceAuthorizationData](docs/Model/ResourceServiceAuthorizationData.md)
- [ResourceServiceInvitation](docs/Model/ResourceServiceInvitation.md)
- [ResourceServiceInvitationData](docs/Model/ResourceServiceInvitationData.md)
- [ResourceStar](docs/Model/ResourceStar.md)
- [ResourceStarData](docs/Model/ResourceStarData.md)
- [ResourceWafTag](docs/Model/ResourceWafTag.md)
- [ResourceWafTagAllOf](docs/Model/ResourceWafTagAllOf.md)
- [RoleUser](docs/Model/RoleUser.md)
- [SchemasModelBackend](docs/Model/SchemasModelBackend.md)
- [SchemasModelHeader](docs/Model/SchemasModelHeader.md)
- [SchemasModelSettings](docs/Model/SchemasModelSettings.md)
- [SchemasModelSnippet](docs/Model/SchemasModelSnippet.md)
- [SchemasModelUser](docs/Model/SchemasModelUser.md)
- [SchemasModelVcl](docs/Model/SchemasModelVcl.md)
- [SchemasModelVersion](docs/Model/SchemasModelVersion.md)
- [Service](docs/Model/Service.md)
- [ServiceAuthorizationsData](docs/Model/ServiceAuthorizationsData.md)
- [ServiceIdAndVersion](docs/Model/ServiceIdAndVersion.md)
- [Timestamps](docs/Model/Timestamps.md)
- [TimestampsNoDelete](docs/Model/TimestampsNoDelete.md)
- [TlsCommon](docs/Model/TlsCommon.md)
- [WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsData](docs/Model/WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsData.md)
- [WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationships](docs/Model/WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationships.md)
- [WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationshipsWafRules](docs/Model/WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationshipsWafRules.md)
- [WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationshipsWafRulesData](docs/Model/WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsDataRelationshipsWafRulesData.md)
- [WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsExclusionNumberData](docs/Model/WafFirewallsFirewallIdVersionsFirewallVersionNumberExclusionsExclusionNumberData.md)

## Authorization

### token

- **Type**: API key
- **API key parameter name**: Fastly-Key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0-alpha1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
