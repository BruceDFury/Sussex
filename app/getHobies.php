<?php
	require_once 'db_connector.php';

	$sql = "SELECT hobby_name FROM hobby WHERE hobby_name LIKE '%".$_GET['query']."%' LIMIT 10";

	$result = mysqli_query($conn, $sql);

	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['hobby_name'];
	}

	echo json_encode($json);
?>