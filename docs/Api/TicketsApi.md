# SternerStuff\InsightlyPHP\TicketsApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addComment**](TicketsApi.md#addComment) | **POST** /Ticket/{id}/Comments | Adds a Comment to a Ticket
[**addEntity**](TicketsApi.md#addEntity) | **POST** /Ticket | Adds a Ticket
[**addFollow**](TicketsApi.md#addFollow) | **POST** /Ticket/{id}/Follow | Start following a Ticket
[**addMerge**](TicketsApi.md#addMerge) | **POST** /Ticket/{id}/Merge | Merges the Ticket into another Ticket
[**addTag**](TicketsApi.md#addTag) | **POST** /Ticket/{id}/Tags | Adds a Tag to a Ticket
[**deleteEntity**](TicketsApi.md#deleteEntity) | **DELETE** /Ticket/{id} | Deletes a Ticket
[**deleteFollow**](TicketsApi.md#deleteFollow) | **DELETE** /Ticket/{id}/Follow | Stop following a Ticket
[**deleteImageField**](TicketsApi.md#deleteImageField) | **DELETE** /Ticket/{id}/ImageField/{fieldName} | Deletes a Ticket&#39;s Custom Image Field
[**deleteTag**](TicketsApi.md#deleteTag) | **DELETE** /Ticket/{id}/Tags | Deletes a Tag from a Ticket
[**getComments**](TicketsApi.md#getComments) | **GET** /Ticket/{id}/Comments | Gets a Ticket&#39;s Comments
[**getEntities**](TicketsApi.md#getEntities) | **GET** /Ticket | Gets a list of Tickets
[**getEntitiesBySearch**](TicketsApi.md#getEntitiesBySearch) | **GET** /Ticket/Search | Gets a filtered list of Tickets
[**getEntitiesByTag**](TicketsApi.md#getEntitiesByTag) | **GET** /Ticket/SearchByTag | Gets a list of Tickets filtered by tags
[**getEntity**](TicketsApi.md#getEntity) | **GET** /Ticket/{id} | Gets a Ticket
[**getFollow**](TicketsApi.md#getFollow) | **GET** /Ticket/{id}/Follow | Gets a Follow state for a Ticket
[**getImageField**](TicketsApi.md#getImageField) | **GET** /Ticket/{id}/ImageField/{fieldName} | Gets a Ticket&#39;s Custom Image Field
[**getTags**](TicketsApi.md#getTags) | **GET** /Ticket/{id}/Tags | Gets a Ticket&#39;s Tags
[**updateEntity**](TicketsApi.md#updateEntity) | **PUT** /Ticket | Updates a Ticket
[**updateImageField**](TicketsApi.md#updateImageField) | **PUT** /Ticket/{id}/ImageField/{fieldName}/{fileName} | Updates a Ticket&#39;s Custom Image Field
[**updateTags**](TicketsApi.md#updateTags) | **PUT** /Ticket/{id}/Tags | Updates a Ticket&#39;s Tags


# **addComment**
> \SternerStuff\InsightlyPHP\Model\APIComment[] addComment($id, $authorization, $field_values)

Adds a Comment to a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \SternerStuff\InsightlyPHP\Model\APIComment(); // \SternerStuff\InsightlyPHP\Model\APIComment | The record to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addComment($id, $authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->addComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\SternerStuff\InsightlyPHP\Model\APIComment**](../Model/APIComment.md)| The record to add (just include the JSON object as the request body) |

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIComment[]**](../Model/APIComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEntity**
> object addEntity($authorization, $field_values)

Adds a Ticket

If you have trouble with creating a Ticket, try creating Tickets via the web interface, and then access those Tickets via the API. This way you            can see examples of the fields and sub-elements attached to the Ticket. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->addEntity: ', $e->getMessage(), PHP_EOL;
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

# **addFollow**
> \SternerStuff\InsightlyPHP\Model\APIFollow addFollow($id, $authorization)

Start following a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->addFollow: ', $e->getMessage(), PHP_EOL;
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

# **addMerge**
> object[] addMerge($id, $authorization, $api_ticket_merge)

Merges the Ticket into another Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_ticket_merge = new \SternerStuff\InsightlyPHP\Model\APITicketMerge(); // \SternerStuff\InsightlyPHP\Model\APITicketMerge | Merge parameters (just include JSON object as request body)

try {
    $result = $apiInstance->addMerge($id, $authorization, $api_ticket_merge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->addMerge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_ticket_merge** | [**\SternerStuff\InsightlyPHP\Model\APITicketMerge**](../Model/APITicketMerge.md)| Merge parameters (just include JSON object as request body) |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \SternerStuff\InsightlyPHP\Model\APITag addTag($id, $authorization, $api_tag)

Adds a Tag to a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->addTag: ', $e->getMessage(), PHP_EOL;
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

Deletes a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Entity's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEntity($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->deleteEntity: ', $e->getMessage(), PHP_EOL;
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

Stop following a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteFollow($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
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

# **deleteImageField**
> deleteImageField($id, $field_name, $authorization)

Deletes a Ticket's Custom Image Field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->deleteImageField: ', $e->getMessage(), PHP_EOL;
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

# **deleteTag**
> deleteTag($id, $api_tag, $authorization)

Deletes a Tag from a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
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

# **getComments**
> \SternerStuff\InsightlyPHP\Model\APIComment[] getComments($id, $authorization, $updated_after_utc, $skip, $top, $count_total)

Gets a Ticket's Comments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when comment was last updated.
$skip = 56; // int | Optional, number of comments to skip.
$top = 56; // int | Optional, maximum number of comments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getComments($id, $authorization, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when comment was last updated. | [optional]
 **skip** | **int**| Optional, number of comments to skip. | [optional]
 **top** | **int**| Optional, maximum number of comments to return in the response. | [optional]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\SternerStuff\InsightlyPHP\Model\APIComment[]**](../Model/APIComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntities**
> object[] getEntities($authorization, $brief, $skip, $top, $count_total)

Gets a list of Tickets

Simple object graphs (excluding LINKS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getEntities: ', $e->getMessage(), PHP_EOL;
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

Gets a filtered list of Tickets

To filter with a field name and value, both field_name and field_value parameters must be provided.            <br /> Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getEntitiesBySearch: ', $e->getMessage(), PHP_EOL;
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

Gets a list of Tickets filtered by tags

Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getEntitiesByTag: ', $e->getMessage(), PHP_EOL;
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

Gets a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getEntity: ', $e->getMessage(), PHP_EOL;
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

# **getFollow**
> \SternerStuff\InsightlyPHP\Model\APIFollow getFollow($id, $authorization)

Gets a Follow state for a Ticket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getFollow: ', $e->getMessage(), PHP_EOL;
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

# **getImageField**
> getImageField($id, $field_name, $authorization)

Gets a Ticket's Custom Image Field



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getImageField: ', $e->getMessage(), PHP_EOL;
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

# **getTags**
> \SternerStuff\InsightlyPHP\Model\APITag[] getTags($id, $authorization)

Gets a Ticket's Tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->getTags: ', $e->getMessage(), PHP_EOL;
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

# **updateEntity**
> object updateEntity($authorization, $field_values)

Updates a Ticket

If you have trouble updating a Ticket, try accessing the Ticket via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->updateEntity: ', $e->getMessage(), PHP_EOL;
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

# **updateImageField**
> object[] updateImageField($id, $field_name, $file_name, $authorization, $file)

Updates a Ticket's Custom Image Field

This action will replace any existing Image attached to the Ticket's image field. The contents of the image data should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->updateImageField: ', $e->getMessage(), PHP_EOL;
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

# **updateTags**
> \SternerStuff\InsightlyPHP\Model\APITag[] updateTags($id, $authorization, $api_tag)

Updates a Ticket's Tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TicketsApi(
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
    echo 'Exception when calling TicketsApi->updateTags: ', $e->getMessage(), PHP_EOL;
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

