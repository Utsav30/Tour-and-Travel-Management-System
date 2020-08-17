<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<?php
$id=$_SESSION['user']; 
if($id!="Admin"){
	
	echo "<script>alert('You are not Admin')</script>";
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

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
	
	<a href="../index.php" class="p-bar-item p-button p-hide-small p-hover-white home">Home</a>
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
<div>
<nav class="p-sidebar p-bar-block p-collapse p-large p-animate-left p-theme" style="background-color:#009688!important"  id="mySidebar">
  <a href="javascript:void(0)" onclick="p_close()" class="p-right p-xlarge p-padding-large p-hover-white p-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h2 class="p-bar-item p-center"><b></b></h2>
  <a class="p-bar-item p-button p-hover-white my_profile" href="admin_account.php?my_profile">My Profile</a>
  <a class="p-bar-item p-button p-hover-white view_customer" href="admin_account.php?view_customer">View Customers</a>
  <a class="p-bar-item p-button p-hover-white view_package" href="admin_account.php?view_package">View Package</a>
  <a class="p-bar-item p-button p-hover-white insert_product" href="admin_account.php?insert_product">Insert Package</a>
  <a class="p-bar-item p-button p-hover-white view_coupon" href="admin_account.php?view_coupon"> View Coupons</a>
  <a class="p-bar-item p-button p-hover-white insert_coupon" href="admin_account.php?insert_coupon">Insert Coupon</a>
  <a class="p-bar-item p-button p-hover-white booking_history" href="admin_account.php?invoice">Booking History</a>
  <a class="p-bar-item p-button p-hover-white logout" href="logout.php">Logout</a>
</nav>
</div>
<div>
<?php
	if(isset($_GET['insert_product']))
	{
		
		include("insert_product.php"); 
		
	}
	else if(isset($_GET['view_coupon']))
	{
		
		include("view_coupon.php"); 
		
	}
	else if(isset($_GET['insert_coupon']))
	{
		
		include("insert_coupon.php"); 
		
	}
	else if(isset($_GET['my_profile']))
	{
		
		include("my_profile.php"); 
		
	}
	else if(isset($_GET['view_customer']))
	{
		
		include("view_customer.php"); 
		
	}
	else if(isset($_GET['view_package']))
	{
		
		include("view_package.php"); 
		
	}
	else if(isset($_GET['edit_customer']))
	{
		$abcd=$_GET['edit_customer'];
		include("edit_customer.php"); 
		
	}
	else if(isset($_GET['edit_package']))
	{
		
		include("edit_package.php"); 
		
	}
	else if(isset($_GET['view_package_detail']))
	{
		
		include("view_package_detail.php"); 
		
	}
	else if(isset($_GET['edit_coupon']))
	{
		
		include("edit_coupon.php"); 
		
	}
	else if(isset($_GET['invoice']))
	{
		
		include("abhistory.php"); 
		
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
</div>

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
<?php
}
?>
