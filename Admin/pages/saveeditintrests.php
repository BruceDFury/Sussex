<?php
// configuration
include('connect.php');

// new data
$id = $_POST['inti'];
$a = $_POST['name'];
$b = $_POST['des'];

// query
$sql = "UPDATE intrest 
        SET intrest_name=?, intrest_description=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: intrests.php");

?>