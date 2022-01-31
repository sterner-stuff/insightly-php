# SternerStuff\InsightlyPHP\TaskCategoriesApi

All URIs are relative to *https://api.insightly.com/v3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTaskCategory**](TaskCategoriesApi.md#addTaskCategory) | **POST** /TaskCategories | Adds a Task Category
[**deleteTaskCategory**](TaskCategoriesApi.md#deleteTaskCategory) | **DELETE** /TaskCategories/{id} | Deactivates a Task Category
[**getTaskCategories**](TaskCategoriesApi.md#getTaskCategories) | **GET** /TaskCategories | Gets a list of Task Categories
[**getTaskCategory**](TaskCategoriesApi.md#getTaskCategory) | **GET** /TaskCategories/{id} | Gets a Task Category
[**updateTaskCategory**](TaskCategoriesApi.md#updateTaskCategory) | **PUT** /TaskCategories | Updates a Task Category


# **addTaskCategory**
> object addTaskCategory($category, $authorization)

Adds a Task Category

This endpoint is used to create a new task category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \SternerStuff\InsightlyPHP\Model\APICategory(); // \SternerStuff\InsightlyPHP\Model\APICategory | The Task Category to add (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addTaskCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->addTaskCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\SternerStuff\InsightlyPHP\Model\APICategory**](../Model/APICategory.md)| The Task Category to add (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaskCategory**
> deleteTaskCategory($id, $authorization)

Deactivates a Task Category

This endpoint is used to deactivate a task category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Task Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteTaskCategory($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->deleteTaskCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task Category&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskCategories**
> object[] getTaskCategories($authorization, $skip, $top, $count_total)

Gets a list of Task Categories

This read only endpoint returns a list of the task categories set up for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getTaskCategories($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->getTaskCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskCategory**
> object getTaskCategory($id, $authorization)

Gets a Task Category

This endpoint returns the graph for a specific task category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Task Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getTaskCategory($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->getTaskCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task Category&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaskCategory**
> object updateTaskCategory($category, $authorization)

Updates a Task Category

This endpoint is used to update an existing task category, for example to change the background color for the task category's label in the web UI. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SternerStuff\InsightlyPHP\Api\TaskCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \SternerStuff\InsightlyPHP\Model\APICategory(); // \SternerStuff\InsightlyPHP\Model\APICategory | A Task Category (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateTaskCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCategoriesApi->updateTaskCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\SternerStuff\InsightlyPHP\Model\APICategory**](../Model/APICategory.md)| A Task Category (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

