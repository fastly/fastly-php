# # EventAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin** | **bool** | Indicates if event was performed by Fastly. | [optional] 
**created_at** | **\DateTime** | Date and time in ISO 8601 format. | [optional] [readonly] 
**customer_id** | **string** |  | [optional] [readonly] 
**description** | **string** | Description of the event. | [optional] 
**event_type** | **string** | Type of event. Can be used with `filter[event_type]` | [optional]  [one of: 'api_key.create', 'acl.create', 'acl.delete', 'acl.update', 'address.create', 'address.delete', 'address.update', 'backend.create', 'backend.delete', 'backend.update', 'billing.contact_update', 'cache_settings.create', 'cache_settings.delete', 'cache_settings.update', 'customer.create', 'customer.pricing', 'customer.update', 'customer_feature.create', 'customer_feature.delete', 'director.create', 'director.delete', 'director.update', 'director_backend.create', 'director_backend.delete', 'domain.create', 'domain.delete', 'domain.update', 'gzip.create', 'gzip.delete', 'gzip.update', 'header.create', 'header.delete', 'header.update', 'healthcheck.create', 'healthcheck.delete', 'healthcheck.update', 'invitation.accept', 'invitation.sent', 'invoice.failed_payment', 'invoice.payment', 'io_settings.create', 'io_settings.delete', 'io_settings.update', 'logging.create', 'logging.delete', 'logging.update', 'pool.create', 'pool.delete', 'pool.update', 'request_settings.create', 'request_settings.delete', 'request_settings.update', 'response_object.create', 'response_object.delete', 'response_object.update', 'rule_status.update', 'rule_status.upsert', 'server.create', 'server.delete', 'server.update', 'service.create', 'service.delete', 'service.move', 'service.move_destination', 'service.move_source', 'service.purge_all', 'service.update', 'service_authorization.create', 'service_authorization.delete', 'service_authorization.update', 'tls.bulk_certificate.create', 'tls.bulk_certificate.delete', 'tls.bulk_certificate.update', 'tls.certificate.create', 'tls.certificate.expiration_email', 'tls.certificate.update', 'tls.certificate.delete', 'tls.configuration.update', 'tls.private_key.create', 'tls.private_key.delete', 'tls.activation.enable', 'tls.activation.update', 'tls.activation.disable', 'tls.globalsign.domain.create', 'tls.globalsign.domain.verify', 'tls.globalsign.domain.delete', 'tls.subscription.create', 'tls.subscription.delete', 'tls.subscription.dns_check_email', 'token.create', 'token.destroy', 'two_factor_auth.disable', 'two_factor_auth.enable', 'user.create', 'user.destroy', 'user.lock', 'user.login', 'user.login_failure', 'user.logout', 'user.password_update', 'user.unlock', 'user.update', 'vcl.create', 'vcl.delete', 'vcl.update', 'version.activate', 'version.clone', 'version.copy', 'version.copy_destination', 'version.copy_source', 'version.create', 'version.deactivate', 'version.lock', 'version.update', 'waf.configuration_set_update', 'waf.create', 'waf.delete', 'waf.update', 'waf.enable', 'waf.disable', 'waf.owasp.create', 'waf.owasp.update', 'waf.ruleset.deploy', 'waf.ruleset.deploy_failure', 'wordpress.create', 'wordpress.delete', 'wordpress.update']
**ip** | **string** | IP addresses that the event was requested from. | [optional] 
**metadata** | **object** | Hash of key value pairs of additional information. | [optional] 
**service_id** | **string** |  | [optional] [readonly] 
**user_id** | **string** |  | [optional] [readonly] 
**token_id** | **string** |  | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
