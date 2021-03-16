<?php
require_once 'header.php';

$email = $_POST['email'];
$pw = md5($_POST['password']);

//select qurey
$selectQuery = "SELECT * FROM member WHERE email = '$email' AND password = '$pw'";
$result = mysqli_query($conn,$selectQuery);
$recCount = mysqli_num_rows($result);

if ($recCount != null) {
	$res=mysqli_fetch_row($result);
				
	$_SESSION['name'] = $res[2];

    header("Location:/Sussex/app/dashboard.php"); 
}
else{
	$_SESSION['error'] = "Incorrect email or password";
    header("Location: /Sussex/app/login.php");
}

?>