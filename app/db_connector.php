<?php
$conn=mysqli_connect("localhost", "root", "","sussex");
if (!$conn)
{
   die('Could not Connect MySql:' .mysql_error());
}
/*or
	die("Cannot connect to the database !". mysql_error());*/
/*mysql_select_db("lamsp") or
	die("Cannot connect to company  DB !");*/
?>
