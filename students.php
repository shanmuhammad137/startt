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
		<td><input type="text" name="s_name" value =""></td>
	</tr>
		
	<tr>
		<td align="right">School Name</td>
		<td><input type="text" name="s_school" value =""></td>
	</tr>
	
	<tr>
		<td align="right">Roll No.</td>
		<td><input type="text" name="roll_no" value =""></td>
	</tr>

	<tr>
		<td align="right">Marks</td>
		<td><input type="text" name="marks" value =""></td>
	</tr>

	<tr>
		<td align="right">Result</td>
		<td><input type="text" name="result" value =""></td>
	</tr>
		<tr>
		<td align="right">Email</td>
		<td><input type="text" name="s_email" value=""></td>
	</tr>

	<tr>
		<td align="right">Password</td>
		<td><input type="text" name="s_password" value=""></td>
	</tr>


	<tr>
		<td align="center" colspan="5"><a href="result.php"><input type="submit" name="submit" value="Submit Now" ></a></td>
	</tr>

	</table>
</form>

<h1 align="center"><?php echo @$_GET['deleted']; ?></h1>
<h1 align="center"><?php echo @$_GET['updated']; ?></h1>
<table width="800" border="5" align="center">
	<tr>
		<th>Serial No:</th>
		<th>Student Name:</th>
		<th>School Name:</th>
		<th>Roll No:</th>
		<th>Status</th>
		<th>Student Email</th>
		<th>Password</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>

<?php  
mysql_connect("localhost","root","");
mysql_select_db("school_students");
$query1 ="select * from crud";

$run = mysql_query($query1);

while ($row = mysql_fetch_array($run)) {

	$id=$row['id'];
	$s_name = $row['s_name'];
	$s_school =$row['s_school'];
	$roll_no = $row['roll_no'];
	$result= $row['result'];
	$s_email= $row['s_email'];
	$s_password= $row['s_password'];


?>


	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $s_name; ?></td>
		<td><?php echo $s_school; ?></td>
		<td><?php echo $roll_no; ?></td>
		<td><?php echo $result; ?></td>
		<td><?php echo $s_email; ?></td>
		<td><?php echo $s_password; ?></td>
		<td><a href= "delete.php?del=<?php echo $id; ?>"> Delete</a></td>
		<td><a href="edit.php?edit=<?php echo $id; ?>">Edit</a></td>
		
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
	$email = $_POST['s_email'];
	$password = $_POST['s_password'];

	$query = "insert into crud 
	(s_name,s_school,roll_no,result,s_email,s_password) values ('$name','$school','$roll','$result','$email','$password')";
mysql_query($query);
}
?>