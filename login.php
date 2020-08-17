<!DOCTYPE html>
<?php
session_start();
include("db.php");
include("function.php");
?>
<?php
	/* backend functions of login in function.php */
	adminlogin();
	userlogin();
?>
<html>
<head>
<title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/user_login.css.css">
</head>
<body>
<!--
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
-->
<div id="id01" class="modal" >
  <div>
  <form class="modal-content animate" action="" height="600px" width="300px" method="post">
    <!--
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
	-->
	<h2 class="userlogin">Admin Login</h2>
    <div class="container">
      <label for="adminname" ><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="adminname" required>

      <label for="adminpassword" ><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="adminpassword" required>
        
      <button type="submit" style="background-color:#009688" name ="adminlogin" >Login</button>
	  
      <!--
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  -->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  onclick="window.open('index.php','_self')" class="cancelbtn" name="cancel">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>
		-->
	</div>
  </form>
  </div>
  <div>
  <form class="modal-content1 animate" method="post" >
    <!--
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
	-->
	<h2 class="userlogin1">User Login</h2>
    <div class="container1">
      <label for="username" ><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="userpassword" ><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="userpassword" required>
        
      <button type="submit" style="background-color:#009688" name ="userlogin">Login</button>
      <!--
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  -->
	  <span class="psw1">Don't have a Account <a href="register.php">Sign Up</a></span>
    </div>

    <div class="container1" style="background-color:#f1f1f1">
      <button type="button"  onclick="window.open('index.php','_self')" class="cancelbtn1" name="cancel">Cancel</button>
      
    </div>
  </form>
  </div>
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

</body>
</html>
