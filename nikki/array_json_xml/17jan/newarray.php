<?php
$node = array();
$node['status'] = array();
$node['status']['name'] = array();
$node['status']['name']['class'] = 1;
$node['status']['name']['company'] = 'indianic';
$node['status']['name']['tech'] = 'drupal';

foreach ($node as $key => $value) {
	print_r($value['company']);
 	# code...
 } 
echo "<pre>";
print_r($node);
?>