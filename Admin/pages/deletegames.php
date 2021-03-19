<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM game WHERE game_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>