<html>
      <form action="demo.php" method = "POST">
      	  <input type="radio" id="cod" name="radio" value="Cash On Hand"> Cash On Hand<br>
		  <input type="radio" id="card" name="radio" value="Debit / Credit Card">Debit / Credit Card<br><br>
		   <input type="Submit" value="Confirm" class="btn">
	</form>
<html>
<?ph
	
	if (isset($_POST['radio'])) 
	
{
	echo '<script>alert("Radio button selected")</script>';
	//echo '<script> alert("<b>The User,  '. $_POST['name'] .'  is already in the database, please insert another.</b>"); </script>'; 
}
	
?>
