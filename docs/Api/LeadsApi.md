# SternerStuff\InsightlyPHP\LeadsApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](LeadsApi.md#addActivitySetAssignment) | **POST** /Leads/{id}/ActivitySetAssignment | Adds an Activity Set to a Lead
[**addEntity**](LeadsApi.md#addEntity) | **POST** /Leads | Adds a Lead
[**addFileAttachment**](LeadsApi.md#addFileAttachment) | **POST** /Leads/{id}/FileAttachments | Adds a File Attachment to a Lead
[**addFollow**](LeadsApi.md#addFollow) | **POST** /Leads/{id}/Follow | Start following a Lead
[**addLink**](LeadsApi.md#addLink) | **POST** /Leads/{id}/Links | Adds a Link
[**addNotes**](LeadsApi.md#addNotes) | **POST** /Leads/{id}/Notes | Adds a Note to a Lead
[**addTag**](LeadsApi.md#addTag) | **POST** /Leads/{id}/Tags | Adds a Tag to a Lead
[**deleteEntity**](LeadsApi.md#deleteEntity) | **DELETE** /Leads/{id} | Deletes a Lead
[**deleteFollow**](LeadsApi.md#deleteFollow) | **DELETE** /Leads/{id}/Follow | Stop following a Lead
[**deleteImage**](LeadsApi.md#deleteImage) | **DELETE** /Leads/{id}/Image | Deletes a Lead&#39;s Image
[**deleteImageField**](LeadsApi.md#deleteImageField) | **DELETE** /Leads/{id}/ImageField/{fieldName} | Deletes a Lead&#39;s Custom Image Field
[**deleteLink**](LeadsApi.md#deleteLink) | **DELETE** /Leads/{id}/Links/{linkId} | Deletes a Link
[**deleteTag**](LeadsApi.md#deleteTag) | **DELETE** /Leads/{id}/Tags | Deletes a Tag from a Lead
[**getEmails**](LeadsApi.md#getEmails) | **GET** /Leads/{id}/Emails | Gets a list of a Lead&#39;s Emails
[**getEntities**](LeadsApi.md#getEntities) | **GET** /Leads | Gets a list of Leads
[**getEntitiesBySearch**](LeadsApi.md#getEntitiesBySearch) | **GET** /Leads/Search | Gets a filtered list of Leads
[**getEntitiesByTag**](LeadsApi.md#getEntitiesByTag) | **GET** /Leads/SearchByTag | Gets a list of Leads filtered by tags
[**getEntity**](LeadsApi.md#getEntity) | **GET** /Leads/{id} | Gets a Lead
[**getEvents**](LeadsApi.md#getEvents) | **GET** /Leads/{id}/Events | Gets a Lead&#39;s Events
[**getFileAttachments**](LeadsApi.md#getFileAttachments) | **GET** /Leads/{id}/FileAttachments | Gets a Lead&#39;s File Attachments
[**getFollow**](LeadsApi.md#getFollow) | **GET** /Leads/{id}/Follow | Gets a Follow state for a Lead
[**getImage**](LeadsApi.md#getImage) | **GET** /Leads/{id}/Image | Gets a Lead&#39;s Image
[**getImageField**](LeadsApi.md#getImageField) | **GET** /Leads/{id}/ImageField/{fieldName} | Gets a Lead&#39;s Custom Image Field
[**getLinkEmailAddress**](LeadsApi.md#getLinkEmailAddress) | **GET** /Leads/{id}/LinkEmailAddress | Gets the email address to use for linking with the Lead
[**getLinks**](LeadsApi.md#getLinks) | **GET** /Leads/{id}/Links | Gets a Lead&#39;s Links
[**getNotes**](LeadsApi.md#getNotes) | **GET** /Leads/{id}/Notes | Gets a Lead&#39;s Notes
[**getTags**](LeadsApi.md#getTags) | **GET** /Leads/{id}/Tags | Gets a Lead&#39;s Tags
[**getTasks**](LeadsApi.md#getTasks) | **GET** /Leads/{id}/Tasks | Gets a list of a Lead&#39;s Tasks
[**updateEntity**](LeadsApi.md#updateEntity) | **PUT** /Leads | Updates a Lead
[**updateImage**](LeadsApi.md#updateImage) | **PUT** /Leads/{id}/Image/{filename} | Updates a Lead&#39;s Image
[**updateImageField**](LeadsApi.md#updateImageField) | **PUT** /Leads/{id}/ImageField/{fieldName}/{fileName} | Updates a Lead&#39;s Custom Image Field
[**updateLink**](LeadsApi.md#updateLink) | **PUT** /Leads/{id}/Links | Updates a Link
[**updateNotes**](LeadsApi.md#updateNotes) | **PUT** /Leads/{id}/Notes | Updates a note of a Lead
[**updateTags**](LeadsApi.md#updateTags) | **PUT** /Leads/{id}/Tags | Updates a Lead&#39;s Tags


# **addActivitySetAssignment**
> \SternerStuff\InsightlyPHP\Model\APIActivitySetAssignment addActivitySetAssignment($id, $authorization, $api_activity_set_assignment)

Adds an Activity Set to a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_activity_set_assignment = new \SternerStuff\InsightlyPHP\Model\APIActivitySetAssignment(); // \SternerStuff\InsightlyPHP\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body)

try {
    $result = $apiInstance->addActivitySetAssignment($id, $authorization, $api_activity_set_assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_activity_set_assignment** | [**\SternerStuff\InsightlyPHP\Model\APIActivitySetAssignment**](../Model/APIActivitySetAssignment.md)| The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body) |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIActivitySetAssignment**](../Model/APIActivitySetAssignment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEntity**
> object addEntity($authorization, $field_values)

Adds a Lead

If you have trouble with creating a Lead, try creating Leads via the web interface, and then access those Leads via the API. This way you            can see examples of the fields and sub-elements attached to the Lead. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addEntity($authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to add (just include the JSON object as the request body) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \SternerStuff\InsightlyPHP\Model\APIFileAttachment addFileAttachment($id, $file, $authorization, $file_name, $content_type, $file_category_id)

Adds a File Attachment to a Lead

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Record ID
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$authorization = "{{Authorization}}"; // string | Authorization
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $apiInstance->addFileAttachment($id, $file, $authorization, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Record ID |
 **file** | **\SplFileObject**| The file part of the multipart/form-data request. Only one file can be added per request. |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **file_name** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **file_category_id** | **int**|  | [optional]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIFileAttachment**](../Model/APIFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFollow**
> \SternerStuff\InsightlyPHP\Model\APIFollow addFollow($id, $authorization)

Start following a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addFollow($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIFollow**](../Model/APIFollow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLink**
> \SternerStuff\InsightlyPHP\Model\APILinkDto addLink($id, $authorization, $api_link)

Adds a Link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$api_link = new \SternerStuff\InsightlyPHP\Model\APILinkDto(); // \SternerStuff\InsightlyPHP\Model\APILinkDto | The Link to add (just include JSON object as request body)

try {
    $result = $apiInstance->addLink($id, $authorization, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_link** | [**\SternerStuff\InsightlyPHP\Model\APILinkDto**](../Model/APILinkDto.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APILinkDto**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNotes**
> \SternerStuff\InsightlyPHP\Model\APINote addNotes($id, $authorization, $field_values)

Adds a Note to a Lead

If you have trouble with creating a Lead, try creating Leads via the web interface, and then access those Leads via the API. This way you            can see examples of the fields and sub-elements attached to the Lead. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \SternerStuff\InsightlyPHP\Model\APINote(); // \SternerStuff\InsightlyPHP\Model\APINote | The record to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addNotes($id, $authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\APINote**](../Model/APINote.md)| The record to add (just include the JSON object as the request body) |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APINote**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \SternerStuff\InsightlyPHP\Model\APITag addTag($id, $authorization, $api_tag)

Adds a Tag to a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_tag = new \SternerStuff\InsightlyPHP\Model\APITag(); // \SternerStuff\InsightlyPHP\Model\APITag | The Record's Tag

try {
    $result = $apiInstance->addTag($id, $authorization, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_tag** | [**\SternerStuff\InsightlyPHP\Model\APITag**](../Model/APITag.md)| The Record&#39;s Tag |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APITag**](../Model/APITag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntity**
> deleteEntity($id, $authorization)

Deletes a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Entity's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEntity($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Entity&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFollow**
> deleteFollow($id, $authorization)

Stop following a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteFollow($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImage**
> deleteImage($id, $authorization)

Deletes a Lead's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteImage($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImageField**
> deleteImageField($id, $field_name, $authorization)

Deletes a Lead's Custom Image Field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$field_name = "field_name_example"; // string | An image field name
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteImageField($id, $field_name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteImageField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **field_name** | **string**| An image field name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLink**
> deleteLink($id, $link_id, $authorization)

Deletes a Link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteLink($id, $link_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($id, $api_tag, $authorization)

Deletes a Tag from a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$api_tag = new \SternerStuff\InsightlyPHP\Model\APITag(); // \SternerStuff\InsightlyPHP\Model\APITag | The Record's Tag
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteTag($id, $api_tag, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **api_tag** | [**\SternerStuff\InsightlyPHP\Model\APITag**](../Model/APITag.md)| The Record&#39;s Tag |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmails**
> \SternerStuff\InsightlyPHP\Model\APIEmail[] getEmails($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of a Lead's Emails



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEmails($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when email was last updated. | [optional]
 **top** | **int**| Optional, maximum number of emails to return. | [optional]
 **skip** | **int**| Optional, number of emails to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIEmail[]**](../Model/APIEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntities**
> object[] getEntities($authorization, $brief, $skip, $top, $count_total)

Gets a list of Leads

Simple object graphs (excluding LINKS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional,true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntities($authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional,true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesBySearch**
> object[] getEntitiesBySearch($authorization, $field_name, $field_value, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Leads

To filter with a field name and value, both field_name and field_value parameters must be provided.            <br /> Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_name = "field_name_example"; // string | Optional, field name for object
$field_value = "field_value_example"; // string | Optional, field value of the record
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when a record was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesBySearch($authorization, $field_name, $field_value, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEntitiesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_name** | **string**| Optional, field name for object | [optional]
 **field_value** | **string**| Optional, field value of the record | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when a record was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesByTag**
> object[] getEntitiesByTag($tag_name, $authorization, $brief, $skip, $top, $count_total)

Gets a list of Leads filtered by tags

Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_name = "tag_name_example"; // string | Tag name to filter on
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesByTag($tag_name, $authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEntitiesByTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_name** | **string**| Tag name to filter on |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntity**
> object getEntity($id, $authorization)

Gets a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getEntity($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \SternerStuff\InsightlyPHP\Model\APIEvent[] getEvents($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a Lead's Events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEvents($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when event was last updated. | [optional]
 **top** | **int**| Optional, maximum number of events to return. | [optional]
 **skip** | **int**| Optional, number of events to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIEvent[]**](../Model/APIEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachments**
> \SternerStuff\InsightlyPHP\Model\APIFileAttachment[] getFileAttachments($id, $authorization, $updated_after_utc, $skip, $top, $count_total)

Gets a Lead's File Attachments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getFileAttachments($id, $authorization, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when file attachment was last updated. | [optional]
 **skip** | **int**| Optional, number of file attachments to skip. | [optional]
 **top** | **int**| Optional, maximum number of file attachments to return in the response. | [optional]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIFileAttachment[]**](../Model/APIFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFollow**
> \SternerStuff\InsightlyPHP\Model\APIFollow getFollow($id, $authorization)

Gets a Follow state for a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getFollow($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIFollow**](../Model/APIFollow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImage**
> getImage($id, $authorization)

Gets a Lead's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->getImage($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageField**
> getImageField($id, $field_name, $authorization)

Gets a Lead's Custom Image Field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$field_name = "field_name_example"; // string | An image field name
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->getImageField($id, $field_name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getImageField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **field_name** | **string**| An image field name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkEmailAddress**
> \SternerStuff\InsightlyPHP\Model\APILinkEmailAddress getLinkEmailAddress($id, $authorization)

Gets the email address to use for linking with the Lead

An email address to use as a mail drop for the Lead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getLinkEmailAddress($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLinkEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APILinkEmailAddress**](../Model/APILinkEmailAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinks**
> \SternerStuff\InsightlyPHP\Model\APILinkDto[] getLinks($id, $authorization)

Gets a Lead's Links



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getLinks($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APILinkDto[]**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \SternerStuff\InsightlyPHP\Model\APINote[] getNotes($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a Lead's Notes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getNotes($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when note was last updated. | [optional]
 **top** | **int**| Optional, maximum number of notes to return. | [optional]
 **skip** | **int**| Optional, number of notes to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APINote[]**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTags**
> \SternerStuff\InsightlyPHP\Model\APITag[] getTags($id, $authorization)

Gets a Lead's Tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getTags($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APITag[]**](../Model/APITag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \SternerStuff\InsightlyPHP\Model\APITask[] getTasks($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of a Lead's Tasks



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getTasks($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when task was last updated. | [optional]
 **top** | **int**| Optional, maximum number of tasks to return. | [optional]
 **skip** | **int**| Optional, number of tasks to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APITask[]**](../Model/APITask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntity**
> object updateEntity($authorization, $field_values)

Updates a Lead

If you have trouble updating a Lead, try accessing the Lead via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to update (just include the JSON object as the request body)

try {
    $result = $apiInstance->updateEntity($authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to update (just include the JSON object as the request body) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImage**
> object[] updateImage($id, $filename, $authorization, $file)

Updates a Lead's Image

This action will replace any existing Image attached to the Lead. The contents of the image data should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$filename = "filename_example"; // string | Name of Image File to be attached to Record
$authorization = "{{Authorization}}"; // string | Authorization
$file = "B"; // string | File to upload

try {
    $result = $apiInstance->updateImage($id, $filename, $authorization, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **filename** | **string**| Name of Image File to be attached to Record |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **file** | **string**| File to upload |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImageField**
> object[] updateImageField($id, $field_name, $file_name, $authorization, $file)

Updates a Lead's Custom Image Field

This action will replace any existing Image attached to the Lead's image field. The contents of the image data should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$field_name = "field_name_example"; // string | An image field name
$file_name = "file_name_example"; // string | An image file name
$authorization = "{{Authorization}}"; // string | Authorization
$file = "B"; // string | File to upload

try {
    $result = $apiInstance->updateImageField($id, $field_name, $file_name, $authorization, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateImageField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **field_name** | **string**| An image field name |
 **file_name** | **string**| An image file name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **file** | **string**| File to upload |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \SternerStuff\InsightlyPHP\Model\APILinkDto updateLink($id, $authorization, $api_link)

Updates a Link



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$api_link = new \SternerStuff\InsightlyPHP\Model\APILinkDto(); // \SternerStuff\InsightlyPHP\Model\APILinkDto | The Link to add (just include JSON object as request body)

try {
    $result = $apiInstance->updateLink($id, $authorization, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_link** | [**\SternerStuff\InsightlyPHP\Model\APILinkDto**](../Model/APILinkDto.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APILinkDto**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotes**
> \SternerStuff\InsightlyPHP\Model\APINote updateNotes($id, $authorization, $field_values, $brief)

Updates a note of a Lead

If you have trouble updating a Lead, try accessing the Lead via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \SternerStuff\InsightlyPHP\Model\APINote(); // \SternerStuff\InsightlyPHP\Model\APINote | The record to update (just include the JSON object as the request body)
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.

try {
    $result = $apiInstance->updateNotes($id, $authorization, $field_values, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\APINote**](../Model/APINote.md)| The record to update (just include the JSON object as the request body) |
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APINote**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTags**
> \SternerStuff\InsightlyPHP\Model\APITag[] updateTags($id, $authorization, $api_tag)

Updates a Lead's Tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_tag = new \SternerStuff\InsightlyPHP\Model\APITag(); // \SternerStuff\InsightlyPHP\Model\APITag | The Record's Tags

try {
    $result = $apiInstance->updateTags($id, $authorization, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_tag** | [**\SternerStuff\InsightlyPHP\Model\APITag**](../Model/APITag.md)| The Record&#39;s Tags |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APITag[]**](../Model/APITag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

