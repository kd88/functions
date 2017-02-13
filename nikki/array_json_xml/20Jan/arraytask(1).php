<?php
echo "<pre>";
mysql_connect('localhost','root','') or die("connection error");
mysql_select_db('learning') or die("db error");
$query = "SELECT * FROM student";
$exe = mysql_query($query);
$node = array();
$count=0;


while($fetch= mysql_fetch_assoc($exe)){
	$pos= 'position-'.$fetch['positions'];

	$node['details'][$pos][$count]['name'] = $fetch['name'];
	$node['details'][$pos][$count]['roll'] = $fetch['roll'];
	$node['details'][$pos][$count]['class'] = $fetch['class'];
	$node['details'][$pos][$count]['position'] = $fetch['positions'];
	$count++;
}
print_r($node);

?>