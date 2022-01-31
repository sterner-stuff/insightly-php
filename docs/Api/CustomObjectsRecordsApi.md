# SternerStuff\InsightlyPHP\CustomObjectsRecordsApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEntity**](CustomObjectsRecordsApi.md#addEntity) | **POST** /{objectName} | Adds a record
[**addTranslation**](CustomObjectsRecordsApi.md#addTranslation) | **POST** /{objectName}/{id}/Translations/{language} | Adds a Translation for a record in a specific language
[**deleteEntity**](CustomObjectsRecordsApi.md#deleteEntity) | **DELETE** /{objectName}/{id} | Deletes a Record
[**getEntities**](CustomObjectsRecordsApi.md#getEntities) | **GET** /{objectName} | Gets a list of records
[**getEntitiesBySearch**](CustomObjectsRecordsApi.md#getEntitiesBySearch) | **GET** /{objectName}/Search | Gets a filtered list of records
[**getEntity**](CustomObjectsRecordsApi.md#getEntity) | **GET** /{objectName}/{id} | Gets a record
[**getTranslation**](CustomObjectsRecordsApi.md#getTranslation) | **GET** /{objectName}/{id}/Translations/{language} | Gets a record&#39;s translation in a specific language
[**updateEntity**](CustomObjectsRecordsApi.md#updateEntity) | **PUT** /{objectName} | Updates a record
[**updateTranslation**](CustomObjectsRecordsApi.md#updateTranslation) | **PUT** /{objectName}/{id}/Translations/{language} | Updates a record&#39;s translation in a specific language


# **addEntity**
> object addEntity($object_name, $field_values, $authorization)

Adds a record

If you have trouble with creating a record, try creating records via the web interface, and then access those records via the API. This way you            can see examples of the fields and sub-elements attached to the record. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to add (just include the JSON object as the request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addEntity($object_name, $field_values, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->addEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to add (just include the JSON object as the request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTranslation**
> object[] addTranslation($object_name, $language, $field_values, $id, $authorization)

Adds a Translation for a record in a specific language

If you have trouble with creating a record, try creating records via the web interface, and then access those records via the API. This way you            can see examples of the fields and sub-elements attached to the record. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$language = "language_example"; // string | The language of the translation to add
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to add (just include the JSON object as the request body)
$id = "id_example"; // string | 
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addTranslation($object_name, $language, $field_values, $id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->addTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **language** | **string**| The language of the translation to add |
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to add (just include the JSON object as the request body) |
 **id** | **string**|  |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntity**
> deleteEntity($object_name, $id, $authorization)

Deletes a Record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$id = 789; // int | Entity's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEntity($object_name, $id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->deleteEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
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

# **getEntities**
> object[] getEntities($object_name, $authorization, $brief, $skip, $top, $count_total)

Gets a list of records

Simple object graphs (excluding LINKS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional,true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntities($object_name, $authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
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
> object[] getEntitiesBySearch($object_name, $authorization, $field_name, $field_value, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of records

To filter with a field name and value, both field_name and field_value parameters must be provided.            <br /> Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$authorization = "{{Authorization}}"; // string | Authorization
$field_name = "field_name_example"; // string | Optional, field name for object
$field_value = "field_value_example"; // string | Optional, field value of the record
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when a record was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesBySearch($object_name, $authorization, $field_name, $field_value, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->getEntitiesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
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

# **getEntity**
> object getEntity($object_name, $id, $authorization)

Gets a record



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getEntity($object_name, $id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
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

# **getTranslation**
> object[] getTranslation($object_name, $id, $language, $authorization)

Gets a record's translation in a specific language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$id = 789; // int | The record's ID
$language = "language_example"; // string | The requested language
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getTranslation($object_name, $id, $language, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->getTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **id** | **int**| The record&#39;s ID |
 **language** | **string**| The requested language |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntity**
> object updateEntity($object_name, $field_values, $authorization)

Updates a record

If you have trouble updating a record, try accessing the record via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to update (just include the JSON object as the request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateEntity($object_name, $field_values, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->updateEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to update (just include the JSON object as the request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTranslation**
> object[] updateTranslation($object_name, $language, $field_values, $id, $authorization)

Updates a record's translation in a specific language

If you have trouble updating a record, try accessing the record via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\CustomObjectsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$language = "language_example"; // string | The language of the record's translation to update
$field_values = new \SternerStuff\InsightlyPHP\Model\\SternerStuff\InsightlyPHP\Model\FieldValues(); // \SternerStuff\InsightlyPHP\Model\FieldValues | The record to update (just include the JSON object as the request body)
$id = "id_example"; // string | 
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateTranslation($object_name, $language, $field_values, $id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsRecordsApi->updateTranslation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **language** | **string**| The language of the record&#39;s translation to update |
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\FieldValues**](../Model/.md)| The record to update (just include the JSON object as the request body) |
 **id** | **string**|  |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

