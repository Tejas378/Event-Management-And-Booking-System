 <!DOCTYPE html>
<html>
<head>
<style>

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid black;
  border-radius: 3px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label 
{
  margin-bottom: 10px;
  display: block;
}



.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>


    <div class="container">
      <form action="bookandpay.php" method = "POST">

           <h3>Billing Details</h3> 
           <label for="name">Full Name</label> <br>
		 <input type="text" placeholder="Enter Name" name="name" required><br>

		 <label for="email">Email</label>
		 <input type="text" placeholder="Enter Email" name="email" required><br>

		 <label for="contact_number">Contact number</label>
		 <input type="text" placeholder="Enter contact number" name="contact_number" minlength="10" maxlength="10" required><br>

		<label for="email">Adress</label><br>
		 <input type="text" placeholder="Enter adress" name="adress" required><br>

	
           <label for="state">State</label>  <br>
           <input type="text" id="state" name="state" placeholder="NY"> <br>
          
           <label for="zip">Zip</label> <br>
           <input type="text" id="zip" name="zip" placeholder="10001"> <br>
                 
       <p>Please select payment methode </p>
		  <input type="radio" id="cod" name="radio" value="CashOnHand"> Cash On Hand<br>
		  <input type="radio" id="card" name="radio" value="DebitCreditCard">Debit / Credit Card<br><br>
		  
      <div id = "demo"  class="container" style = " display : none ;">       
           
				 
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" >

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" >

            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <label for="expyear">Exp Year</label>
            <input type="text" id="expyear" name="expyear" placeholder="2018">
            
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="352">
            
        </div>
            <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            
            <input type="submit" name = "Submit" value="Confirm" class="btn">
      </form>
      
    </div>
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    
</div> 

<?php
 session_start();

include('con.php');

if(isset($_POST['Submit']) && $_POST['Submit'] == "Confirm")
{
   if($_POST['name'] != "" && $_POST['contact_number'] != "" && $_POST['adress'] != "" &&$_POST['email'] != "" && $_POST['state'] != "" && $_POST['zip'] != "" )
	{
        if (isset($_POST['radio'])) 
	    {
	    			$username= $_SESSION['user'];
					$b = pg_query("select * from users where uusername = '$username' ; ");
				    $row = pg_fetch_row($b);
				    $type =$_COOKIE["type"];
				  
				    $catid = -1;
				    $evtid = -1;
				    if($type=="event")
				    {
						$evtid=$_COOKIE["cat_id"];
					}
					else
					{
						$catid=$_COOKIE["cat_id"];
					}
					$c = $_POST["name"];
					$d = $_POST["contact_number"];
					$e = $_POST["email"];
					$f = $_POST["adress"];
					$g = $_POST["state"];
					$h = $_POST["zip"];
					$tab_name=$_COOKIE["tab"];
					
			if ($_POST['radio']=="DebitCreditCard") 
			{
				if (empty($_POST["cardname"]) || empty($_POST["cardnumber"]) || empty($_POST["expmonth"]) || empty($_POST["expyear"]) || empty($_POST["cvv"]) )
				{
					echo '<script>alert("Please Fill All payment Details First...!")</script>';			
				}
				else
				{
										
				  	$query = "INSERT INTO booking ( tab_name , cid , eventid  , userid , booker_name , booker_cno , booker_mail , booker_adress , booker_state , booker_zip   ) VALUES ('$tab_name',$catid,$evtid,'$row[0]', '$c' , '$d','$e','$f' , '$g','$h');";
			          $result = pg_query($query) or die("<script>alert('$a,$catid,$evtid, $c , $d ,$e,$f,$g,$h')</script>");
					echo '<script>alert("Last... All The Details are accepted...!")</script>';			
				}
		 	}
			else
			{
					$query = "INSERT INTO booking ( tab_name , cid , eventid  , userid , booker_name , booker_cno , booker_mail , booker_adress , booker_state , booker_zip   ) VALUES ('$tab_name', $catid , $evtid ,'$row[0]', '$c' , '$d','$e','$f' , '$g','$h');";
			          $result = pg_query($query) or die("<script> alert('Error')</script>");
				echo '<script>alert("Payment successful...!")</script>';			
			}
		//echo '<script>alert("Radio button selected")</script>';
		//echo '<script> alert("<b>The User,  '. $_POST['name'] .'  is already in the database, please insert another.</b>"); </script>'; 
	    }
	  else
	    {
			echo '<script>alert("2 ..Please select the Payment methode ")</script>';
		//$query = "INSERT INTO users (uusername, uname,upassword, ucno, uemail) VALUES ('". $_POST['name'] . "', '" .$_POST['uname'] . "', '" . $_POST['psw'] ."', '" . $_POST['contact_number'] . "', '" . $_POST['email']. "');";
		// $result = pg_query($query) or die("Error while inserting");
	   }
	}
	else
	{
		echo '<script>alert("1..Please Fill All The Details First...!")</script>';
	}
}

?>


 <script type="text/javascript">

document.getElementById("card").addEventListener("click", myFunction);
document.getElementById("cod").addEventListener("click", mFunction);
function myFunction()
{
  document.getElementById("demo").style.display = 'block';
}
function mFunction()
{
  document.getElementById("demo").style.display = 'none';
}
</script>

<?php
//	echo '<script> var c = document.cookie; var ca = allcookies.split(\';\'); ';	
//	echo ' var name = cookiearray[i].split(\'=\')[0];';

	 echo $_GET["uid"];
	 echo "Table ame" .$_COOKIE["tab"];
?>
</html>

