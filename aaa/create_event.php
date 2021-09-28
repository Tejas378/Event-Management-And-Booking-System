<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<title>Manage Event With us...</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

<link rel="stylesheet" type="text/css" href="usercss.css">
<style>
	
body {font-family: Arial, Helvetica, sans-serif;}


img
{
	margin-top:30px;
	height: 250px;
	width: 287px;
}

input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;

}

.cancelbtn, .signupbtn {
  float: left;
  width: 20%;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  background-color: #474e5d;
  margin-left : 5px;
}

button:hover {
  opacity:5;
  background-color: green;
}
</style>
</head>  
  <div style="height:38px;background-color:black;color:white; position: fixed; width: 100%;top: 0px;  ">
    <center><h2 style="margin-top :3px";>User Profile</h2></center>
 </div>

<div style = " margin-top:37px;">

  <div style="width:190px; height : 100% ; float:left; background-color : #111 ; position: fixed; ">
    <a href="#" onclick="make('my1')"  class= "amenu" > Update Profile</a>
    <a href="#" onclick="make('my2')"  class= "amenu"> View My Orders  </a>
    <a href="#" onclick="make('my3')"  class= "amenu"> View Cancelled  Bookings </a>
    <a href="#" onclick="make('my4')"  class= "amenu"> My transactions </a>
    <a href="logout.php" class= "amenu"> Logout</a>
</div>

<div id = "my1" style=" margin-left: 210px;">
	
	   <?php require 'user_profile.php'; ?>
	   
</div>
 	 
<div id = "my2"  style=" display: none; margin-left: 210px; ">
	
	               <?php
	                   $bb = $_SESSION['user'];
                        $m = pg_query("select * from users where uusername ='$bb';");
                        $n = pg_fetch_row($m);
				    $b  = pg_query("select * from booking where userid = $n[0] ; ");
				    $row = pg_fetch_row($b);
                         while ($row)
                          {
                          	$a = pg_query("select * from events where eventid = $row[2] ; ");
                          	$row=pg_fetch_row($a);
                          	echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' <h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Menus</h3>' . $row[3] . '<br>';
				                  echo '<h3> Cost  = ' . $row[5] . '</h3>';
				                 echo " <b> Status =  Pending </b><br><br>";
				                 echo '<button onclick = "gonext()" class = "bttn w3-green">Cancel Booking</button> ' ;
				                  echo ' <hr> ' ;
							   echo ' </div> ' ;
			         		echo ' </div> ' ;
                            $row=pg_fetch_row($b);
                        }
                        
                    ?>
</div>

	
<div id = "my3"  style=" display: none; margin-left: 210px; ">
	
	                <?php
                    	include "con.php"; 
                    	$a = pg_query("select * from eventhall; ");
                    	$row=pg_fetch_row($a);
                         while ($row) {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> ' 
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' <h1>  ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  echo '<h3> Status = ' . $row[3] . '</h3>';
				                  echo '<h3> Capacity = ' . $row[5] . '</h3>';	
				                  echo " <b> <h3>Status =  Cancelled Booking Successfully</h3> </b><br><br>";
				                 // echo '<button class = "bttn w3-green" onclick = "gonext()">Book</button> ' ;
				                  echo ' <hr> ' ;
							   echo ' </div> ' ;
                         echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
</div>

<script>

function make(x)
{
  var mySidebar = document.getElementById(x);
      mySidebar.style.display = 'block';
  
   

    for (i = 1; i <5 ; i++) 
    {
    			var text = "my";
 		 	var a = text.concat(i) ;
 		 	
 		 	a = document.getElementById(a);
 		 	if (a === mySidebar)
 		 	{
 		 	text = text.concat(i) ;
 		 	}
 		 	else
 		 	{
 		 	a.style.display = 'none';
 		 	}
	} 

}

function gonext()
{	
	window.location = "http://localhost/aaa/bookandpay.php";
}
</script>



</body>
</html>

