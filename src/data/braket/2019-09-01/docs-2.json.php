<?php
// This file was auto-generated from sdk-root/src/data/braket/2019-09-01/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The Amazon Braket API Reference provides information about the operations and structures supported in Amazon Braket.</p> <p>Additional Resources:</p> <ul> <li> <p> <a href="https://docs.aws.amazon.com/braket/latest/developerguide/what-is-braket.html">Amazon Braket Developer Guide</a> </p> </li> </ul>', 'operations' => [ 'CancelJob' => '<p>Cancels an Amazon Braket job.</p>', 'CancelQuantumTask' => '<p>Cancels the specified task.</p>', 'CreateJob' => '<p>Creates an Amazon Braket job.</p>', 'CreateQuantumTask' => '<p>Creates a quantum task.</p>', 'GetDevice' => '<p>Retrieves the devices available in Amazon Braket.</p> <note> <p>For backwards compatibility with older versions of BraketSchemas, OpenQASM information is omitted from GetDevice API calls. To get this information the user-agent needs to present a recent version of the BraketSchemas (1.8.0 or later). The Braket SDK automatically reports this for you. If you do not see OpenQASM results in the GetDevice response when using a Braket SDK, you may need to set AWS_EXECUTION_ENV environment variable to configure user-agent. See the code examples provided below for how to do this for the AWS CLI, Boto3, and the Go, Java, and JavaScript/TypeScript SDKs.</p> </note>', 'GetJob' => '<p>Retrieves the specified Amazon Braket job.</p>', 'GetQuantumTask' => '<p>Retrieves the specified quantum task.</p>', 'ListTagsForResource' => '<p>Shows the tags associated with this resource.</p>', 'SearchDevices' => '<p>Searches for devices using the specified filters.</p>', 'SearchJobs' => '<p>Searches for Amazon Braket jobs that match the specified filter values.</p>', 'SearchQuantumTasks' => '<p>Searches for tasks that match the specified filter values.</p>', 'TagResource' => '<p>Add a tag to the specified resource.</p>', 'UntagResource' => '<p>Remove tags from a resource.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'AlgorithmSpecification' => [ 'base' => '<p>Defines the Amazon Braket job to be created. Specifies the container image the job uses and the paths to the Python scripts used for entry and training.</p>', 'refs' => [ 'CreateJobRequest$algorithmSpecification' => '<p>Definition of the Amazon Braket job to be created. Specifies the container image the job uses and information about the Python scripts used for entry and training.</p>', 'GetJobResponse$algorithmSpecification' => '<p>Definition of the Amazon Braket job created. Specifies the container image the job uses, information about the Python scripts used for entry and training, and the user-defined metrics used to evaluation the job.</p>', ], ], 'CancelJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'CancelQuantumTaskRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelQuantumTaskResponse' => [ 'base' => NULL, 'refs' => [], ], 'CancellationStatus' => [ 'base' => NULL, 'refs' => [ 'CancelJobResponse$cancellationStatus' => '<p>The status of the job cancellation request.</p>', 'CancelQuantumTaskResponse$cancellationStatus' => '<p>The status of the cancellation request.</p>', ], ], 'CompressionType' => [ 'base' => NULL, 'refs' => [ 'ScriptModeConfig$compressionType' => '<p>The type of compression used by the Python scripts for an Amazon Braket job.</p>', ], ], 'ConflictException' => [ 'base' => '<p>An error occurred due to a conflict.</p>', 'refs' => [], ], 'ContainerImage' => [ 'base' => '<p>The container image used to create an Amazon Braket job.</p>', 'refs' => [ 'AlgorithmSpecification$containerImage' => '<p>The container image used to create an Amazon Braket job.</p>', ], ], 'CreateJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateJobRequestInputDataConfigList' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$inputDataConfig' => '<p>A list of parameters that specify the name and type of input data and where it is located.</p>', ], ], 'CreateJobRequestJobNameString' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$jobName' => '<p>The name of the Amazon Braket job.</p>', ], ], 'CreateJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'CreateQuantumTaskRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateQuantumTaskRequestDeviceParametersString' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$deviceParameters' => '<p>The parameters for the device to run the task on.</p>', ], ], 'CreateQuantumTaskRequestOutputS3BucketString' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$outputS3Bucket' => '<p>The S3 bucket to store task result files in.</p>', ], ], 'CreateQuantumTaskRequestOutputS3KeyPrefixString' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$outputS3KeyPrefix' => '<p>The key prefix for the location in the S3 bucket to store task results in.</p>', ], ], 'CreateQuantumTaskRequestShotsLong' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$shots' => '<p>The number of shots to use for the task.</p>', ], ], 'CreateQuantumTaskResponse' => [ 'base' => NULL, 'refs' => [], ], 'DataSource' => [ 'base' => '<p>Information about the source of the data used by the Amazon Braket job.</p>', 'refs' => [ 'InputFileConfig$dataSource' => '<p>The location of the channel data.</p>', ], ], 'DeviceArn' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$deviceArn' => '<p>The ARN of the device to run the task on.</p>', 'DeviceSummary$deviceArn' => '<p>The ARN of the device.</p>', 'GetDeviceRequest$deviceArn' => '<p>The ARN of the device to retrieve.</p>', 'GetDeviceResponse$deviceArn' => '<p>The ARN of the device.</p>', 'GetQuantumTaskResponse$deviceArn' => '<p>The ARN of the device the task was run on.</p>', 'QuantumTaskSummary$deviceArn' => '<p>The ARN of the device the task ran on.</p>', ], ], 'DeviceConfig' => [ 'base' => '<p>Configures the quantum processing units (QPUs) or simulator used to create and run an Amazon Braket job.</p>', 'refs' => [ 'CreateJobRequest$deviceConfig' => '<p>The quantum processing unit (QPU) or simulator used to create an Amazon Braket job.</p>', 'GetJobResponse$deviceConfig' => '<p>The quantum processing unit (QPU) or simulator used to run the Amazon Braket job.</p>', ], ], 'DeviceOfflineException' => [ 'base' => '<p>The specified device is currently offline.</p>', 'refs' => [], ], 'DeviceQueueInfo' => [ 'base' => '<p>Information about tasks and jobs queued on a device.</p>', 'refs' => [ 'DeviceQueueInfoList$member' => NULL, ], ], 'DeviceQueueInfoList' => [ 'base' => NULL, 'refs' => [ 'GetDeviceResponse$deviceQueueInfo' => '<p>List of information about tasks and jobs queued on a device.</p>', ], ], 'DeviceRetiredException' => [ 'base' => '<p>The specified device has been retired.</p>', 'refs' => [], ], 'DeviceStatus' => [ 'base' => NULL, 'refs' => [ 'DeviceSummary$deviceStatus' => '<p>The status of the device.</p>', 'GetDeviceResponse$deviceStatus' => '<p>The status of the device.</p>', ], ], 'DeviceSummary' => [ 'base' => '<p>Includes information about the device.</p>', 'refs' => [ 'DeviceSummaryList$member' => NULL, ], ], 'DeviceSummaryList' => [ 'base' => NULL, 'refs' => [ 'SearchDevicesResponse$devices' => '<p>An array of <code>DeviceSummary</code> objects for devices that match the specified filter values.</p>', ], ], 'DeviceType' => [ 'base' => NULL, 'refs' => [ 'DeviceSummary$deviceType' => '<p>The type of the device.</p>', 'GetDeviceResponse$deviceType' => '<p>The type of the device.</p>', ], ], 'GetDeviceRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDeviceResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetJobRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetJobResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetJobResponseJobNameString' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$jobName' => '<p>The name of the Amazon Braket job.</p>', ], ], 'GetQuantumTaskRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetQuantumTaskResponse' => [ 'base' => NULL, 'refs' => [], ], 'HybridJobAdditionalAttributeName' => [ 'base' => NULL, 'refs' => [ 'HybridJobAdditionalAttributeNamesList$member' => NULL, ], ], 'HybridJobAdditionalAttributeNamesList' => [ 'base' => NULL, 'refs' => [ 'GetJobRequest$additionalAttributeNames' => '<p>A list of attributes to return information for.</p>', ], ], 'HybridJobQueueInfo' => [ 'base' => '<p>Information about the queue for a specified job.</p>', 'refs' => [ 'GetJobResponse$queueInfo' => '<p>Queue information for the requested job. Only returned if <code>QueueInfo</code> is specified in the <code>additionalAttributeNames"</code> field in the <code>GetJob</code> API request.</p>', ], ], 'HyperParameters' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$hyperParameters' => '<p>Algorithm-specific parameters used by an Amazon Braket job that influence the quality of the training job. The values are set with a string of JSON key:value pairs, where the key is the name of the hyperparameter and the value is the value of th hyperparameter.</p>', 'GetJobResponse$hyperParameters' => '<p>Algorithm-specific parameters used by an Amazon Braket job that influence the quality of the traiing job. The values are set with a string of JSON key:value pairs, where the key is the name of the hyperparameter and the value is the value of th hyperparameter.</p>', ], ], 'HyperParametersValueString' => [ 'base' => NULL, 'refs' => [ 'HyperParameters$value' => NULL, ], ], 'InputConfigList' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$inputDataConfig' => '<p>A list of parameters that specify the name and type of input data and where it is located.</p>', ], ], 'InputFileConfig' => [ 'base' => '<p>A list of parameters that specify the input channels, type of input data, and where it is located.</p>', 'refs' => [ 'CreateJobRequestInputDataConfigList$member' => NULL, 'InputConfigList$member' => NULL, ], ], 'InputFileConfigChannelNameString' => [ 'base' => NULL, 'refs' => [ 'InputFileConfig$channelName' => '<p>A named input source that an Amazon Braket job can consume.</p>', ], ], 'InstanceConfig' => [ 'base' => '<p>Configures the resource instances to use while running the Amazon Braket hybrid job on Amazon Braket.</p>', 'refs' => [ 'CreateJobRequest$instanceConfig' => '<p>Configuration of the resource instances to use while running the hybrid job on Amazon Braket.</p>', 'GetJobResponse$instanceConfig' => '<p>The resource instances to use while running the hybrid job on Amazon Braket.</p>', ], ], 'InstanceConfigInstanceCountInteger' => [ 'base' => NULL, 'refs' => [ 'InstanceConfig$instanceCount' => '<p>Configures the number of resource instances to use while running an Amazon Braket job on Amazon Braket. The default value is 1.</p>', ], ], 'InstanceConfigVolumeSizeInGbInteger' => [ 'base' => NULL, 'refs' => [ 'InstanceConfig$volumeSizeInGb' => '<p>The size of the storage volume, in GB, that user wants to provision.</p>', ], ], 'InstanceType' => [ 'base' => NULL, 'refs' => [ 'InstanceConfig$instanceType' => '<p>Configures the type resource instances to use while running an Amazon Braket hybrid job.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$billableDuration' => '<p>The billable time the Amazon Braket job used to complete.</p>', ], ], 'InternalServiceException' => [ 'base' => '<p>The request processing has failed because of an unknown error, exception, or failure.</p>', 'refs' => [], ], 'JobArn' => [ 'base' => NULL, 'refs' => [ 'CancelJobRequest$jobArn' => '<p>The ARN of the Amazon Braket job to cancel.</p>', 'CancelJobResponse$jobArn' => '<p>The ARN of the Amazon Braket job.</p>', 'CreateJobResponse$jobArn' => '<p>The ARN of the Amazon Braket job created.</p>', 'GetJobRequest$jobArn' => '<p>The ARN of the job to retrieve.</p>', 'GetJobResponse$jobArn' => '<p>The ARN of the Amazon Braket job.</p>', 'GetQuantumTaskResponse$jobArn' => '<p>The ARN of the Amazon Braket job associated with the quantum task.</p>', 'JobSummary$jobArn' => '<p>The ARN of the Amazon Braket job.</p>', ], ], 'JobCheckpointConfig' => [ 'base' => '<p>Contains information about the output locations for job checkpoint data.</p>', 'refs' => [ 'CreateJobRequest$checkpointConfig' => '<p>Information about the output locations for job checkpoint data.</p>', 'GetJobResponse$checkpointConfig' => '<p>Information about the output locations for job checkpoint data.</p>', ], ], 'JobEventDetails' => [ 'base' => '<p>Details about the type and time events occurred related to the Amazon Braket job.</p>', 'refs' => [ 'JobEvents$member' => NULL, ], ], 'JobEventDetailsMessageString' => [ 'base' => NULL, 'refs' => [ 'JobEventDetails$message' => '<p>A message describing the event that occurred related to the Amazon Braket job.</p>', ], ], 'JobEventType' => [ 'base' => NULL, 'refs' => [ 'JobEventDetails$eventType' => '<p>The type of event that occurred related to the Amazon Braket job.</p>', ], ], 'JobEvents' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$events' => '<p>Details about the type and time events occurred related to the Amazon Braket job.</p>', ], ], 'JobOutputDataConfig' => [ 'base' => '<p>Specifies the path to the S3 location where you want to store job artifacts and the encryption key used to store them.</p>', 'refs' => [ 'CreateJobRequest$outputDataConfig' => '<p>The path to the S3 location where you want to store job artifacts and the encryption key used to store them.</p>', 'GetJobResponse$outputDataConfig' => '<p>The path to the S3 location where job artifacts are stored and the encryption key used to store them there.</p>', ], ], 'JobPrimaryStatus' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$status' => '<p>The status of the Amazon Braket job.</p>', 'JobSummary$status' => '<p>The status of the Amazon Braket job.</p>', ], ], 'JobStoppingCondition' => [ 'base' => '<p>Specifies limits for how long an Amazon Braket job can run. </p>', 'refs' => [ 'CreateJobRequest$stoppingCondition' => '<p> The user-defined criteria that specifies when a job stops running.</p>', 'GetJobResponse$stoppingCondition' => '<p>The user-defined criteria that specifies when to stop a job running.</p>', ], ], 'JobStoppingConditionMaxRuntimeInSecondsInteger' => [ 'base' => NULL, 'refs' => [ 'JobStoppingCondition$maxRuntimeInSeconds' => '<p>The maximum length of time, in seconds, that an Amazon Braket job can run.</p>', ], ], 'JobSummary' => [ 'base' => '<p>Provides summary information about an Amazon Braket job.</p>', 'refs' => [ 'JobSummaryList$member' => NULL, ], ], 'JobSummaryList' => [ 'base' => NULL, 'refs' => [ 'SearchJobsResponse$jobs' => '<p>An array of <code>JobSummary</code> objects for devices that match the specified filter values.</p>', ], ], 'JobToken' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$jobToken' => '<p>The token for an Amazon Braket job that associates it with the quantum task.</p>', ], ], 'JsonValue' => [ 'base' => NULL, 'refs' => [ 'CreateQuantumTaskRequest$action' => '<p>The action associated with the task.</p>', 'GetDeviceResponse$deviceCapabilities' => '<p>Details about the capabilities of the device.</p>', 'GetQuantumTaskResponse$deviceParameters' => '<p>The parameters for the device on which the task ran.</p>', ], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Long' => [ 'base' => NULL, 'refs' => [ 'GetQuantumTaskResponse$shots' => '<p>The number of shots used in the task.</p>', 'QuantumTaskSummary$shots' => '<p>The shots used for the task.</p>', ], ], 'QuantumTaskAdditionalAttributeName' => [ 'base' => NULL, 'refs' => [ 'QuantumTaskAdditionalAttributeNamesList$member' => NULL, ], ], 'QuantumTaskAdditionalAttributeNamesList' => [ 'base' => NULL, 'refs' => [ 'GetQuantumTaskRequest$additionalAttributeNames' => '<p>A list of attributes to return information for.</p>', ], ], 'QuantumTaskArn' => [ 'base' => NULL, 'refs' => [ 'CancelQuantumTaskRequest$quantumTaskArn' => '<p>The ARN of the task to cancel.</p>', 'CancelQuantumTaskResponse$quantumTaskArn' => '<p>The ARN of the task.</p>', 'CreateQuantumTaskResponse$quantumTaskArn' => '<p>The ARN of the task created by the request.</p>', 'GetQuantumTaskRequest$quantumTaskArn' => '<p>the ARN of the task to retrieve.</p>', 'GetQuantumTaskResponse$quantumTaskArn' => '<p>The ARN of the task.</p>', 'QuantumTaskSummary$quantumTaskArn' => '<p>The ARN of the task.</p>', ], ], 'QuantumTaskQueueInfo' => [ 'base' => '<p>Information about the queue for the specified quantum task.</p>', 'refs' => [ 'GetQuantumTaskResponse$queueInfo' => '<p>Queue information for the requested quantum task. Only returned if <code>QueueInfo</code> is specified in the <code>additionalAttributeNames"</code> field in the <code>GetQuantumTask</code> API request.</p>', ], ], 'QuantumTaskStatus' => [ 'base' => NULL, 'refs' => [ 'GetQuantumTaskResponse$status' => '<p>The status of the task.</p>', 'QuantumTaskSummary$status' => '<p>The status of the task.</p>', ], ], 'QuantumTaskSummary' => [ 'base' => '<p>Includes information about a quantum task.</p>', 'refs' => [ 'QuantumTaskSummaryList$member' => NULL, ], ], 'QuantumTaskSummaryList' => [ 'base' => NULL, 'refs' => [ 'SearchQuantumTasksResponse$quantumTasks' => '<p>An array of <code>QuantumTaskSummary</code> objects for tasks that match the specified filters.</p>', ], ], 'QueueName' => [ 'base' => NULL, 'refs' => [ 'DeviceQueueInfo$queue' => '<p>The name of the queue. </p>', 'HybridJobQueueInfo$queue' => '<p>The name of the queue.</p>', 'QuantumTaskQueueInfo$queue' => '<p>The name of the queue. </p>', ], ], 'QueuePriority' => [ 'base' => NULL, 'refs' => [ 'DeviceQueueInfo$queuePriority' => '<p>Optional. Specifies the priority of the queue. Tasks in a priority queue are processed before the tasks in a normal queue.</p>', 'QuantumTaskQueueInfo$queuePriority' => '<p>Optional. Specifies the priority of the queue. Quantum tasks in a priority queue are processed before the tasks in a normal queue.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource was not found.</p>', 'refs' => [], ], 'RoleArn' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$roleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that Amazon Braket can assume to perform tasks on behalf of a user. It can access user resources, run an Amazon Braket job container on behalf of user, and output resources to the users\' s3 buckets.</p>', 'GetJobResponse$roleArn' => '<p>The Amazon Resource Name (ARN) of an IAM role that Amazon Braket can assume to perform tasks on behalf of a user. It can access user resources, run an Amazon Braket job container on behalf of user, and output resources to the s3 buckets of a user.</p>', ], ], 'S3DataSource' => [ 'base' => '<p>Information about the data stored in Amazon S3 used by the Amazon Braket job.</p>', 'refs' => [ 'DataSource$s3DataSource' => '<p>Information about the data stored in Amazon S3 used by the Amazon Braket job.</p>', ], ], 'S3Path' => [ 'base' => NULL, 'refs' => [ 'JobCheckpointConfig$s3Uri' => '<p>Identifies the S3 path where you want Amazon Braket to store checkpoints. For example, <code>s3://bucket-name/key-name-prefix</code>.</p>', 'JobOutputDataConfig$s3Path' => '<p>Identifies the S3 path where you want Amazon Braket to store the job training artifacts. For example, <code>s3://bucket-name/key-name-prefix</code>.</p>', 'S3DataSource$s3Uri' => '<p>Depending on the value specified for the <code>S3DataType</code>, identifies either a key name prefix or a manifest that locates the S3 data source.</p>', 'ScriptModeConfig$s3Uri' => '<p>The URI that specifies the S3 path to the Python script module that contains the training script used by an Amazon Braket job.</p>', ], ], 'ScriptModeConfig' => [ 'base' => '<p>Contains information about the Python scripts used for entry and by an Amazon Braket job.</p>', 'refs' => [ 'AlgorithmSpecification$scriptModeConfig' => '<p>Configures the paths to the Python scripts used for entry and training.</p>', ], ], 'SearchDevicesFilter' => [ 'base' => '<p>The filter to use for searching devices.</p>', 'refs' => [ 'SearchDevicesRequestFiltersList$member' => NULL, ], ], 'SearchDevicesFilterNameString' => [ 'base' => NULL, 'refs' => [ 'SearchDevicesFilter$name' => '<p>The name to use to filter results.</p>', ], ], 'SearchDevicesFilterValuesList' => [ 'base' => NULL, 'refs' => [ 'SearchDevicesFilter$values' => '<p>The values to use to filter results.</p>', ], ], 'SearchDevicesRequest' => [ 'base' => NULL, 'refs' => [], ], 'SearchDevicesRequestFiltersList' => [ 'base' => NULL, 'refs' => [ 'SearchDevicesRequest$filters' => '<p>The filter values to use to search for a device.</p>', ], ], 'SearchDevicesRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'SearchDevicesRequest$maxResults' => '<p>The maximum number of results to return in the response.</p>', ], ], 'SearchDevicesResponse' => [ 'base' => NULL, 'refs' => [], ], 'SearchJobsFilter' => [ 'base' => '<p>A filter used to search for Amazon Braket jobs.</p>', 'refs' => [ 'SearchJobsRequestFiltersList$member' => NULL, ], ], 'SearchJobsFilterOperator' => [ 'base' => NULL, 'refs' => [ 'SearchJobsFilter$operator' => '<p>An operator to use for the jobs filter.</p>', ], ], 'SearchJobsFilterValuesList' => [ 'base' => NULL, 'refs' => [ 'SearchJobsFilter$values' => '<p>The values to use for the jobs filter.</p>', ], ], 'SearchJobsRequest' => [ 'base' => NULL, 'refs' => [], ], 'SearchJobsRequestFiltersList' => [ 'base' => NULL, 'refs' => [ 'SearchJobsRequest$filters' => '<p>The filter values to use when searching for a job.</p>', ], ], 'SearchJobsRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'SearchJobsRequest$maxResults' => '<p>The maximum number of results to return in the response.</p>', ], ], 'SearchJobsResponse' => [ 'base' => NULL, 'refs' => [], ], 'SearchQuantumTasksFilter' => [ 'base' => '<p>A filter to use to search for tasks.</p>', 'refs' => [ 'SearchQuantumTasksRequestFiltersList$member' => NULL, ], ], 'SearchQuantumTasksFilterOperator' => [ 'base' => NULL, 'refs' => [ 'SearchQuantumTasksFilter$operator' => '<p>An operator to use in the filter.</p>', ], ], 'SearchQuantumTasksFilterValuesList' => [ 'base' => NULL, 'refs' => [ 'SearchQuantumTasksFilter$values' => '<p>The values to use for the filter.</p>', ], ], 'SearchQuantumTasksRequest' => [ 'base' => NULL, 'refs' => [], ], 'SearchQuantumTasksRequestFiltersList' => [ 'base' => NULL, 'refs' => [ 'SearchQuantumTasksRequest$filters' => '<p>Array of <code>SearchQuantumTasksFilter</code> objects.</p>', ], ], 'SearchQuantumTasksRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'SearchQuantumTasksRequest$maxResults' => '<p>Maximum number of results to return in the response.</p>', ], ], 'SearchQuantumTasksResponse' => [ 'base' => NULL, 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The request failed because a service quota is exceeded.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'ConflictException$message' => NULL, 'DeviceOfflineException$message' => NULL, 'DeviceQueueInfo$queueSize' => '<p>The number of jobs or tasks in the queue for a given device. </p>', 'DeviceRetiredException$message' => NULL, 'DeviceSummary$deviceName' => '<p>The name of the device.</p>', 'DeviceSummary$providerName' => '<p>The provider of the device.</p>', 'GetDeviceResponse$deviceName' => '<p>The name of the device.</p>', 'GetDeviceResponse$providerName' => '<p>The name of the partner company for the device.</p>', 'GetQuantumTaskResponse$failureReason' => '<p>The reason that a task failed.</p>', 'GetQuantumTaskResponse$outputS3Bucket' => '<p>The S3 bucket where task results are stored.</p>', 'GetQuantumTaskResponse$outputS3Directory' => '<p>The folder in the S3 bucket where task results are stored.</p>', 'HybridJobQueueInfo$message' => '<p>Optional. Provides more information about the queue position. For example, if the job is complete and no longer in the queue, the message field contains that information.</p>', 'HybridJobQueueInfo$position' => '<p>Current position of the job in the jobs queue.</p>', 'InternalServiceException$message' => NULL, 'JobSummary$jobName' => '<p>The name of the Amazon Braket job.</p>', 'ListTagsForResourceRequest$resourceArn' => '<p>Specify the <code>resourceArn</code> for the resource whose tags to display.</p>', 'QuantumTaskQueueInfo$message' => '<p>Optional. Provides more information about the queue position. For example, if the task is complete and no longer in the queue, the message field contains that information.</p>', 'QuantumTaskQueueInfo$position' => '<p>Current position of the task in the quantum tasks queue.</p>', 'QuantumTaskSummary$outputS3Bucket' => '<p>The S3 bucket where the task result file is stored..</p>', 'QuantumTaskSummary$outputS3Directory' => '<p>The folder in the S3 bucket where the task result file is stored.</p>', 'ResourceNotFoundException$message' => NULL, 'ScriptModeConfig$entryPoint' => '<p>The path to the Python script that serves as the entry point for an Amazon Braket job.</p>', 'SearchDevicesRequest$nextToken' => '<p>A token used for pagination of results returned in the response. Use the token returned from the previous request continue results where the previous request ended.</p>', 'SearchDevicesResponse$nextToken' => '<p>A token used for pagination of results, or null if there are no additional results. Use the token value in a subsequent request to continue results where the previous request ended.</p>', 'SearchJobsRequest$nextToken' => '<p>A token used for pagination of results returned in the response. Use the token returned from the previous request to continue results where the previous request ended.</p>', 'SearchJobsResponse$nextToken' => '<p>A token used for pagination of results, or <code>null</code> if there are no additional results. Use the token value in a subsequent request to continue results where the previous request ended.</p>', 'SearchQuantumTasksRequest$nextToken' => '<p>A token used for pagination of results returned in the response. Use the token returned from the previous request continue results where the previous request ended.</p>', 'SearchQuantumTasksResponse$nextToken' => '<p>A token used for pagination of results, or null if there are no additional results. Use the token value in a subsequent request to continue results where the previous request ended.</p>', 'ServiceQuotaExceededException$message' => NULL, 'TagKeys$member' => NULL, 'TagResourceRequest$resourceArn' => '<p>Specify the <code>resourceArn</code> of the resource to which a tag will be added.</p>', 'TagsMap$key' => NULL, 'TagsMap$value' => NULL, 'ThrottlingException$message' => NULL, 'UntagResourceRequest$resourceArn' => '<p>Specify the <code>resourceArn</code> for the resource from which to remove the tags.</p>', 'ValidationException$message' => NULL, ], ], 'String1024' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$failureReason' => '<p>A description of the reason why an Amazon Braket job failed, if it failed.</p>', ], ], 'String2048' => [ 'base' => NULL, 'refs' => [ 'JobOutputDataConfig$kmsKeyId' => '<p>The AWS Key Management Service (AWS KMS) key that Amazon Braket uses to encrypt the job training artifacts at rest using Amazon S3 server-side encryption.</p>', ], ], 'String256' => [ 'base' => NULL, 'refs' => [ 'DeviceConfig$device' => '<p>The primary quantum processing unit (QPU) or simulator used to create and run an Amazon Braket job.</p>', 'HyperParameters$key' => NULL, 'InputFileConfig$contentType' => '<p>The MIME type of the data.</p>', 'JobSummary$device' => '<p>Provides summary information about the primary device used by an Amazon Braket job.</p>', 'SearchDevicesFilterValuesList$member' => NULL, 'SearchJobsFilterValuesList$member' => NULL, 'SearchQuantumTasksFilterValuesList$member' => NULL, ], ], 'String4096' => [ 'base' => NULL, 'refs' => [ 'JobCheckpointConfig$localPath' => '<p>(Optional) The local directory where checkpoints are written. The default directory is <code>/opt/braket/checkpoints/</code>.</p>', ], ], 'String64' => [ 'base' => NULL, 'refs' => [ 'CancelQuantumTaskRequest$clientToken' => '<p>The client token associated with the request.</p>', 'CreateJobRequest$clientToken' => '<p>A unique token that guarantees that the call to this API is idempotent.</p>', 'CreateQuantumTaskRequest$clientToken' => '<p>The client token associated with the request.</p>', 'SearchJobsFilter$name' => '<p>The name to use for the jobs filter.</p>', 'SearchQuantumTasksFilter$name' => '<p>The name of the device used for the task.</p>', ], ], 'SyntheticTimestamp_date_time' => [ 'base' => NULL, 'refs' => [ 'GetJobResponse$createdAt' => '<p>The date and time that the Amazon Braket job was created.</p>', 'GetJobResponse$endedAt' => '<p>The date and time that the Amazon Braket job ended.</p>', 'GetJobResponse$startedAt' => '<p>The date and time that the Amazon Braket job was started.</p>', 'GetQuantumTaskResponse$createdAt' => '<p>The time at which the task was created.</p>', 'GetQuantumTaskResponse$endedAt' => '<p>The time at which the task ended.</p>', 'JobEventDetails$timeOfEvent' => '<p>TThe type of event that occurred related to the Amazon Braket job.</p>', 'JobSummary$createdAt' => '<p>The date and time that the Amazon Braket job was created.</p>', 'JobSummary$endedAt' => '<p>The date and time that the Amazon Braket job ended.</p>', 'JobSummary$startedAt' => '<p>The date and time that the Amazon Braket job was started.</p>', 'QuantumTaskSummary$createdAt' => '<p>The time at which the task was created.</p>', 'QuantumTaskSummary$endedAt' => '<p>The time at which the task finished.</p>', ], ], 'TagKeys' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>Specify the keys for the tags to remove from the resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagsMap' => [ 'base' => NULL, 'refs' => [ 'CreateJobRequest$tags' => '<p>A tag object that consists of a key and an optional value, used to manage metadata for Amazon Braket resources.</p>', 'CreateQuantumTaskRequest$tags' => '<p>Tags to be added to the quantum task you\'re creating.</p>', 'GetJobResponse$tags' => '<p>A tag object that consists of a key and an optional value, used to manage metadata for Amazon Braket resources.</p>', 'GetQuantumTaskResponse$tags' => '<p>The tags that belong to this task.</p>', 'JobSummary$tags' => '<p>A tag object that consists of a key and an optional value, used to manage metadata for Amazon Braket resources.</p>', 'ListTagsForResourceResponse$tags' => '<p>Displays the key, value pairs of tags associated with this resource.</p>', 'QuantumTaskSummary$tags' => '<p>Displays the key, value pairs of tags associated with this quantum task.</p>', 'TagResourceRequest$tags' => '<p>Specify the tags to add to the resource.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The throttling rate limit is met.</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Uri' => [ 'base' => NULL, 'refs' => [ 'ContainerImage$uri' => '<p>The URI locating the container image.</p>', ], ], 'ValidationException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an AWS service.</p>', 'refs' => [], ], ],];
