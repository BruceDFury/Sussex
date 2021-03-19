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
	
	$_SESSION['title'] = $res[1];			
	$_SESSION['first_name'] = $res[2];
	$_SESSION['last_name'] = $res[3];
	$_SESSION['dob'] = $res[4];
	$_SESSION['nic'] = $res[5];
	$_SESSION['phone'] = $res[6];
	$_SESSION['email'] = $res[7];
	$_SESSION['personality_type'] = $res[9];
	$_SESSION['hobbies'] = $res[10];
	$_SESSION['games'] = $res[11];

    header("Location:/Sussex/app/dashboard.php"); 
}
else{
	$_SESSION['error'] = "Incorrect email or password";
    header("Location: /Sussex/app/login.php");
}

?>