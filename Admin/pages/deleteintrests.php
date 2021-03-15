<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM intrest WHERE intrest_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>