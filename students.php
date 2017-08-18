<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
</head>
<body>

<form action="students.php" method="post">
	<table width="500" border="5" align="center">
	<tr>
		<td align="center" colspan="5">
			<h1>Student Registration</h1>
		</td>
	</tr>

	<tr>
		<td align="right">Student Name:</td>
		<td><input type="text" name="s_name"></td>
	</tr>
		
	<tr>
		<td align="right">School Name</td>
		<td><input type="text" name="s_school"></td>
	</tr>
	
	<tr>
		<td align="right">Roll No.</td>
		<td><input type="text" name="roll_no"></td>
	</tr>

	<tr>
		<td align="right">Result</td>
		<td><input type="text" name="result"></td>
	</tr>

	<tr>
		<td align="center" colspan="5"><input type="submit" name="submit" value="Submit Now"></td>
	</tr>

	</table>

<table width="800" border="5" align="center">
	<tr>
		<th>Serial No:</th>
		<th>Student Name:</th>
		<th>School Name:</th>
		<th>Roll No:</th>
		<th>Status</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>

<?php  
mysql_connect("localhost","root","");
mysql_select_db("school_students");
$query1 ="select * from students";

$run = mysql_query($query1);

while ($row = mysql_fetch_array($run)) {

	$id=$row['id'];
	$s_name = $row['s_name'];
	$s_school =$row['s_school'];
	$roll_no = $row['roll_no'];
	$result= $row['result'];



?>


	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $s_name; ?></td>
		<td><?php echo $s_school; ?></td>
		<td><?php echo $roll_no; ?></td>
		<td><?php echo $result; ?></td>
		<td>Delete</td>
		<td>Edit</td>
		
	</tr>
	<?php
	}
	 ?>
</table>

</form>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("school_students");

if (isset($_POST['submit'])) {

	$name = $_POST['s_name'];
	$school = $_POST['s_school'];
	$roll = $_POST['roll_no'];
	$result = $_POST['result'];

	$query = "insert into students 
	(s_name,s_school,roll_no,result) values ('$name','$school','$roll','$result')";
mysql_query($query);
}
?>