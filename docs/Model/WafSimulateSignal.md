# # WafSimulateSignal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of signal detected (e.g., `SQLI`, `XSS`, `CMDEXE`, `TRAVERSAL`, `BACKDOOR`, `LOG4J-JNDI`, `BLOCKED`). | 
**detector** | **string** | The detector engine that identified the signal (e.g., `SQLI`, `LIBINJECTIONV5`, `LIBINJECTIONJS`, or a rule ID). | 
**detector_scope** | **string** | The scope of the detector that identified the signal. Derived from the signal type and detection type at simulation time. `system` — built-in WAF rule (e.g., `SQLI`, `XSS`). `workspace` — workspace-level custom rule or signal (e.g., `site.*` prefix). `account` — account-level custom signal (e.g., `corp.*` prefix). `unknown` — scope could not be determined (e.g., tags fetch failed or unrecognized type). |  [one of: 'system', 'workspace', 'account', 'unknown']
**redaction** | **string** | The redaction level applied to the detected value. Clients should handle unexpected string values gracefully, as new redaction types may be added. |  [one of: 'none', 'param', 'credit_card', 'ssn', 'guid', 'iban', 'request_header', 'response_header', 'custom_param', 'custom_request_header', 'custom_response_header', 'jsession_id', 'unknown']
**location** | **string** | Where in the request the signal was detected (e.g., `QUERYSTRING`, `POSTBODY`, `HEADER`, `HEADEROUT`, `POSTARG`). Present for detection signals; absent for custom and action signals. | [optional] 
**name** | **string** | The parameter or header name that triggered detection. Present when the WAF engine identifies a specific parameter or header. | [optional] 
**value** | **string** | The matched payload value that triggered signal detection. For detection signals, contains the matched content. For `BLOCKED` signals, carries the WAF response code as a string. Absent for custom signals. | [optional] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
