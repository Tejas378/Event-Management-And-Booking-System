
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="main.css"> 
        <link rel="stylesheet" type="text/css" href="header1.css">
    </head>

        <?php require 'head1.php'; 
           if(is_logged_in())
                {
                header('Location: http://localhost/aaa/index1.php');
                }
                else
                {
        ?><!--header content. file found in utils folder-->
        <body >
        <div class = "content"><!--body content holder-->
            <div style="padding-top: 14px;padding-bottom: 14x;margin-left: 57px;">
                <div><!--body content title holder with 12 grid columns-->
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>
            <hr>
            <div style="height: 382px;"><!--wedding content-->

                    <div class="container">
                        <div style="width: 50%; float:left;"><!--image holder with 6 grid columns-->
                            <img src="images/wedding2.jpg">
                        </div>
                        <div style="width: 50%;  float:left;"><!--Text holder with 6 column grid-->
                            <h1>Wedding</h1><!--title-->
                            <p class="pp"><!--content-->
                            The most important day in a couple's life.
                            Guaranteeing personalized solutions and flawless execution, our venues provide the perfect
                            location for your special day.
                            </p>
                             <hr style="margin-top: 149px;"><!--css modified horizontal line-->
                            <button type="button" class="bttn"><!--view event button (no function implemented)-->
                            View Events  
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
            </div><!--row div-->
			
           

		<div class="container">
                <hr>
            </div>
           
            <div style="height: 382px;">

                    <div class="container">
                        <div style="width: 50%; float:left;"><!--image holder with 6 grid columns-->
                            <img src="images/birthday2.jpg" >
                        </div>
                        <div style="width: 50%;  float:left;"><!--Text holder with 6 column grid-->
                            <h1>Birthday</h1><!--title-->
                            <p class="pp"><!--content-->
                            Whether an all-day or the ultimate extravaganza that
                            lasts well into the wee hours, our Urban Events team is here to make sure all your birthday
                            party wishes come true so you can kick back, drink up and enjoy your special day!
                            </p>
                             <hr style="margin-top: 149px;"><!--css modified horizontal line-->
                            <button type="button" class="bttn"><!--view event button (no function implemented)-->
                            View Events  
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->

            </div><!--row div-->
			
            <div class="container">
            <hr>
            </div>

            <div style="height: 382px;">

                    <div class="container">
                        <div style="width: 50%; float:left;">
                            <img src="images/fashion2.jpg">
                        </div>
				<div style="width: 50%;  float:left;">
                            <h1>Fashion</h1><!--title-->
                            <p class="pp"><!--content-->
                            Fast becoming to go-to location for fashion events, PR gatherings and product launches, 
                            The Urban Purveyor Group venues provide you with choice and quality in premium locations 
                            for all your event needs.
                            </p>
                           <hr style="margin-top: 149px;"><!--css modified horizontal line-->
                            <button type="button" class="bttn"><!--view event button (no function implemented)-->
                            View Events
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->

            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

             <div style="height: 382px;">
                    <div class="container">
                        <div style="width: 50%; float:left;"><!--image holder with 6 grid columns-->
                            <img src="images/meeting2.jpg">
                        </div>
                        <div style="width: 50%;  float:left;"><!--Text holder with 6 column grid-->
                            <h1>Meeting</h1><!--title-->
                           <p class="pp"><!--content-->
                            From formal, to not-so-formal, our flexible event
                            spaces can cater to your every need for meetings and conferences large or small, and our
                            dedicated event team can assist with all aspects of your event planning.
                            </p>
                            <hr style="margin-top: 149px;"><!--css modified horizontal line-->
                            <button type="button" class="bttn"><!--view event button (no function implemented)-->
                            View Events
                            </button> 
                        </div><!--subcontent div-->
                    </div><!--container div-->
            </div><!--row div-->
        </div><!--body content div-->
</div>
</body>
<?php }
require 'utils/footer.php'; ?>
</div>

</html>
