<?php
session_start();
include('connect.php');
$a = $_POST['name'];
$b = $_POST['strdte'];
$c = $_POST['enddte'];
$d = $_POST['strtme'];
$e = $_POST['des'];
$f = $_POST['price'];
// query
$sql = "INSERT INTO event (event_name,event_startdate,event_enddate,event_starttime,event_description,event_price) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: customer.php");


?>