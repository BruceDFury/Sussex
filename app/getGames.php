<?php
	require_once 'db_connector.php';

	$sql = "SELECT game_name FROM game WHERE game_name LIKE '%".$_GET['query']."%' LIMIT 10";

	$result = mysqli_query($conn, $sql);

	$json = [];
	while($row = $result->fetch_assoc()){
	     $json[] = $row['game_name'];
	}

	echo json_encode($json);
?>