
<head>
	<style>
.bgImage
{
    height: 600px;
    background-image: url("images/bgImage1.jpg");
    background-size: cover;
    background-position: center center;
    margin-bottom: 29px;
}
	</style>

<header class="bgImage">
        <div class="container" style="margin-left: 22px;padding-left: 15px;padding-top: 19px;">
            <div class="navbar-header" style="margin: 13px;"><!--website name/title-->
                <?php 
                require_once 'utils/functions.php';
                echo '<a href = "index1.php" class = "navbar-brand" style="margin-left: 0px;">
                    Event Management Systems
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home  |</a></li>';
                    echo '<li><a href = "viewEvents.php">Events  |</a></li>';
                    echo '<li><a href = "viewLocations.php">Locations  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
                    echo '<li><a href = "logout.php">Logout  |</span></a></li>';
                }  
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home  |</a></li>';
                    echo '<li><a href = "events2.php">Events  |</a></li>';
                    echo '<li><a href = "locations2.php">Locations  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
                    echo '<button type = "button" class = "btn " onclick = "Redirect();"> Login  |</button>';
                }
                ?>
            </ul>
</div><!--container div-->

    <div style="height: 232.6px; margin-top: 192px;">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>Shree Events Venues & Catering</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                Whether you're looking to book a cocktail party, post-work gathering, celebratory function, conference, business
                meeting, wedding or private dining event, our dedicated Urban Events team can create a package that will meet
                your every need.
                </p>
            </div>
    </div>
</header>
<script type = "text/javascript">
         <!--
            function Redirect()
            {
               window.location = "http://localhost/a/login_form.php";
            }
         //-->
      </script>
</head>
