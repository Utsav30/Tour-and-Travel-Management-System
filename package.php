<!DOCTYPE html>
<?php
session_start();
include("function.php");
include("db.php");

?>
<?php
$id=$_SESSION['user']; 
if($id=="Admin"){
	
	echo "<script>alert('You are not user\nLogin as user')</script>";
	echo "<script>window.open('login.php?not_user=You are not an user!','_self')</script>";
}
else {
	if($id!="user"){
	
	echo "<script>alert('login as user')</script>";
	echo "<script>window.open('login.php?not_user=You are not an user!','_self')</script>";
}
else
{

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
<link rel="stylesheet" href="css/view_customers.css">

<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.p-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
.button {
    background-color: #000;
    color: white;
   padding: 1px 2px;
    margin: 0px 0;
	margin-left:20%;
    border: 1px solid #000;
	border-radius:25%;
    cursor: pointer;
    width: 60%;
	height:10%;
	float:center;
}

.button:hover {
	background-color: #fff;
    color: #000;
    opacity: 0.8;
}
.input[type=text]{
    width:90%;
    padding: 1px 1px;
    display: inline-block;
    box-sizing: border-box;
	float:left;
	

}
.select{
	padding: 1px 1px;
	 width:90%;
	 display: inline-block;
    box-sizing: border-box;
	float:left;
	
}
.date{
	padding: 0.01px 0.01px;
	width:90%;
	display: inline-block;
    box-sizing: border-box;
	float:left;
	font-size: 0.8rem;
	text-align:left;
	
}
td, th {
  ;
    text-align: left;
    padding:0px;
	margin:0px 0px 0px 0px;
	border-spacing: 0px 0px;
	padding-left:0%;
	font-size:15px;
}

table
{
	
}
input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}
input[type=date]::-webkit-calendar-picker-indicator {
    
    -webkit-appearance: none;

  padding: 0.1px;
  width:6px;
  float:right;
  padding:0.1px 0.1px;
  margin-right:0.01px;
  }
  .p-bar-block{
	  padding:0px 0px;
  }
</style>

<style>
.tooltip {
    position: relative;
    display: inline-block;
   
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: 0px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 10%;
    right:100%;
    margin-left: 1px;
    border-width: 15px;
    border-style: solid;
    border-color: transparent #000 transparent   transparent  ;
}

</style>
<body>

<!-- Navbar -->
<div class="p-top">
  <div class="p-bar p-theme p-top p-left-align p-large p-card-4">
	
	<a href="index.php" class="p-bar-item p-button p-hide-small p-hover-white home">Home</a>
    <a href="allpackage.php" class="p-bar-item p-button p-hide-small p-hover-white p-white">All Packages</a>
  
    <a href="contact.php" class="p-bar-item p-button p-hide-small p-hover-white">Contact</a>

   <!-- <a href="#" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white">Partners</a>
   --
   <a href="logout.php" class="p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right">Logout</a>
	-->
	<?php
		myaccountstatus();
	?>
  </div>
</div>
<?php
if(isset($_GET['view_package_detail']))
{
	$pid=$_GET['view_package_detail'];
	global $con;
	$q="select * from package where id='$pid'";
	$run_q=mysqli_query($con,$q);
	if($run_q)
	{
		$row_q=mysqli_fetch_array($run_q);
		
		$pprice=$row_q['price'];
		$pcoupon=$row_q['coupon'];
		
	}
}
?>


<!-- Sidebar -->
<div>
<nav class="p-sidebar   p-bar-block p-large  p-theme" style="background-color:#009688!important; width:280px"  id="mySidebar">
<form method="POST">
  <table width=90%>
		<tr>
		  <td width="60%">Base Price:</td>
		  <td width="50%" ><input id="bprice" type="text" class="input"  value="<?php echo"$pprice.00";?>"name="bprice" readonly></td>
		</tr>
		
		<tr>
		  <td >Arrival Date:</td>
		   <td ><input style="width:90%;" type="date" class="date" min="<?php echo date('Y-m-d');?>" max="<?php echo (date('Y-',strtotime('+1 year')));echo (date('m-d'));?>" placeholder="DDMMYYYY" name="bdob" required></td>
		</tr>
		<tr>
		  <td >Group Size:</td>
			<td><select id="bgroup "class ="select" name="bgroup"  required>
			  <option selected value="1" >1-3</option>
			  <option value="2" >4-6</option>
			  <option value="3">7-10</option>
		  </select></td>
		   
		</tr>
			<tr>
		  <td width=60%>Apply Coupon:</td>
		  <td width=50%><input type="text" class="input" value="" name="bcoupon"></td>
		</tr>
		
		<!--<tr>
		  <td >Discount:</td>
		  <td ><input id="bdiscount"type="text" class="input"  value="0"name="bdiscount" readonly ></td>
		--></tr>
		
		<!--<tr>
		  <td >Total Price:</td>
		  <td ><input id="btprice" type="text" class="input"  value="" name="btprice" readonly></td>
		  <!--<td ><input type="text" class="input"  name="bprice" ></td>
		--</tr>-->
		
		
	</table>
	<div style="background-color:#009688;">
		<button type="sumbit" class ="button" name="book_now" ><h3><b>BOOK NOW</b></h3></button></a>
	</div>
	</form>
	<?php
	global $con;
	if(isset($_POST['book_now']))
	{
		
		$adob=$_POST['bdob'];
		$group=$_POST['bgroup'];
		$coupon=$_POST['bcoupon'];
		$date=date("Ymd");
		$uname=$_SESSION['username'];
		
		
		$a = explode('-', $adob);
		$adob=$a[0].$a[1].$a[2];
		if(!empty($coupon))
		{
			$q="select * from coupon where code='$coupon'";
			$run=mysqli_query($con,$q);
			if($run==false)
			{
				echo "<script>alert('Worng Coupon')</script>";
			}
			else
			{
				$check = mysqli_num_rows($run);
				if($check==0)
				{
					echo "<script>alert('Worng Coupon')</script>";
				}
				else
				{
					$row=mysqli_fetch_array($run);
					$off=$row['off'];
						$tprice =($pprice*$group);
						$discount=($tprice*$off)/100;
						$tprice=$tprice-$discount;
						
						
						echo "<script>alert('You have Discount=$discount and Total Price=$tprice')</script>";
						$q="insert into package_booking (booking_date,arrival_date,amount,group_size,payment,username,package_id,coupon)
							value($date,$adob,$tprice,$group,0,'$uname',$pid,'$coupon')";
							$run=mysqli_query($con,$q);
							$_SESSION['pid']=mysqli_insert_id($con);
						echo "<script>window.open('New/index.php','_self')</script>";
				}
			}
			/*$q="selcet coupon from package where coupon=%$coupon%";
			$run=mysqli_query($con,$q);
			
			if($run>0)
			{
				$q="select * from coupon where code=$coupon";
				$run=mysqli_query($con,$q);
				$check = mysqli_num_rows($run);
				if($check>0)
				{
					$row=mysqli_fetch_array($run);
					$off=$row['off'];
					$tprice =($pprice*$group);
					$discount=($tprice*$off)/100;
					$tprice=$tprice-$discount;
					echo "<script>alert('You have Discount=$discount and Total Price=$tprice')</script>";
					echo "<script>window.open('payment/index.html','_self')</script>";
				}
				else
				{
					echo "<script>alert('Worng Coupon')</script>";
				}
			}
			else
			{
				echo "<script>alert('Worng Coupon1')</script>";
			}*/
		}
		else
		{
			$_SESSION['group']=$group;
			$_SESSION['discount']=0.00;
			$tprice=$pprice*$group;
			$q="insert into package_booking (booking_date,arrival_date,amount,group_size,payment,username,package_id,coupon)value($date,$adob,$tprice,$group,0,'$uname',$pid,'$coupon')";
			$run=mysqli_query($con,$q);
			
			
			$_SESSION['pid']=mysqli_insert_id($con);
				
			echo "<script>window.open('New/index.php','_self')</script>";
			
		}
	}
	?>
	
  <a class="p-bar-item p-button p-hover-teal " align="center">Available Coupon </a>
<?php
	global $con;
	$pid=$_GET['view_package_detail'];
	
	$q="select * from package where id=$pid";
	$run=mysqli_query($con,$q);
	$row=mysqli_fetch_array($run);
	$cou=$row['coupon'];
	$myArr = explode(',', $cou);
	foreach($myArr as $cap)
	{
		$q="select * from coupon where code='$cap'";
		$run=mysqli_query($con,$q);
		$row=mysqli_fetch_array($run);
		$off=$row['off'];
		echo "
		  <div class='tooltip'> 
		  <a class='p-bar-item p-button p-hover-teal ' >$cap</a>
		  <span class='tooltiptext'>$off %off</span>
		</div>
		";
	}
?>
</nav>
</div>
<div>
<?php
	if(isset($_GET['view_package_detail']))
	{
		
		include("view_package_detail.php"); 
		
	}
	
	
?>
</div>

 <script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");
	var x = document.getElementById("bgroup").value;
			var y = document.getElementById("bprice").value;
			var z = document.getElementById("bdiscount").value;
			document.getElementById("bdiscount").innerHTML = z;
			document.getElementById("btprice").innerHTML = (x*y)-z;
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
}
?>
