<head>
	<style>

header{
    height: 580px;
    background-image: url("images/bgImage1.jpg");
    background-size: cover;
    background-position: center center;
    margin-bottom: 29px;
    overflow: hidden;
}
.navbar-right
{
    float: right !important;
    margin-top: 25px;
    margin-bottom: 0px;
}
.eventtop
{
	margin-left: 37px;
	margin-top: 23px;
	height: 30px;
	width: 22%;
	text-decoration: underline;
}
li
{
    position: relative;
    display: block;
    float: left;
    
    
}
h4 {
    font-size: 20px;
}
a {
	color: white ;
	font-size: 16px;
	width: 100%;
	display: block;
     text-decoration:none;
    	float: left;
     padding: 10px 10px;

    
}


.jumbotron {
    font-size: 20px;
    background-color: transparent;
    color: #ecf0f1;
    text-align: center;
    margin-top: 144px;
    text-shadow: 2px 2px black;
}

	</style>
</head>
<header>
        <div style="height: 107px;">
                <?php 
                echo '<a href = "index.php" class = " eventtop" >  Event Management Systems    </a> ';
                 require 'utils/functions.php';
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
                    echo '<li><a href = "homepageevents.php">Events  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
                    echo '<li><a href = "signup.php">Sign Up|</a></li>';
                    echo '<li><a href = "login_form.php" style="padding-right: 0px;padding-left: 5px;margin-right: 19px;">Login |</a></li>';

                }
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

