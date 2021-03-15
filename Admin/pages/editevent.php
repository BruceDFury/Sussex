<?php
include('connect.php');
$id=$_GET['id'];
$result = $db->prepare("SELECT * FROM event WHERE id= :userid");
$result->bindParam(':userid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
	?>

	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- DataTables CSS -->
	<link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	<form action="saveeditcustomer.php" method="post" class = "form-group">
		<div id="ac">
			<input type="hidden" name="eventi" value="<?php echo $id; ?>" />
			<span>Name : </span><input type="text" name="name" class = "form-control" value="<?php echo $row['event_name']; ?>" />
			<span>Event StartDate : </span><input type="text" name="strtd" class = "form-control" value="<?php echo $row['event_startdate']; ?>" />
			<span>Event EndDate : </span><input type="text" name="endd" class = "form-control" value="<?php echo $row['event_enddate']; ?>" />
			<span>Event StartTime : </span><input type="text" name="strt" class = "form-control" value="<?php echo $row['event_starttime']; ?>" />
			<span>Event Desciption : </span><input type="text" name="des" class = "form-control" value="<?php echo $row['event_description']; ?>" />
			<span>Event Price : </span><input type="text" name="pri" class = "form-control" value="<?php echo $row['event_price']; ?>" />
			<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" class = "form-control" value="Update" />
		</div>
	</form>
	<?php
}
?>