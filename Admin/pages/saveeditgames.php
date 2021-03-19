<?php
// configuration
include('connect.php');

// new data
$id = $_POST['hobi'];
$a = $_POST['name'];
$b = $_POST['des'];

// query
$sql = "UPDATE game 
        SET game_name=?, game_description=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: games.php");

?>