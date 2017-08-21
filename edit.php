
<?php 
mysql_connect("localhost","root","");
mysql_select_db("school_students");

$edit_record = @$_GET['edit'];

$query = "select * from students where id='$edit_record'";

$run = mysql_query($query);

while ($row=mysql_fetch_array($run)) {
	
		$editid = $row['id'];

	$sname= $row['s_name'];
	$sschool= $row['s_school'];
	$roll= $row['roll_no'];
	$result= $row['result'];
	
}

 ?>

<html>
<head>
	<title>Student Data</title>
</head>
<body>

<form action="edit.php?edit_id=<?php echo $editid; ?>";" method="GET">
<input type="hidden" name="edit_id" value="<?php echo $editid; ?>">
	<table width="500" border="5" align="center">
	<tr>
		<td align="center" colspan="5">
			<h1>Updating Records</h1>
		</td>
	</tr>

	<tr>
		<td align="right">Student Name:</td>
		<td><input type="text" name="s_name" value="<?php  echo $sname; ?>"></td>
	</tr>
		
	<tr>
		<td align="right">School Name</td>
		<td><input type="text" name="s_school" value="<?php echo $sschool;?>"></td>
	</tr>
	
	<tr>
		<td align="right">Roll No.</td>
		<td><input type="text" name="roll_no" value="<?php echo $roll;?>"></td>
	</tr>

	<tr>
		<td align="right">Result</td>
		<td><input type="text" name="result" value="<?php echo $result;?>"></td>
	</tr>

	<tr>
		<td align="center" colspan="5"><input type="submit" name="submit" value="Update Now"></td>
	</tr>

	</table>
</form>
</body>
</html>

<?php

mysql_connect("localhost","root","");
mysql_select_db("school_students");

	

if (isset($_GET['submit'])) {
	
	$ediid = $_GET['edit_id'];

	echo $ediid;


	$name = $_GET['s_name'];
	$school = $_GET['s_school'];
	$roll = $_GET['roll_no'];
	$result = $_GET['result'];

	$query1 = "update students set s_name= '$name',s_school= '$school', roll_no='$roll',result='$result' where id = '$ediid'";



if (mysql_query($query1)) {
	
	header("location: students.php?updated=Data has been updated..");
}
}


?>