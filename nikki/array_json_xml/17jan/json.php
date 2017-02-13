<?php
$json = '{"school":"h.s.m public school","class":[{"class-1":[{"student":[{"name":"ashwini","age":"22","subject":"maths","marks":"34" }] }],
"class-2":[{"student":[{"name":"ashwini","age":"22","subject":"maths","marks":"34" }] }], 
"class-3":[{"student":[{"name":"naziya","age":"22","subject":"chemistry","marks":"34" }] }],
"class-4":[{"student":[{"name":"shruti","age":"22","subject":"physics","marks":"34" }] }],
"class-5":[{"student":[{"name":"kunal","age":"28","subject":"science","marks":"34" }] }],
"class-6":[{"student":[{"name":"manisha","age":"28","subject":"maths","marks":"34" }] }]
}]  }';
echo "<pre>";
print_r(json_decode($json));


/*,"other"
:[{"class-2":[{"student":[{"name":"manisha","age":"22","subject":"science","marks":"34" , "other":[{"class-3":[{"student":"kunal","age":"24","subject":"sanskrit",
"marks":"45"}] }] }] }] }] }] }] }]  }';*/
?>
