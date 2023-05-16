# Changelog

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
