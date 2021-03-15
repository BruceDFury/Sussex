<?php

$Name = $_POST['name'];
$Events = $_POST['events'];
$Members = $_POST['members'];

//Database COnnection
if(!empty($Name) && !empty($Events) $ !empty($Members)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "events";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if(mysqli_connect_error()){
		die('Connect Error('.mysqli_connect.errno().')'.mysqli_connect_error());
		
	}else{
		$SELECT Name from events Where Name =? Limit 1";
		$INSERT = "INSERT Into register (Name, Events, Members) values(?, ?, ?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt ->bind_param("s", $Name);
		$stmt -> execute();
		$stmt -> bind_result($Name);
		$stmt -> store_result();
		$rnum -> $stmt->num_rows;
		
		if($rnum==0){
			$stmt -> close();
			
			$stmt = $conn -> prepare($INSERT);
			$stmt -> bind_param("ssi", $Name, $Events, $Members);
			$stmt -> execute();
			echo "New record inserted successfully";
		}else{
			echo "Someone already inserted the below details";
		}
		$stmt->close();
		$conn->close();
	}
}else{
	echo "All field are required";
	die();
}

?>