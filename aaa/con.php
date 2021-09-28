<?php
	
     $db_connection = pg_connect("host=localhost port=5432 dbname=tejas user=tejas password=Kunal@1");
	if(!$db_connection)
	
	{
		//header('Location: http://localhost/aaa/index1.php');
		//$a=echo "<script> alert('Unable to connect to database...!!! Please check the database credentials.'); </script> ";
		//if('<script> confirm("Unable to connect to database...!!! Please check the database credentials."); </script> ')
		echo ' <script type="text/javascript"> ';  
		echo '  if (confirm("Unable to connect to database...!!! Please check the database credentials.")) {';  
		echo '  window.location.href = " http://localhost/aaa/index1.php "; ';  
		echo '  } else {  window.location.href = " http://localhost/aaa/index1.php "; } ';  
		echo '</script>';  
		
	}
	/*echo "<br>";
	$result=pg_query("select * from users;");
	while ($row = pg_fetch_row($result)) 
	{
	echo "Name: $row[0] price: $row[2]";
	echo "<br>";
	}
	*/
?>
