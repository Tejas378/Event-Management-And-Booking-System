<?php
	  include "con.php";
	   require 'utils/functions.php';
	   if(is_logged_in())
                {
				header("location:index1.php");
                }
                else
                {  
?>    
    
    <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Login Page </title>  
    <style>   
      span
      	  {
                color: red;
            } 
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: pink;  
    }  
    button {   
           background-color: #4CAF50;   
           width: 10%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;   
             }   
     form {   
            border: 3px solid #f1f1f1;   
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

     button:hover {   
            opacity: 0.7;   
        }   
      .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
         
     .container {   
            padding: 25px;   
            background-color: lightblue;  
        }   
    </style>   
    </head>    
    <body id="login_form">    
        <center> <h1>  Login   </h1> 
	  <form action="login_form.php" method="POST">	
               
                <label for="username">Username: </label>
                            <input type="text" name="username" required />    <br>
                          <small>  <span id="demo"></span></small>
                    <br>       
               <label for="password">Password: </label>
                            <input type="password" name="password"  required  />
                           
                <center><button type="submit">Login</button>      <br>
                <input type="checkbox" checked="checked"> Remember me   
                <button type="button" class="cancelbtn"> Cancel</button>   
                Forgot <a href="#"> password? </a>   
          </center>   
            </div>   
        </form>     
    </body>     
    </html>  
<?php


  session_start();
  $uname = $_POST['username'];
  $pswd = $_POST['password'];
    
  
        if (!empty($uname) && !empty($pswd))
        {
        
      
	     $res=pg_query("select * from users where uusername= '$uname'; ");
		$no=pg_num_rows($res);
		if($no==0)
		{

						echo '<script> alert("No User  found...!"); </script>'; 
		}
		else
		{
			     $a=pg_fetch_row($res);
			     if(strcmp($a[3],$pswd)==0)
			     {
			     	$_SESSION['user'] = $uname;
					header('Location: http://localhost/aaa/index1.php');
				}
				else
				{
				echo '<script> document.getElementById("demo").innerHTML = "Invalid Password "; </script>'; 
	           	}
		}
	}
}
?>

