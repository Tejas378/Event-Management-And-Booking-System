<?php

include "con.php";
session_start();

// try to register the user - if there are any error/
// exception, catch it and send the user back to the
// login form with an error message

   
    
	$formdata = array();
    $errors = array();

    $uname = $_POST['username'];
    $pswd = $_POST['password'];
    echo $uname;
    $res=pg_query("select * from users");
	$no=pg_num_fields($res);
	$b=pg_num_rows($res);
	echo $b;
	if($b==0)
	{
		//echo '<script>confirm("Invalid User...")</script>'; 
		$errors['user'] = "Invalid User";
		header('Location: http://localhost/ADMIN/login_form.php');
	}
	  if (empty($uname))
	  {
        $errors['username'] = "Username required";
       }
         if (empty($pswd)) 
         {
        $errors['password'] = "Password required";
	    }
		header('Location: http://localhost/ADMIN/login_form.php');
	while($a=pg_fetch_row($res))
	{

		for($i=0;$i<$no;$i++)
		{
			echo "   ".$a[$i]."   ";
		}

	}
    /*
    // throw an exception if any of the form fields 
    // are empty
    if (empty($uname)) {
        $errors['username'] = "Username required";
    }
    //$email = filter_var($uname, FILTER_VALIDATE_EMAIL);
    //if ($email != $uname) {
    //    $errors['username'] = "Valid email required required";
    //}

    if (empty($formdata['password'])) {
        $errors['password'] = "Password required";
    }
	if (empty($errors)) {
        // since none of the form fields were empty, 
        // store the form data in variables
        $username = $uname;
        $password = $formdata['password'];
   
   /* 
        $connection = DB::getConnection();
        $userTable = new UserTable($connection);
//        $user = $userTable->getUserByUsername($username);

 	$userTable = new tejas($connection);
        $user = $userTable->getUserByUsername($username);

        // since password fields match, see if the username
        // has already been registered - if it is then throw
        // and exception
        if ($user == null) {
            $errors['username'] = "Username is not registered";
        }
        else {
            if ($password !== $user->getPassword()) {
                $errors['password'] = "Password is incorrect";
            }
        }
    }
  
    
    if (!empty($errors)) 
    {
       require 'login_form.php';
    }
    else
    {
    // since the username is not aleady registered, create
    // a new User object, add it to the database using the
    // UserTable object, and store it in the session array
    // using the key 'user'
    $_SESSION['user'] = $user;
    
    // now the user is registered and logged in so redirect
    // them the their home page
    // Note the user is redirected to home.php rather than
    // requiring the home.php script at this point - this 
    // ensures that if the user refreshes the home page they
    // will not be resubmitting the login form.
    // 
    // require 'home.php';
   header('Location: http://localhost/ADMIN/index2.html');
	}
 */
    ?>
