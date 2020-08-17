<!DOCTYPE html>
<?php
session_start();
include("function.php");

?>
<html>
<title>Tour and Travel</title>
<link rel="shortcut icon" href="../logo.jpg" type="image/jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ph.css">
<link rel="stylesheet" href="ph_theme.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font_style.css">

<link rel="shortcut icon" href="../logo.jpg" type="image/jpg">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.p-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->
<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
    
	<a href="../index.php" class="p-bar-item p-button p-hide-small p-hover-white">Home</a>
    <a href="../allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="../contact.php" class="p-bar-item p-button p-hide-small p-hover-white">Contact</a>
    
   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   --
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>

<!-- Sidebar -->
<nav class="p-sidebar p-bar-block p-collapse p-large p-animate-left p-theme" style="background-color:#009688!important"  id="mySidebar">
  <a href="javascript:void(0)" onclick="p_close()" class="p-right p-xlarge p-padding-large p-hover-white p-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h2 class="p-bar-item p-center"><b>DASHBOARD</b></h2>
  <a class="p-bar-item p-button p-hover-white" href="user_account.php?my_profile">My Profile</a>
  <a class="p-bar-item p-button p-hover-white" href="user_account.php?change_password">Change Password</a>
  <a class="p-bar-item p-button p-hover-white booking_history" href="user_account.php?invoice">Booking History</a>
  <a class="p-bar-item p-button p-hover-white" href="logout.php">Logout</a>
</nav>
<?php
	if(isset($_GET['my_profile']))
	{
		
		include("my_profile.php"); 
		
	}
	else if(isset($_GET['change_password']))
	{
		
		include("change_password.php"); 
		
	}
	else if(isset($_GET['invoice']))
	{
		
		include("ubhistory.php"); 
		
	}
	else
	{
		echo"	<div class='p-main' style='text-align:center'>
			  <div class='p-row p-padding-64'>
				";
				welcome();
		echo"
			  </div>
			 </div>";
	}
?>
 <script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function p_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function p_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
