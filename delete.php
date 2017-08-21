<?php

mysql_connect("localhost","root","");
mysql_select_db("school_students");

$delete_id = $_GET['del'];

$query = "delete from students where id='$delete_id'";

if (mysql_query($query)) {
	echo "<script> window.open ('students.php?delted =data has been deleted...','_self')</script>";
}

?>