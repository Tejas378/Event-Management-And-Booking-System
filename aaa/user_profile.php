<form  action="manageuserprofile.php" method = "POST">
	    <div class="container">
		 <h1>Profile</h1>
		 <hr>
		 <label for="name"><b>Full Name</b></label> <br>
		 <input type="text" placeholder="Enter Name" name="name" required><br><br>


		<label for="email"><b>Username</b></label><br>
		 <input type="text" placeholder="Enter username" name="uname" required><br> <br>



		  <label for="contact_number"><b>Contact number</b></label><br>
		 <input type="text" placeholder="Enter contact number" name="contact_number" minlength="10" maxlength="10" required><br><br>

		 <label for="email"><b>Email</b></label><br>
		 <input type="text" placeholder="Enter Email" name="email" required><br><br>

		 <label for="psw"><b>Password</b></label><br>
		 <input type="password" placeholder="Enter Password" name="psw" required><br><br>

		 <label for="psw-repeat"><b>Repeat Password</b></label><br>
		 <input type="password" placeholder="Repeat Password" name="psw_repeat" required><br><br><br>
		 
		 <div class="clearfix">
		    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		   <button type="Submit" class="signupbtn" name="Submit" value="Submit" >Update</button>
		 </div>
	    </div>
</form>


<?php
include('con.php');

if(isset($_POST['Submit']) && $_POST['Submit'] == "Submit")
{
if($_POST['name'] != "" && $_POST['contact_number'] != "" && $_POST['psw'] != "" &&$_POST['email'] != "" && $_POST['psw_repeat'] != "" && $_POST['uname'] != "")
{
$query = "SELECT uname, uemail FROM users WHERE  uname ='".$_POST['name'] . "' and uemail='".$_POST['email']."';";

$result = pg_query($query) or die("error to fetch database");

if(pg_num_rows($result))
{
	echo '<script> alert("<b>The User,  '. $_POST['name'] .'  is already in the database, please insert another.</b>"); </script>'; 
}
else
{
	$query = "INSERT INTO users (uusername, uname,upassword, ucno, uemail) VALUES ('". $_POST['name'] . "', '" .$_POST['uname'] . "', '" . $_POST['psw'] ."', '" . $_POST['contact_number'] . "', '" . $_POST['email']. "');";
	$result = pg_query($query) or die("Error while inserting");
}
}
}

?>
