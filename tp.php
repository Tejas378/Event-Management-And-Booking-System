
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<div style="height:120px;">
<div class="w3-container" style="width:220px;background-color:red; float: left; margin-top: -20px;">
    <div>
      <img src="tej.jpeg" class="w3-circle" style="width:46px">
    </div>
    <div>
      <span>Welcome,<strong>Admin name</strong></span><br>
      <a href="#" class=" icn "><img src="images/mail.png" class="icn"></img></a>
      <a href="#" class=" icn "><img src="images/fb.png" class="icn"></img></a>
      <a href="#" class="  icn "><img src="images/tejj.png" class="icn"></img></a>
    </div>
</div>

<!-- Sidebar/menu -->

  <!-- Top container -->




 	<h1 style="background-color:pink;width:405px;margin-left:500px;">
    	Shree Sai Decoraters
    	</h1>

 </div>

  <!-- Header -->
  <div style="height:50px;background-color:black;color:white;">
  <div style="float:left; font-size:28px; height: 1.5px;">
  	 <button class=" w3-button " onclick="w3_open();"><b>Menu</b></button>
  </div>
  <div style=" margin-left: 45%;">
    <h1><b>Dashboard</b></h1>
  </div>

</div>

  <!-- Top container -->
  <div id="mySidebar" style="width:145px;float:left; ">
    <a href="tp.php" > Home</a>
    <a href="#" > Profile</a>
    <a href="#" >Contact</a>
    <a href="#" > Event</a>
    <a href="#" > Category</a>
    <a href="#" > Settings</a>
    <a href="logout.php" > Logout</a>

</div>

  <div style="margin-top:12px; margin-left: 213px; height: 207px;">
    <div class="w3-quarter w3-red">

        <h4>Registered Users</h4>

    </div>
    <div class="w3-quarter w3-blue">
       
        <h4>Events</h4>
    </div>
    <div class="w3-quarter w3-teal">

    
        <h4>Categories(to manage event)</h4>
    </div>
    <div class="w3-quarter w3-orange">

        <h4>All bookings</h4>

    </div>
  </div>
  <div style="margin-top:0px; margin-left: 213px; height: 237px;">
    <div class="w3-quarter w3-red">

        <h4>Profile</h4>

    </div>
    <div class="w3-quarter w3-blue">
       
        <h4>Setting(website)</h4>
    </div>
    <div class="w3-quarter w3-teal">

    
        <h4>New Booking Requests
    </div>
   
  </div>

</div>
 </div>

<script>

var mySidebar = document.getElementById("mySidebar");
function w3_open()
{
  if (mySidebar.style.display === 'block') 
  {
    mySidebar.style.display = 'none';
  }
  else
  {
    mySidebar.style.display = 'block';
  }
}

function w3_close() {
  mySidebar.style.display = "none";

}
</script>



</body>
</div>
<hr>
<?php require 'utils/footer.php'; ?>
</div>

</html>

