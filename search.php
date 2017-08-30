<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
</head>
<body>

<form action="search.php" method="post">
	<table width="500" border="5" align="center">
	<tr>
		<td align="center" colspan="5">
			<h1>Search Student Record</h1>
		</td>
	</tr>

	<tr>
		<td align="right">Student ID:</td>
		<td><input type="text" name="id" value=""></td>
	</tr>

	<tr>
		<td align="right">Student Name:</td>
		<td><input type="text" name="name" value=""></td>
	</tr>



	<tr>
		<td align="center" colspan="5"><input type="submit" name="search" value="Search Now"></td>
	</tr>



	
</table>
</form>

<!-- 
<table width="800" border="5" align="center">
	<tr>
		<th>ID:</th>
		<th>Student Name:</th>
		<th>School Name:</th>
		<th>Roll No:</th>
		<th>Status</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
 -->
<!-- 
<form>
name:<input type="text" name="sname" value="<?php echo $sname;?>">	<br>
school:<input type="text" name="s_school" value="<?php echo $sschool;?>"><br>
roll:<input type="text" name="roll_no" value="<?php echo $roll;?>"><br>
result:<input type="text" name="result" value="<?php echo $result;?>"><br>

</form> -->




	
</form>

	<?php
	
		
	if (isset($_POST['search'])) {
		$id = $_POST['id'];
		$s_name =  $_POST['name'];
		mysql_connect("localhost","root","");
		mysql_select_db("school_students");
		$query ="select * from students where id =$id";
		$query = "select * from students where s_name = $s_name";


$run = mysql_query($query);

while ($row = mysql_fetch_array($run)) {

	$id=$row['id'];
	$s_name = $row['s_name'];
	$s_school =$row['s_school'];
	$roll_no = $row['roll_no'];
	$result= $row['result'];
	
	echo $id;
	echo "\r\n";
	echo $s_name;
	echo "\n";
	echo $s_school;
	echo "\n";
	echo $roll_no;
	echo "\n";
	echo $result;

}

		
}
	?>
<!-- 
	<?php
	
		
	if (isset($_POST['search'])) {
		$name = $_POST['s_name'];
		mysql_connect("localhost","root","");
		mysql_select_db("school_students");
		$query ="select * from students where s_name =$name";


$run = mysql_query($query);

while ($row = mysql_fetch_array($run)) {

	$id=$row['id'];
	$s_name = $row['s_name'];
	$s_school =$row['s_school'];
	$roll_no = $row['roll_no'];
	$result= $row['result'];
	
	echo $id;
	echo "\r\n";
	echo $s_name;
	echo "\n";
	echo $s_school;
	echo "\n";
	echo $roll_no;
	echo "\n";
	echo $result;

}

		
}
	?> -->


</body>
</html>