<?php
session_start();
require_once 'header.php';

$title = $_POST['title'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$dob = $_POST['dob'];
$nic = $_POST['nic'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$cPassword = md5($_POST['cpassword']);
$favouriteActivity = $_POST['favouriteActivity'];
$personalityType = $_POST['personalityType'];
$hobies = $_POST['hobies'];

//select qurey
$selectQuery = "select * from member where email = '$email'";
$sresult = mysqli_query($conn,$selectQuery);
$recCount = mysqli_num_rows($sresult);

if ($recCount != null) {
	$_SESSION['error'] = "Given email is already exists!";
    header("Location:/Sussex/app/login.php"); 
}
else{

	if($password===$cPassword){

		$insrtQuery = "insert into member (title,firstName,lastName,dob,nic,phone,email,password,favouriteActivity,personalityType,hobies) values ('$title','$firstName','$lastName','$dob','$nic','$phone','$email','$password','$favouriteActivity','$personalityType','$hobies')";
		$resultReg = mysqli_query($conn,$insrtQuery);
		
		if (!$resultReg) 
		{
			$_SESSION['error'] = "Couldn't send to database!";
			header("Location:/Sussex/app/login.php");
		}
		else
		{
			$_SESSION['success'] = "success";
			$_SESSION['error'] = "Account Successfully created!";
			header("Location:/Sussex/app/login.php");
		}
	}
	else
	{
		$_SESSION['error'] = "Password and Confirm Password must be same!";
		header("Location:/Sussex/app/login.php");
		//echo "Password and Confirm Password must be same";
	}
}
?>