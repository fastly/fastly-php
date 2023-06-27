# Changelog

## [v2.3.0](https://github.com/fastly/fastly-php/releases/tag/release/v2.3.0) (2023-06-27)

**Enhancements:**

- feat(rate_limiter): implement POST/PUT endpoints.

**Bug fixes:**

- fix(automation_tokens): generate explicit error response type.
- fix(historical_stats): extract primitive into custom type.

## [v2.2.2](https://github.com/fastly/fastly-php/releases/tag/release/v2.2.2) (2023-06-23)

**Bug fixes:**

- fix(historical_stats): generate missing models.

## [v2.2.1](https://github.com/fastly/fastly-php/releases/tag/release/v2.2.1) (2023-06-21)

**Bug fixes:**

- fix(tls_activation): add tls_configuration and tls_domains.
- fix(tls_subscription): add tls_configuration and common name.

## [v2.2.0](https://github.com/fastly/fastly-php/releases/tag/release/v2.2.0) (2023-06-20)

**Enhancements:**

- feat(realtime_measurements): add billable request processing time.
- feat(tokens): add support for the 'get token' endpoint.

**Bug fixes:**

- fix(config): add realtime hostname.
- fix(historical_stats): generate field results model.
- fix(kv_store): remove the 'force' property from the 'delete store' endpoint.
- feat(realtime_measurements): rename object store to kv store.

## [v2.1.1](https://github.com/fastly/fastly-php/releases/tag/release/v2.1.1) (2023-05-22)

**Bug fixes:**

- fix(acl): change `version` from int to string.
- fix(acl): add missing methods for `service_id` and `service_version` properties.
- fix(backend): make `ssl_check_cert` nullable.
- fix(purge): skip URL escape for `surrogate_key` param.
- fix(snippets): change `priority` and `version` from int to string.
- fix(snippets): add missing methods for `service_id` and `service_version` properties.

## [v2.1.0](https://github.com/fastly/fastly-php/releases/tag/release/v2.1.0) (2023-05-17)

**Enhancements:**

- feat(config_store): add Config Store endpoints.

## [v2.0.0](https://github.com/fastly/fastly-php/releases/tag/release/v2.0.0) (2023-05-16)

**Breaking changes:**

- breaking(object_store): rename to kv_store

**Enhancements:**

- feat(dictionary_item): add 'bulk' PATCH endpoint.
- feat(package): add `files_hash` metadata property.
- feat(tls_certificates): add `filter[in_use]` parameter.

## [v1.3.1](https://github.com/fastly/fastly-php/releases/tag/release/v1.3.1) (2023-04-26)

**Bug fixes:**

- fix(object-store-item): use correct type for key value
- fix(tls-csrs): remove internal endpoint

## [v1.3.0](https://github.com/fastly/fastly-php/releases/tag/release/v1.3.0) (2023-04-03)

**Bug fixes:**

- fix(purge): avoid escaping URL parameter

**Enhancements:**

- feat(domain-ownership): list API endpoint
- feat(object-store): items API endpoints
- feat(object-store): add 'location' property to 'create_store'
- feat(object-store): add 'force' property to 'delete_store'
- feat(realtime): additional DDoS properties

**Documentation:**

- docs(acl-entries): document batch updating
- docs(resource): terminology + 'config_store' support.

## [v1.2.0](https://github.com/fastly/fastly-php/releases/tag/v1.0.0) (2023-03-21)

**Bug fixes:**

- fix(purge): switch authentication type to 'token'

**Enhancements:**

- feat(events): implement 'filter_created_at' property
- feat(mutual-authentication): implement 'include' property
- feat(object-store): implement new Object Store API endpoints
- feat(settings): implement Service Settings 'update' endpoint

**Documentation:**

- docs(backend): keepalive_time
- docs(pop): region, shield, latitude, longitude
- docs(product-enablement): brotli_compression
- docs(resource): terminology
- docs(results): fanout properties
- docs(tls/subscriptions): new 'failed' state
- docs(user): 'login' modification note removed

[Full Changelog](https://github.com/fastly/fastly-php/compare/v0.4.1...v1.0.0)

## [v1.0.0](https://github.com/fastly/fastly-php/releases/tag/v1.0.0) (2022-12-15)

[Full Changelog](https://github.com/fastly/fastly-php/compare/v0.4.1...v1.0.0)

**Enhancements:**

* New interface from code-generated API client [#43](https://github.com/fastly/fastly-php/pull/43) 
  * [Blog post: Better Fastly API clients with OpenAPI Generator](https://dev.to/fastly/better-fastly-api-clients-with-openapi-generator-3lno)
  * [Documentation](https://github.com/fastly/fastly-php#documentation-for-api-endpoints)
  * [Unsupported API endpoints](https://github.com/fastly/fastly-php#issues)
