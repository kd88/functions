<?php
$json = '{"software_company":[{
	"indianic":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	],
	"TCS":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	] ,
	"wipro":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}]},
	{"Employees":[{"Name":"kunal","age":"22","technology":"drupal"}]}
	] ,
	"cognizant":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"Employees":[{"Name":"manisha","age":"22","technology":"ios"}] } 
	],
	"capgemini":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"Employees":[{"Name":"manisha","age":"22","technology":"ios"}] } 
	] ,
	"sterlite":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"web-duniya":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"globus-soft":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"it-infotech":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"collebra":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] ,
	"amazon":[
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] },
	{"departments":[{"dep-1":"web","dep-2":"design","dep-3":"mvc"}] }
	] 
}] 
}';
echo "<pre>";
print_r(json_decode($json));

?>