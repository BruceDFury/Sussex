<?php
// configuration
include('connect.php');

// new data
$id = $_POST['hobi'];
$a = $_POST['name'];
$b = $_POST['des'];

// query
$sql = "UPDATE hobby 
        SET hobby_name=?, hobby_description=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: hobbies.php");

?>