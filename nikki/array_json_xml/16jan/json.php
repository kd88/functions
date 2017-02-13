<?php
$json = '{"school":"h.s.m public school","other":[{"class-1":[{"student":[{"name":"ashwini","age":"22","subject":"maths","marks":"34","other"
:[{"class-2":[{"student":[{"name":"manisha","age":"22","subject":"science","marks":"34" , "other":[{"class-3":[{"student":"kunal","age":"24","subject":"sanskrit",
"marks":"45"}] }] }] }] }] }] }] }]  }';
echo "<pre>";
print_r(json_decode($json));
?>