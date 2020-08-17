<!DOCTYPE html>
<?php

include("db.php");

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="view_customer.css">
<style>
.modal-content 
{
    background-color:#f1f1f1;
}
.cancelbtn {
    background-color: #009688;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
	cursor:pointer;
	float:right;
}
.container{
	width:60%;
	margin-left:19%;
}
</style>
</head>
<?php 
		global $con;
		$uname=$_SESSION['username'];
		$q="select password from user where username='$uname'";
		$run_q=mysqli_query($con,$q);
		$row_q=mysqli_fetch_array($run_q);
		$password=$row_q['password'];
?>
<body>
<!--
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
-->
<div id="id01" >
  
  <form class="modal-content" method="post" action="" enctype="multipart/form-data">
    <!--
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
	-->
	<h2 class="userlogin">My Profile</h2>
    <div class="container">
	
	<table width=90%>
	
		<tr>
		  <td width=50%><label for="cpass" ><b>Current Password:</b></label></td>
		  <td ><input type="password"  name="cpass" value=""  required></td>
		</tr>
		<tr>
		  <td><label for="npass" ><b>New Password:</b></label></td>
		  
		  <td><input type="password"  value="" name="npass" required></td>
		</tr>
		<tr>
		  <td><label for="cnpass" ><b>Confirm Password:</b></label></td>
		  <td><input type="password" value=""name="cnpass" required></td>
		</tr>
		<!--<tr>
		  <td><label for="password" ><b>Password</b></label></td>
		  <td><input type="password" placeholder="Enter Password" name="password" required></td>
        </tr>
		-->
      </table>
      <!--
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  -->
	  <div class="container">
		
		<button type="submit" class="cancelbtn" name ="save"><b>Save</b></button>
	  </div>
    </div>
	
	<!--
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
	-->
  </form>
</div>
<?php
		global $con;
	if(isset($_POST['save']))
	{
		$cpass=$_POST['cpass'];
		$cpass=md5($cpass);
		$npass=$_POST['npass'];
		$cnpass=$_POST['cnpass'];
		if($cpass!=$password)
		{
			echo "<script>alert('Worng Current Password!')</script>";
		}
		else if($npass!=$cnpass)
		{
			echo "<script>alert('New password AND Confirm password not matched!')</script>";
		}
		else
		{
			$cnpass=md5($cnpass);
			$q="update user set password='$cnpass' where username='$uname' ";
			$run_q=mysqli_query($con,$q);
			if($run_q)
			{
			echo "<script>alert('Password changed, Thanks!')</script>";
			
			echo "<script>window.open('user_account.php','_self')</script>";
			}
		}
	}
	?>

<!--
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
-->

</body>
</html>
