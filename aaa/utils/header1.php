<header class="bgImage" >
        <div style="height: 107px;">
                <?php 
                echo '<a href = "index.php" class = "navbar-brand eventtop" >
                    Event Management Systems
                </a> ';
                ?>
            <ul class="navbar-right"><!--navigation-->
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
                    echo '<li><a href = "#my">Home  |</a></li>';
                    echo '<li><a href = "events2.php">Events  |</a></li>';
                    echo '<li><a href = "locations2.php">Locations  |</a></li>';
                    echo '<li><a href = "contact.php">Contact Us  |</a></li>';
                    echo '<button type = "button" class = "btn " onclick = "Redirect();"> Login  |</button>';
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
<script type = "text/javascript">
         <!--
            function Redirect()
            {
               window.location = "http://localhost/ADMIN/login_form.php";
            }
         //-->
      </script>
</head>
