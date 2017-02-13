<?php
$node = array('name'=>'Kunal',
			  'age'=>'30',
				'address'=>array('address1'=>'abc','address2'=>'abc2'),
				'gender' => 'm','company' =>'indianic','phone'=>array('tel1'=>'78778','tel2'=>'343434')
			);

echo "<pre>";
print_r($node);

foreach ($node as $key => $value) {
			// echo "<br/>";
			// echo $value;

	if($key=='address' || $key=="phone" ){

			foreach ($value as $key1 => $value1) {

				if($key1=="address1"){
					echo $value1;
				}
				# code...
			}
	}
	else{
		echo "<br/>";
			echo $value;

	}
	# code...
}

// $json = '{"college":[{"name":"cit","university":"csvtu","degree":"btech","location":"c.g"}],
// "subjects":[{"sub-1":"datastructure","sub-2":"java","sub-3":"c++","sub-4":"php"}],

// "students":[{"student-1":[{"name":"ashwini","age":"22","roll":"2233","position":"1"}], 
//              "student-2":[{"name":"naziya","age":"22","roll":"2233","position":"1"}],
//              "student-3":[{"name":"kunal","age":"80","roll":"2233","position":"0"}],
//              "student-4":[{"name":"shruti","age":"33","roll":"2233","position":"3"}],

//  "position":[{"pos-1":"1st","pos-2":"2nd","pos-3":"3rd","pos-4":"4th"}]
 


// }]
// }';


//  $data1= json_decode($json);

// $data = '{"marks":[{"marks-1":"179","marks-2":"342","marks-3":"544","marks_review":[{"marks-1":"334","marks-2":"46","marks-3":"33"}]}]}';

//  echo "<pre>";
//     $data = json_decode($data);
//     foreach($data1 as $key=>$value){
//     	$data1->marks = $data;
//     }
//  print_r($data1);
?>