<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<html>
<head>
	<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/ph.css">
	<link rel="stylesheet" href="css/ph_theme.css">
	<link rel="stylesheet" href="css/font.css">
	<link rel="stylesheet" href="css/font_style.css">
	<link rel="stylesheet" href="css/view_customer.css">
	
	<link rel="shortcut icon" href="logo.jpg" type="image/jpg">

<style>
.movingstyle{
     font-size: 20px;
    color: green;
    position: relative;
    -webkit-animation: mymove 10s;  /* Safari 4.0 - 8.0 */
    -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 10s;
    animation-iteration-count: infinite;
}

@-webkit-keyframes mymove {
    from {left: 0px;}
    to {left: 100%;}
}

@keyframes mymove {
    from {left: 0px;}
    to {left: 100%;}
}

.footerfont{
  font-size: 20px;
  font-family: monospace;
}

.back_image{
  background-image: url("contactuspics/bodyimg.jpg");
  font-family: "Times New Roman";
  background-size: 100% 100%;
  font-size: 18px;
}
</style>
</head>
<body>
	<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
    
	<a href="index.php" class="p-bar-item p-button p-hide-small p-hover-white ">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white">All Packages</a>
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white  p-white">Contact</a>
   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>


	<div class="back_image">
	</br></br>
		<h1 align="center"><i>ABOUT US...</i></h1>
		<table style="color: black; " align="center" id="bolding">
			<tr>
				<td><img src="contactuspics/naina.jpg" style="width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;" ></td>
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Utsav Kumar Nareti</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>ism2016001@iiita.ac.in</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-8085402177</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>IIIT-A, JHALWA, ALLAHABAD</td>
						</tr>
					</table>
				</td>
			</tr>


			<tr align="right">
				
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Raghvendra Kumar</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>iim2016004@iiita.ac.in</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-9628707901</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>IIIT-A, JHALWA, ALLAHABAD</td>
						</tr>
					</table>
				</td>
				<td><img src="contactuspics/Raghu.jpg" style="width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;" ></td>
			</tr>

			<tr>
				<td><img src="contactuspics/saurabh.jpg" style="width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;"> </td>
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Saurabh Kumar Raj</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>itm2016001@iiita.ac.in</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-8340513530</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>IIIT-A, JHALWA, ALLAHABAD</td>
						</tr>
					</table>
				</td>
			</tr>
			

			<tr>
				
				<td>
					<table>
						<tr>
							<td>Name:</td>
							<td>Avanish Chand</td>
						</tr>
						<tr>
							<td>Email:</td>
							<td>iit2016120@iiita.ac.in</td>
						</tr>
						<tr>
							<td>Mobile no:</td>
							<td>+91-7398351490</td>
						</tr>
						<tr>
							<td>Address:</td>
							<td>IIIT-A, JHALWA, ALLAHABAD</td>
						</tr>
					</table>
				</td>
				<td><img src="contactuspics/elaine.jpg" style="align:right;width: 200px;max-height: 190px; padding: 10px; border-radius: 50%; margin: 0;" ></td>
			</tr>
			
			

		</table>
		
		
	</div>
</body>
</html>