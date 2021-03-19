<?php
// configuration
include('connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['dob'];
$d = $_POST['nic'];
$e = $_POST['phone'];
$f = $_POST['email'];
$g = $_POST['pass'];
$h = $_POST['fa'];
$i = $_POST['pt'];
$j = $_POST['hob'];
// query
$sql = "UPDATE member 
        SET firstName=?,lastName=?, dob=?, nic=?,phone=?,email=?,password=?,favouriteActivity=?,personalityType=?,hobies=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$id));
header("location: member.php");

?>