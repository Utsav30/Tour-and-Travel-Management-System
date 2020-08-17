<!DOCTYPE html>
<?php
session_start();
include("db.php");
include("function.php");
?>
<html>
<head>
<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/register.css">
</head>
<body>
<!--
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
-->
<div id="id01" class="">
  
  <form class="modal-content" method="post" >
    <!--
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
	-->
	<h2 class="userlogin">Create An Account</h2>
    <div class="container">
	<table width=100% cellspacing="1" cellpadding="1">
		<tr>
		  <td><label for="uname" ><b>Username:</b></label></td>
		  <td ><input type="text" placeholder="Enter Username" name="uname" required></td>
		</tr>
		<tr>
		  <td><label for="name" ><b> Name:</b></label></td>
		  <td><input type="text" placeholder="Enter Your Name" name="name" required></td>
		</tr>
		<tr>
		  <td><label for="email" ><b>Email:</b></label></td>
		  <td><input type="text" placeholder="Enter Email" name="email" required></td>
		</tr>
		<tr>		
		  <td><label for="DOB" ><b>Date of Birth:</b></label></td>
		  <td><input type="date" min="1947-01-01" max="2000-01-01" placeholder="DDMMYYYY" name="dob" required></td>
		</tr>
		<tr>
		   <td><label for="gender" ><b>Gender:</b></label></td>
		  <td><select name="gender" placeholder="Select Gender" required>
			  <option value="male" >Male</option>
			  <option value="female" >Female</option>
			  <option value="other">Other</option>
		  </select></td>
		</tr>
		<tr>
		  <td><label for="address" ><b>Address:</b></label></td>
		  <td><input type="text" placeholder="Enter Address" name="address" required></td>
		</tr>
		<tr>
		  <td><label for="password" ><b>Password</b></label></td>
		  <td><input type="password" placeholder="Enter Password" name="password" required></td>
        </tr>
      </table>
      <!--
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  -->
	  <div class="container" style="background-color:#f1f1f1">
		<button type="submit"  class "cancelbtn" name ="create"><b>Create</b></button>
		<button type="button" onclick="window.open('home.php','_self')" class="cancelbtn">Cancel</button>
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
<?php
	register();
?>

</body>
</html>
