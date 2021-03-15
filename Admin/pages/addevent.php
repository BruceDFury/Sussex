
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<form action="saveevent.php" method="post" class = "form-group">
	<div id="ac">
		<span>Name : </span><input type="text" name="name" class = "form-control" />
		<span>Start Date : </span><input type="text" name="strdte" class = "form-control" />
		<span>End Date : </span><input type="text" name="enddte" class = "form-control" />
		<span>Start Time : </span><input type="text" name="strtme" class = "form-control" />
		<span>Event Description : </span><input type="text" name="des" class = "form-control" />
		<span>Event Price : </span><input type="text" name="price" class = "form-control" />
		<span>&nbsp;</span><input class="btn btn-primary btn-block" type="submit" value="save" class = "form-control" />
	</div>
</form>