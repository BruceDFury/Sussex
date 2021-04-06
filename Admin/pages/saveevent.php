<?php
session_start();
include('connect.php');

if(isset($_POST['submit'])){
$a = $_POST['name'];
$b = $_POST['strdte'];
$c = $_POST['enddte'];

$e = $_POST['des'];

$f = $_POST['price'];
$g = $_FILES['photo']['name'];
$h = $_FILES['photo']['tmp_name'];
$i = $_POST['status'];
$folder = 'img/'.$g;

if (move_uploaded_file($h, $folder))  {
			echo "Success";
				
			}else{
				echo "fail";
			}		
$sql = "INSERT INTO event (event_name,event_startdate,event_enddate,event_description,event_price,photo,event_status) VALUES (:a,:b,:c,:e,:f,:g,:i)";
$q = $db->prepare($sql);

$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':e'=>$e,':f'=>$f,':g'=>$g,':i'=>$i));
header("location: event.php");
}

?>