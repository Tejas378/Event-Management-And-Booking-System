 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="usercss.css">
<style>
img
{
	margin-left:40px;
	margin-top:30px;
	height: 220px;
	width: 287px;
}
a
{
	color: white ;
}
a:hover
{
        color: black ;
    	text-decoration: underline;
    	font-size : 17px;
}
</style>
</head>


<?php

	 include "con.php";	 
	 session_start();
						$a = pg_query("select * from eventhall; ");
                    	$row=pg_fetch_row($a);
                         while ($row) 
                         {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> ' 
				                  		. ' <img src="images/wedding2.jpg"> '
				                  	     . ' </div> ';
				                  echo '<div style="width: 66%;  float:left;"> ';
				                  echo '  <h1> ' . $row[1] . ' </h1>  ';
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
                        $a = pg_query("select * from caterors ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          	echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
								  echo '<div style="width: 66%;  float:left;"> ';
				                  echo '  <h1> ' . $row[1] . ' </h1>  ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';                    
				                  echo '<h3> Menus</h3>' . $row[3] . '<br>';
				                  echo 'Cost  = ' . $row[5] . '</h3> <br>';
				                  echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."caterors".' \' )">Book</button> ' ;echo ' <hr> ';
							   echo ' </div> ' ;
			         		echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        $a = pg_query("select * from soundsystem ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          		  echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                   echo '<div style="width: 66%;  float:left;"> ';
				                  echo '  <h1> ' . $row[1] . ' </h1>  ';
				                  echo ' <p class="pp"> ' . $row[2] . '</p>';   
				                    echo '<h3> Status   = ' . $row[3] . '</h3>';                 
				                  echo '<h3> Cost = ' . $row[4] . '</h3>';
				      echo '<button class = "bttn w3-green" onclick = "gonext(\' '.$row[0].' \' , \' '."soundsystem".' \' )">Book</button> ' ;      echo ' <hr> ' ;
							  echo ' </div> ' ;
                                     echo ' </div> ' ;
                            $row=pg_fetch_row($a);
                        }
                        $a = pg_query("select * from decorators ; ");
                    	$row=pg_fetch_row($a);
                         while ($row)
                          {
                          echo ' <div> ';
				                  echo ' <div style="width: 32%; float:left;"> '
				                  		. ' <img src="images/wedding2.jpg" > '
				                  	     . ' </div> ';
				                   echo '<div style="width: 66%;  float:left;"> ';
				                  echo '  <h1> ' . $row[1] . ' </h1>  ';
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
</html>
