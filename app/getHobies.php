<?php


	/*define (DB_USER, "root");
	define (DB_PASSWORD, "");
	define (DB_DATABASE, "example");
	define (DB_HOST, "127.0.0.1");*/


	/*$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);*/

	$conn=mysqli_connect("localhost", "root", "","example");

	$sql = "SELECT name FROM tags WHERE name LIKE '%".$_GET['query']."%' LIMIT 10"; 


	//$result = $mysqli->query($sql);

	$result = mysqli_query($conn, $sql);

	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['name'];
	}


	echo json_encode($json);
?>