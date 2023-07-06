# # LegacyWafOwasp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_http_versions** | **string** | Allowed HTTP versions. | [optional]  [defaults to 'HTTP/1.0 HTTP/1.1 HTTP/2']
**allowed_methods** | **string** | A space-separated list of HTTP method names. | [optional]  [defaults to 'GET HEAD POST OPTIONS PUT PATCH DELETE']
**allowed_request_content_type** | **string** | Allowed request content types. | [optional]  [defaults to 'application/x-www-form-urlencoded|multipart/form-data|text/xml|application/xml|application/x-amf|application/json|text/plain']
**arg_length** | **int** | The maximum allowed length of an argument. | [optional]  [defaults to 400]
**arg_name_length** | **int** | The maximum allowed argument name length. | [optional]  [defaults to 100]
**combined_file_sizes** | **int** | The maximum allowed size of all files (in bytes). | [optional]  [defaults to 10000000]
**created_at** | **string** | Date and time that the settings object was created. | [optional] 
**critical_anomaly_score** | **int** | Score value to add for critical anomalies. | [optional]  [defaults to 6]
**crs_validate_utf8_encoding** | **bool** | CRS validate UTF8 encoding. | [optional] 
**error_anomaly_score** | **int** | Score value to add for error anomalies. | [optional]  [defaults to 5]
**high_risk_country_codes** | **string** | A space-separated list of country codes in ISO 3166-1 (two-letter) format. | [optional] 
**http_violation_score_threshold** | **int** | HTTP violation threshold. | [optional] 
**inbound_anomaly_score_threshold** | **int** | Inbound anomaly threshold. | [optional] 
**lfi_score_threshold** | **int** | Local file inclusion attack threshold. | [optional] 
**max_file_size** | **int** | The maximum allowed file size (in bytes). | [optional]  [defaults to 10000000]
**max_num_args** | **int** | The maximum number of arguments allowed. | [optional]  [defaults to 255]
**notice_anomaly_score** | **int** | Score value to add for notice anomalies. | [optional]  [defaults to 4]
**paranoia_level** | **int** | The configured paranoia level. | [optional]  [defaults to 1]
**php_injection_score_threshold** | **int** | PHP injection threshold. | [optional] 
**rce_score_threshold** | **int** | Remote code execution threshold. | [optional] 
**restricted_extensions** | **string** | A space-separated list of disallowed file extensions. | [optional]  [defaults to '.asa/ .asax/ .ascx/ .axd/ .backup/ .bak/ .bat/ .cdx/ .cer/ .cfg/ .cmd/ .com/ .config/ .conf/ .cs/ .csproj/ .csr/ .dat/ .db/ .dbf/ .dll/ .dos/ .htr/ .htw/ .ida/ .idc/ .idq/ .inc/ .ini/ .key/ .licx/ .lnk/ .log/ .mdb/ .old/ .pass/ .pdb/ .pol/ .printer/ .pwd/ .resources/ .resx/ .sql/ .sys/ .vb/ .vbs/ .vbproj/ .vsdisco/ .webinfo/ .xsd/ .xsx']
**restricted_headers** | **string** | A space-separated list of disallowed header names. | [optional]  [defaults to '/proxy/ /lock-token/ /content-range/ /translate/ /if/']
**rfi_score_threshold** | **int** | Remote file inclusion attack threshold. | [optional] 
**session_fixation_score_threshold** | **int** | Session fixation attack threshold. | [optional] 
**sql_injection_score_threshold** | **int** | SQL injection attack threshold. | [optional] 
**total_arg_length** | **int** | The maximum size of argument names and values. | [optional]  [defaults to 6400]
**updated_at** | **string** | Date and time that the settings object was last updated. | [optional] 
**warning_anomaly_score** | **int** | Score value to add for warning anomalies. | [optional] 
**xss_score_threshold** | **int** | XSS attack threshold. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
