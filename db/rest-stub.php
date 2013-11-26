<?php
$http = $_SERVER['REQUEST_METHOD'];
if($http == 'GET') {
	$json = '[
		{"id":1,"name":"Moe","winner":false},
		{"id":2,"name":"Curly","winner":false},
		{"id":3,"name":"Larry","winner":false},
		{"id":4,"name":"Tony","winner":false}
	]';
	header("Content-type: text/json");
	echo($json);
}
?>