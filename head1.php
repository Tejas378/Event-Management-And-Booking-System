<header>
        <div style="height: 107px;">
                <?php 
                  require 'utils/functions.php';
                 if(is_logged_in())
                {
                	  echo ' <div > ';	
                	  echo ' <div style = "float:left;"> ';
   					  echo '<img src="tej.jpeg" style="width:100px; height : 100px; border-radius: 50%; margin-left:30px;"> <br>';
   					  echo '<span> Welcome,<strong>Admin name</strong></span>';
   					  echo '</div> ';
                }
                else
                {
               		 echo '<a href = "index.php" class = " eventtop" >  Event Management Systems    </a> ';
				}
                ?>
            <ul class="navbar-right">
                <?php 
                if(is_logged_in())
                {
                    echo '<li><a href = "index1.php">Home  |</a></li>';
                    echo '<li><a href = "homepageevents.php">Events  |</a></li>';
                    echo '<li><a href = "homecategory.php">categories  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
 		    echo '<li><a href = "logout.php">Logout  |</a></li>';

                }  
                else 
                {
                    echo '<li><a href = "index.php">Home  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
                    echo '<li><a href = "signup.php">Sign Up|</a></li>';
                    echo '<li><a href = "login_form.php" style="padding-right: 0px;padding-left: 5px;margin-right: 19px;">Login |</a></li>';

                }
                echo ' </div > ';
                ?>
            </ul>
	</div><!--container div-->


            <div class = "jumbotron"><!--jumbotron-->
                <h1>Shree Events Venues & Catering</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                Whether you're looking to book a cocktail party, post-work gathering, celebratory function, conference, business
                meeting, wedding or private dining event, our dedicated Urban Events team can create a package that will meet
                your every need.
                </p>
            </div>
</header>

