<?php

$data = new stdClass;
$data->software_company['company_name'] = 'indianic';
$data->software_company['department'] = 'web';
$data->software_company['employees'][] = 'kunal';
$data->software_company['employees'][] = 'ashwini';
$data->software_company['employees'][] = 'manisha';
echo "<pre>";
print_r($data);
?>