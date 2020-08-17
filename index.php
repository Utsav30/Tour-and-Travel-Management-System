<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/ph.css">
<link rel="stylesheet" href="css/ph_theme.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/font_style.css">
<link rel="stylesheet" href="css/view_customer.css">




<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.p-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
.movingstyle{
     font-size: 20px;
    background: #009688;;
    color: white;
    position: relative;
    -webkit-animation: mymove 10s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 10s;
    animation-iteration-count: infinite;
}
.polaroid {
  width: 500px;
  height:400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  background-color:#ffffff;
  margin-bottom:2%;
  margin-top:2%;
}
.modal-content 
{
	 margin: 0% auto 0% auto;
    background-color:#f1f1f1;
	width: 100%; /* Could be more or less, depending on screen size */
	border-radius: 25px;

}
.p-display-leftmid{position:absolute;top:15%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%);}

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
.column {
    float: left;
	margin-left:5%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 2; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 0.9;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>
<body>

<!-- Navbar -->
<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
   
	<a href="#" class="p-bar-item p-button p-hide-small p-hover-white  p-white">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white">Contact</a>
   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>


<!-- Slide show for upper images -->

<style>
.mySlides {display:none;}
</style>


<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/1.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-bottom" src="homepage_upperimages/2.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/3.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/4.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-bottom" src="homepage_upperimages/5.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/6.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/7.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-bottom" src="homepage_upperimages/8.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/9.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/10.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-bottom" src="homepage_upperimages/11.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/12.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/13.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-bottom" src="homepage_upperimages/14.jpg" style="width:270%;min-height:100px;max-height:400px;">
  <img class="mySlides w3-animate-top" src="homepage_upperimages/15.jpg" style="width:270%;min-height:100px;max-height:400px;">
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

<div id="id01" class="">
  <h2 class="userlogin" style="text-shadow: 1px 1px;" align="center">Let's measure the world...</h2>
  <div class="modal-content">
  
    <p class="movingstyle">
      Now enjoy this summer with most affordable price. Use code #SAURABH_SUMMER_BREAK
    </p>
  </div>
	<h3 class="p-text-teal" align="center">
     We specialize in customized/tailor-made tours to India as well as international tour packages. All our itineraries are customizable. Browse through our sample tour packages for your trip to Indian Subcontinent.
    </h3>
</div>

<div >
  
    
  </div>



<!--End slide show for upper images -->



<!-- Contains the packages -->

<?php
global $con;
$q="select * from package order by RAND() LIMIT 0,4";
$run_q=mysqli_query($con, $q);
?>
 <div id="id01" class="">
  
  <div class="modal-content">
  <h2  style="text-shadow: 1px 1px;" align="left">Some of Our Popular Packages...</h2>
    <div class="container p-card-4" >

	<?php 
		while($row_q=mysqli_fetch_array($run_q))
		{
			
			$id = $row_q['id'];
			$name = $row_q['name'];
			$image=$row_q['image'];
	?>
	<div class="row">
	<div class="polaroid column" style="display:table;" ><a href="package.php?view_package_detail=<?php echo "$id"; ?>"  style="text-decoration: none;">
	  <img src="package_images/<?php echo"$image";?>" alt="Norway" style="width:100%">
	  
    <h2><?php echo"$name";?></h2>
	</a>
	</div>
	
	<?php
			$row_q=mysqli_fetch_array($run_q);
			$id = $row_q['id'];
			$name = $row_q['name'];
			$image=$row_q['image'];
		
	?>
	<div class="polaroid column" style="display:table;"><a href="package.php?view_package_detail=<?php echo "$id"; ?>"  style="text-decoration: none;">
	  <img src="package_images/<?php echo"$image";?>" alt="Norway" style="width:100%">
	  
    <h2><?php echo"$name";?></h2>
	</a>
	</div>
	</div>
	<?php
		}
	?>

	</div>
  </div>
 </div>
<!-- Overlay effect when opening sidebar on small screens --
<div class="p-overlay p-hide-large" onclick="p_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible --
<div class="p-main" style="margin-left:250px">

  <div class="p-row p-padding-64">
  <!--
    <div class="p-twothird p-container">
      <h1 class="p-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	--
    <div class="p-third p-container">
      <p class="p-border p-padding-large p-padding-32 p-center">AD</p>
      <p class="p-border p-padding-large p-padding-64 p-center">AD</p>
    </div>
  </div>

  <div class="p-row">
  <!--
    <div class="p-twothird p-container">
      <h1 class="p-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	--
    <div class="p-third p-container">
      <p class="p-border p-padding-large p-padding-32 p-center">AD</p>
      <p class="p-border p-padding-large p-padding-64 p-center">AD</p>
    </div>
  </div>

  <div class="p-row p-padding-64">
  <!--
    <div class="p-twothird p-container">
      <h1 class="p-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	--
    <div class="p-third p-container">
      <p class="p-border p-padding-large p-padding-32 p-center">AD</p>
      <p class="p-border p-padding-large p-padding-64 p-center">AD</p>
    </div>
  </div>

  <!-- Pagination -->
  <!--
  <div class="p-center p-padding-32">
    <div class="p-bar">
      <a class="p-button p-black" href="#">1</a>
      <a class="p-button p-hover-black" href="#">2</a>
      <a class="p-button p-hover-black" href="#">3</a>
      <a class="p-button p-hover-black" href="#">4</a>
      <a class="p-button p-hover-black" href="#">5</a>
      <a class="p-button p-hover-black" href="#">»</a>
    </div>
  </div>
-->

<!-- Quotes -->



<!--End of quotes-->
<!-- starting of footer -->


  <footer id="myFooter">
    <div class="p-container  p-padding-32 " style="color:#fff !important; background-color:#000 !important">
	<div style="float:right">
	<img  src="https://www.indianholiday.com/images/footerbg.jpg" width="95%"  alt="" class="img-responsive">
	</div>
	
      <p align="left" class="footerfont" style="margin-left:30px">
        <h3 style="margin-left:30px"><i>Tour travel Project Pvt. Ltd</i></h3>
		
		<p style="margin-left:30px">IIIT-Allahabad</p>
		<p style="margin-left:30px">Jhalwa, Allahabad</p>
		<p style="margin-left:30px">Phone: +91-7398351490 </p>
			   <p style="margin-left:80px">+91-8085402177</p>
      </p>
	
	 
    </div>

  
  </footer>

<!-- END MAIN -->
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
