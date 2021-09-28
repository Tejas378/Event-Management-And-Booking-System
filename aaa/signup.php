<!DOCTYPE html>
<html>  

<?php
include "con.php";
$name = $_POST["Name"];  
$uname = $_POST["Username"];  
$mobileno = $_POST["Mobile_no"];  
$password = $_POST["psw"];
$ErrMsg = " ";
$email = $_POST["Email"];  
if(isset($_POST['submit']) && $_POST['submit'] =="submit")
{
	  $query = "SELECT * FROM users WHERE  uusername ='$uname'; ";
	  $result = pg_query($query) or die("error to fetch database");
	  $queryyyy = "SELECT * FROM users WHERE  uemail ='$email'; ";
	  $resulttt = pg_query($queryyyy) or die("error to fetch database");
	  $cquery = "SELECT * FROM users WHERE  ucno ='$mobileno'; ";
	  $contact = pg_query($cquery) or die("error to fetch database");
	  if(pg_num_rows($result))
      {
	  	echo '<script> alert("The Username '. $_POST['Username'] .' is already exist , please enter another username...!!!"); </script>'; 
	  }
	  else if(pg_num_rows($resulttt))
	  {
	  	echo '<script> alert("The Email id '. $_POST['Email'] .' is already exist , please enter another Mail id ...!!!"); </script>'; 	  	
	  } 
	   else if(pg_num_rows($contact))
	  {
	  	echo '<script> alert("The Phone numbe '. $_POST['Email'] .' is already exist , please enter another phone numbetr...!!!"); </script>'; 	  	
	  } 
	  else
	  {
	  if (!preg_match ("/^[a-zA-z]*$/", $name) )  
	  {
	  		  $ErrMsg = "1......Only alphabets and whitespace are allowed in name Field........";  
	  }
	  if (!preg_match ("/^[a-zA-z0-9]*$/", $uname) )  
	  {
	  		  $ErrMsg = "1......Only alphabets and digits are allowed in username........";  
	  }
	  if (!preg_match ("/^[0-9]*$/", $mobileno) )
	  {
		    $ErrMsg .= "2......Only 10 digit numeric value is allowed as contact number......";  
	  }
	  $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
	  if (!preg_match ($pattern, $email) )
	  {  
    	$ErrMsg .= "3...........Email is not valid.";  
      }
	 if($ErrMsg == " ")
	 {
	 	$query = "insert into users( uusername , uname , upassword , ucno , uemail) VALUES ('$uname', '$name' , '$password' , '$mobileno' , '$email')";
	 	$result = pg_query($query);
	 	header('Location: http://localhost/aaa/login_form.php');
	 }
	 else
	 {
	 	 echo '<script> alert("'.$ErrMsg.'"); </script>'; 
	 }
	 }
}
?>

<head> <title>  SIGN-UP </title> 
<script>
function myFunction() {
               window.location = "http://localhost/aaa/";
}
</script>
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;

  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;

}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:5;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 50px;
}

.modal {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Modal Signup Form</h2>
<div id="id01" class="modal">
  <span onclick="location.href = 'http://localhost/aaa/' " class="close" title="Close Modal">&times;</span>
  <form  action="signup.php" class="modal-content" method = "POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Name" name="Name" required>
	 
	 <label for="name"><b>Username</b></label>
      <input type="text" placeholder="Enter Name" name="Username" required>

	<label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required>

	  <label for="contact_number"><b>Contact number</b></label>
      <input type="text" placeholder="Enter contact number" name="Mobile_no" minlength="10" maxlength="10" required>

	

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="myFunction() ;" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="submit" value="submit">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>

