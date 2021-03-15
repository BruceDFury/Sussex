<?php
// configuration
include('connect.php');

// new data
$id = $_POST['eventi'];
$a = $_POST['name'];
$b = $_POST['strtd'];
$c = $_POST['endd'];
$d = $_POST['strtt'];
$e = $_POST['des'];
$f = $_POST['pri'];
// query
$sql = "UPDATE event 
        SET event_name=?, event_startdate=?, event_enddate=?, event_starttime=?,event_description=?,event_price=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: customer.php");

?>