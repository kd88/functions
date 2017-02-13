<?php

echo "<pre>";
// function data($name,$age=0){

// 	$array = array();
// 	$array['name'] = $name;
// 	$array['age'] = $age;

// 	return $array;
// }

// $getData = data('ashwini',70);

// print_r($getData);


// function newdata($count){
// 	$new_array = array();
// 	for($i=0; $i<=$count; $i++){
// 		$new_array[$i] = $count;	
// 	}
//     return $new_array;
// }
// print_r(newdata(10));

$banner = array(
	          array(
	            "image" => "img.png",
	            "title" => "what we do"
	     	     ),
	          array(
	            "image" => "img.jpg",
	            "title" => "are you global"
	          	),
	          array(
	          	"image" => "img.png",
	          	"title" => "welcome to tivevan"
	          	),
		          array(
	          	"image" => "img.jpg",
	          	"title" => "our clients"
	          	),
	          array(
	          	"image" => "img.jpg",
	          	"title" => "our clients"
	          	)
		);

// echo "<pre>";
// print_r($banner);

function banner($count){

	$new_array = array();
	
	for($x=0; $x<=$count; $x++){
		$new_array[$x]['name'] = "ashwini";		
		$new_array[$x]['age'] = "34";		
	}
	return $new_array;
}

print_r(banner(0));


