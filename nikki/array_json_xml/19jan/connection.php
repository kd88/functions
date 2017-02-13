<?php
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");

echo "<pre>";

$query = "SELECT * FROM student";
$student_exe = mysql_query($query);
$node = array();

while ($fetch_student = mysql_fetch_assoc($student_exe)) {

	$node['detail'][$fetch_student['roll']]['name'] = $fetch_student['name'];
	$node['detail'][$fetch_student['roll']]['age'] = $fetch_student['age'];
	$node['detail'][$fetch_student['roll']]['roll'] = $fetch_student['roll'];
	$node['detail'][$fetch_student['roll']]['class'] = $fetch_student['class'];

}

print_r($node);
// $get_user_query = mysql_query("select * from user"); 

// echo "<pre>";

// $newarray = array();

// while ($get_user_fetch = mysql_fetch_assoc($get_user_query)) {

// // print_r($get_user_fetch['user']);

// 	$newarray['details'][$get_user_fetch['username']]['user_information']['name'] = $get_user_fetch['sp_name'];
//     $newarray['details'][$get_user_fetch['username']]['user_information']['city'] = $get_user_fetch['city'];
//     $newarray['details'][$get_user_fetch['username']]['user_information']['police_range'] = $get_user_fetch['police_range'];
// 	$newarray['details'][$get_user_fetch['username']]['user_information']['order_districts'] = $get_user_fetch['order_districts'];
// 	$newarray['details'][$get_user_fetch['username']]['login_info'][] = $get_user_fetch['username'];
// 	$newarray['details'][$get_user_fetch['username']]['login_info'][] = $get_user_fetch['password'];

// }



// $get_node_query = mysql_query("select * from node"); 
// $node_new_array = array();
// while ($get_node_fetch = mysql_fetch_assoc($get_node_query)) {

// // echo "<pre>";
// // print_r($get_node_fetch);
// // echo "</pre>";

// $node_new_array['node'][$get_node_fetch['type']]['title'][] = $get_node_fetch['title'];
// $node_new_array['node'][$get_node_fetch['type']]['language'][] = $get_node_fetch['language'];
// $node_new_array['node'][$get_node_fetch['type']]['uid'][] = $get_node_fetch['uid'];
// $node_new_array['node'][$get_node_fetch['type']]['nid'][] = $get_node_fetch['nid'];

// }

// print_r($newarray);	