<!DOCTYPE html>
<html>
<head>
<title>Manage Event With us...</title>
<link rel="stylesheet" type="text/css" href="usercss.css">
<style>
img
{
	margin-top:30px;
	height: 250px;
	width: 287px;
}

</style>
</head>
<body>
<?php
   	include "con.php"; 
?>
  <!-- Header -->
 <div style="height:38px;background-color:black;color:white; position: fixed; width: 100%;top: 0px;  ">
    <center><h2 style="margin-top :3px;">User Profile</h2></center>
 </div>

<div style = " margin-top:38px;">
  <div style="width:180px; height : 100% ; float:left; background-color : #111 ; position: fixed; ">
    <a href="user.php" class= "amenu" > Home</a>
    <a href="#" onclick="make('my1')"  class= "amenu"> Music Party </a>
    <a href="#" onclick="make('my2')" class= "amenu"> Theme Party </a>
    <a href="#" onclick="make('my4')" class= "amenu"> Workshop </a>
    <a href="#" onclick="make('my3')" class= "amenu"> Concert </a>

    <a href="logout.php" class= "amenu"> Logout</a>
  </div>

  	<div id = "my1" style="margin-left: 210px;  overflow : hidden ;">
	
	              <?php

                    	$a = pg_query("select * from music_event; ");
                    	$row=pg_fetch_row($a);
                         while ($row) 
                         {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> ' 
				                  		. ' <img src="images/wedding2.jpg"> '
				                  	     . ' </div> ';
				                  echo '   <div style="width: 66%;  float:left;"> <h1>  ' . $row[1] . ' </h1>  ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  echo '<h3> Status = ' . $row[3] . '</h3>';
				                  echo '<h3> Capacity = ' . $row[5] . '</h3> <br>';	
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."music_event".' \' )">Book</button> ' ;
				                  echo ' <hr> ' ;
							   echo ' </div> ' ;
                         echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>
 	 
	 <div id = "my2"  style=" display: none;  margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from theme_party ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          	echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1> ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Menus</h3>' . $row[3] . '<br>';
				                  echo '<h3> Cost  = ' . $row[5] . '</h3>';
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."theme_party".' \' )">Book</button> ' ;
				                  echo ' <hr> ' ;
							   echo ' </div> ' ;
			         		echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>

	
	<div id = "my3"  style=" display: none; margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from concert ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Cost = ' . $row[3] . '</h3>';
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."concert".' \' )">Book</button> ' ;
				                 echo ' <hr> ' ;
							  echo ' </div> ' ;
                                     echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
                    
	 <div id = "my4"  style=" display: none;  margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from workshop ; ");
                    	$row=pg_fetch_row($a);
                    	
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[2] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[3] . '</p>';                    
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."workshop".' \' )">Book</button> ' ;
				                 echo ' <hr> ' ;
							  echo ' </div> ' ;
                                     echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>

</div>	




<script>

function make(x)
{
	
  var mySidebar = document.getElementById(x);
      mySidebar.style.display = 'block';
  
   

    for (i = 1; i<5 ; i++) 
    {
    		var text = "my";
 		 	var a = text.concat(i) ;
 		 	
 		 	a = document.getElementById(a);
 		 	if (a !== mySidebar)
 		 	{
				a.style.display = 'none';
 		 	}
 		 
	} 

}
function gonext(y , z) 
{
	var e = "event";
	 document.cookie =  "tab=" +z ;
	 document.cookie =  "cat_id=" +y ;
	 document.cookie =  "type=" +e ;
	 window.location.href = "http://localhost/aaa/bookandpay.php?cid="+y;
}
</script>
</body>
</html>

