# # DefaultSettingsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**resize_filter** | **string** | The type of filter to use while resizing an image. |  [one of: 'lanczos3', 'lanczos2', 'bicubic', 'bilinear', 'nearest'] [defaults to 'lanczos3']
**webp** | **bool** | Controls whether or not to default to WebP output when the client supports it. This is equivalent to adding \&quot;auto&#x3D;webp\&quot; to all image optimizer requests. |  [defaults to false]
**webp_quality** | **int** | The default quality to use with WebP output. This can be overridden with the second option in the \&quot;quality\&quot; URL parameter on specific image optimizer requests. |  [defaults to 85]
**jpeg_type** | **string** | The default type of JPEG output to use. This can be overridden with \&quot;format&#x3D;bjpeg\&quot; and \&quot;format&#x3D;pjpeg\&quot; on specific image optimizer requests. |  [one of: 'auto', 'baseline', 'progressive'] [defaults to 'auto']
**jpeg_quality** | **int** | The default quality to use with JPEG output. This can be overridden with the \&quot;quality\&quot; parameter on specific image optimizer requests. |  [defaults to 85]
**upscale** | **bool** | Whether or not we should allow output images to render at sizes larger than input. |  [defaults to false]
**allow_video** | **bool** | Enables GIF to MP4 transformations on this service. |  [defaults to false]


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
