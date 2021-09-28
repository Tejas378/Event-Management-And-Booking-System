<?php
include "con.php";
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<h1>Insert Student Information</h1>
<?php
if(isset($_POST['submit']) && $_POST['submit'] == "Insert")
{
if($_POST['name'] != "" && $_POST['roll_no'] != "" && $_POST['address'] != "" &&$_POST['email'] != "" && $_POST['class'] != "")
{
$query = "SELECT name, email FROM student WHERE  name='".$_POST['name'] . "' and email='".$_POST['email']."';";

$result = pg_query($conn, $query) or die(pg_last_error($conn));

if(pg_num_rows($result))
{
?>
<p>
<font color="#FF0000"><b>The Student,<?php echo $_POST['name']; ?>, is already in the database, please insert another.</b></font>
<form action="insert_student.php" method="post">

Name: <input type="text" name="name" value="<?php echo $_POST['name']; ?>"><br>

Roll No: <input type="text" name="roll_no" value="<?php echo $_POST['roll_no']; ?>"><br>

Address: <input type="text" name="address" value="<?php echo $_POST['address']; ?>"><br>

Email: <input type="text" name="email" value="<?php echo $_POST['email']; ?>"><br>

Class: <input type="text" name="class" value="<?php echo $_POST['class']; ?>"><br>
<br><br>
<button type="submit" name="submit" value="Insert"> &nbsp; <input type="reset" value="Clear">
</form>
</p>
<?php
}
else
{
$query = "INSERT INTO student(name, roll_no,address, email, class) VALUES ('". $_POST['name'] . "', '" .$_POST['roll_no'] . "', '" . $_POST['address'] ."', '" . $_POST['email'] . "', '" . $_POST['class']. "');";
$result = pg_query($conn, $query) or
die(pg_last_error($conn));
?>
<p>
Record inserted successfully.<br>
9<a href="view_student.php">View Records</a>
<?php
}
}
else
{
?>
<p>
<font color="#FF0000"><b>The Name, Roll No, Address, Email, Class fields are required</b></font>

<form action="insert_student.php" method="post">

Name: <input type="text" name="name" value="<?php echo $_POST['name']; ?>"><br>

Roll No: <input type="text" name="roll_no" value="<?php echo $_POST['roll_no']; ?>"><br>

Address: <input type="text" name="address" value="<?php echo $_POST['address']; ?>"><br>

Email: <input type="text" name="email" value="<?php echo $_POST['email']; ?>"><br>

Class: <input type="text" name="class" value="<?php echo $_POST['class']; ?>"><br>

<br><br>
<input type="submit" name="submit" value="Insert"> &nbsp; <input type="reset" value="Clear">
</form>
</p>
<a href="view_student.php">View Records</a>
<?php
}
}
else
{
?>
<p>
The Username, Password, Email, First Name, Last Name fields are required!

<form action="insert_student.php" method="post">

Name: <input type="text" name="name"><br> 
Roll No: <input type="text" name="roll_no"><br>
Address: <input type="text" name="address"><br>
Email: <input type="text" name="email"><br>
Class: <input type="text" name="class"><br>
<br><br>

10<input type="submit" name="submit" value="Insert">
&nbsp;
<input type="reset" value="Clear">
</form>
</p>
<a href="view_student.php">View Records</a>
<?php
}
?>
</body>
</html>
