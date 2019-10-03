# BackupConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of backup: looker-s3 or custom-s3 | [optional] 
**custom_s3_bucket** | **string** | Name of bucket for custom-s3 backups | [optional] 
**custom_s3_bucket_region** | **string** | Name of region where the bucket is located | [optional] 
**custom_s3_key** | **string** | (Write-Only) AWS S3 key used for custom-s3 backups | [optional] 
**custom_s3_secret** | **string** | (Write-Only) AWS S3 secret used for custom-s3 backups | [optional] 
**url** | **string** | Link to get this item | [optional] 
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


