<?php
// This file was auto-generated from sdk-root/src/data/sagemaker/2017-07-24/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-south-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-south-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-south-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-south-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.me-central-1.api.aws', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.me-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.me-central-1.api.aws', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.me-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ca-central-1.api.aws', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ca-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ca-central-1.api.aws', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ca-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-central-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-central-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-west-2.api.aws', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-west-2.api.aws', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.af-south-1.api.aws', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.af-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.af-south-1.api.aws', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.af-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-north-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-north-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-north-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-north-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-west-3.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-west-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-3.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-west-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.eu-west-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.eu-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.eu-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-northeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-northeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-northeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.me-south-1.api.aws', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.me-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.me-south-1.api.aws', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.me-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.sa-east-1.api.aws', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.sa-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.sa-east-1.api.aws', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.sa-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-east-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-east-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-southeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-southeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.ap-southeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-east-2.api.aws', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api-fips.sagemaker.us-east-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-east-2.api.aws', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-east-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => true, 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://api.sagemaker.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseFIPS' => false, 'UseDualStack' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => true, 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseFIPS' => false, 'UseDualStack' => true, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
