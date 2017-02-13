<?php
$json = '{
  "Meet": [{
    "title": "john",
    "designation": "abc"
  }, {
    "title": "john2",
    "designation": "abc1"
  }]
}';


echo "<pre>";
print_r(json_decode($json));

$array_meet = array(
    'meet' => 
      [0]=>array(
        'title' =>'john'
      ),
  );
?>
