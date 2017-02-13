<?php
$json = '{"detail":[{
"locations":[
	 {"company":"indianic","location":"iskon","city":"ahemdabad"},
	 {"company":"tcs","location":"gandhinagar","city":"ahemdabad"},
	 {"company":"kpit","location":"p.nagar","city":"delhi"},
	 {"company":"collebera","location":"africa","city":"uganda"}
	 ]

  }]
}';

echo "<pre>";
$data1 = json_decode($json);

$data = new stdclass;
$data->students['name'] = 'ashwini';
$data->students['age'] = '22';
$data->students['city'] = 'ahemdabad';
$data->students['address'] = 'address';


foreach ($data1 as $key => $value) {
	
	$data1->detail[]= $data;
	# code...
}



print_r($data1);
