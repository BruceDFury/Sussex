<?php
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['des'];

$sql = "INSERT INTO intrest (intrest_name,intrest_description) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: intrests.php");


?>