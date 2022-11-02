<?php
// This file was auto-generated from sdk-root/src/data/ce/2017-10-25/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-cn-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'ce', 'signingRegion' => 'cn-northwest-1', ], ], ], 'url' => 'https://ce.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'aws-cn-global', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'name' => 'sigv4', 'signingName' => 'ce', 'signingRegion' => 'us-east-1', ], ], ], 'url' => 'https://ce.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'aws-global', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => true, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
