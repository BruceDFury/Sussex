<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM event WHERE event_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>