<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM hobby WHERE hobby_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>