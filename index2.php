<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

<link rel="stylesheet" type="text/css" href="usercss.css">

</head>

<body style= "margin-top: -21px;">
  <div id = "my" style="height:48px;background-color:black;color:white;">
 	 <div style="float:left; font-size:28px;">
  	 <button class=" w3-button " onclick="w3_open();"><b>Menu</b></button>
  	</div>
 	 <div style=" margin-left: 45%;">
 	   <h1><b>My Dashboard</b></h1>
 	 </div>
 </div>

  <div id="mySidebar" style="width:185px;float:left; background-color:teal;">
    <a href="home.php" class= "amenu" > Home</a>
    <a href="manage_event.php" class= "amenu"> Manage Events</a>
    <a href="bookevent.php" class= "amenu"> Book Events</a>
    <a href="manageuserprofile.php" class= "amenu"> My Dashbord </a>
    <a href="logout.php" class= "amenu"> Logout</a>
  </div>

  <div id = "my" style="margin-top:48px; margin-left: 300px; overflow : hidden ; ">
    <div class="w3-quarter w3-red">
        <h4>Wedding</h4>
    </div>
    <div class="w3-quarter w3-blue">
        <h4>Birthday</h4>
    </div>
    <div class="w3-quarter w3-teal">
        <h4>Ceremony</h4>
    </div>
    <div class="w3-quarter w3-orange">
        <h4>Conference</h4>
    </div>
    <a href = "manage_event.php" class= "aaa" style = "color: blue;" > Click here for manage events         </a>

  </div>
      
 <div style="margin-top:43px; margin-left: 300px; height:210px;">
    <div class="w3-quarter w3-red">
        <h4>Messages</h4>
    </div>
    <div class="w3-quarter w3-blue">
        <h4>Views</h4>
    </div>
    <div class="w3-quarter w3-teal">
        <h4>Shares</h4>
    </div>
    <div class="w3-quarter w3-orange">
        <h4>Users</h4>
    </div>
    <a href = "tp.php" class= "aaa " style = "color: blue;" >Click here for Book events </a>
 </div>

<script type="text/javascript">

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
<?php require 'utils/footer.php'; ?>
</div>

</html>

