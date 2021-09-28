
<!DOCTYPE html>
<html>
<head>
<title>Manage Event With us  !!!</title>
<link rel="stylesheet" type="text/css" href="usercss.css">
<style>
	img
{
	margin-top:30px;
	height: 220px;
	width: 287px;
}

</style>
</head>

<?php
	 include "con.php"; 
	 session_start();
?>
  <!-- Header -->
 <div style="height:38px;background-color:black;color:white; position: fixed; width: 100%;top: 0px;  ">
    <center><h2 style="margin-top :3px; ">User Panel</h2></center>
 </div>

<div style = " margin-top:38px;">
  <div style="width:180px; height : 100% ; float:left; background-color : #111 ; position: fixed; ">
    <a href="index.php" class= "amenu" > Home</a>
    <a href="#" onclick="make('my1')" class= "amenu"> Weeding Halls </a>
    <a href="#" onclick="make('my2')" class= "amenu"> Caterors </a>
    <a href="#" onclick="make('my3')" class= "amenu"> Sound Systems </a>
    <a href="#" onclick="make('my4')" class= "amenu"> Decorators </a>
    <a href="#" onclick="make('my5')" class= "amenu"> Designers </a>
    <a href="logout.php" class= "amenu"> Logout</a>
  </div>

  	<div id = "my1" style="margin-left: 210px;  overflow : hidden ;">
	
	               <?php

                    	$a = pg_query("select * from eventhall; ");
                    	$row=pg_fetch_row($a);
                         while ($row) 
                         {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> ' 
				                  		. ' <img src="images/wedding2.jpg"> '
				                  	     . ' </div> ';
				                  echo '   <div style="width: 66%;  float:left;"> <h1> ' . $row[1] . ' </h1>  ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  echo '<h3> Status = ' . $row[3] . '</h3>';
				                  echo '<h3> Capacity = ' . $row[5] . '</h3> <br>';	
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."eventhall".' \' )">Book</button> ' ;
				                  echo ' <hr> ' ;
							   echo ' </div> ' ;
                         echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>
 	 
	 <div id = "my2"  style=" display: none;  margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from caterors ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          	echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Menus</h3>' . $row[3] . '<br>';
				                  echo 'Cost  = ' . $row[5] . '</h3> <br>';
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."caterors".' \' )">Book</button> ' ;echo ' <hr> ';
							   echo ' </div> ' ;
			         		echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>

	
	<div id = "my3"  style=" display: none; margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from soundsystem ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';   
				                    echo '<h3> Status   = ' . $row[3] . '</h3>';                 
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				      echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."soundsystem".' \' )">Book</button> ' ;      echo ' <hr> ' ;
							  echo ' </div> ' ;
                                     echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>
 	 <div id = "my4"  style=" display: none; margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from decorators ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';   
				                    echo '<h3> Status   = ' . $row[3] . '</h3>';                 
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  
 							  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."decorators".' \' )">Book</button> ' ;
				                 echo ' <hr> ' ;
							  echo ' </div> ' ;
                                     echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        
                    ?>
 	 </div>
 	 <div id = "my5"  style=" display: none; margin-left: 210px; overflow : hidden ; ">
	
	               <?php
                    	$a = pg_query("select * from designers ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;">  <h1> ' . $row[1] . ' </h1>   ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';   
				                    echo '<h3> Status   = ' . $row[3] . '</h3>';                 
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				                  
							  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."designers".' \' )">Book</button> ' ;
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
  
   

    for (i = 1; i <=5 ; i++) 
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
function gonext(y , x) 
{
	 var e = "category";
	 document.cookie =  "cat_id=" +y ;
	 document.cookie =  "tab=" +x ;
	 document.cookie =  "type=" +e ;
	 window.location.href = "http://localhost/aaa/bookandpay.php?uid="+y;
}
</script>
</html>
<?php

 session_close();

?>

