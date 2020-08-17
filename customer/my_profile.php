<!DOCTYPE html>
<?php
session_start();
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
	<?php $uname=$_SESSION['username'];?>
		<tr>
		  <td width=30%><label for="uname" ><b>Username:</b></label></td>
		  <td ><input type="text"  name="uname" value="<?php echo"$uname";?>"  required readonly></td>
		</tr>
		<tr>
		  <td><label for="name" ><b> Name:</b></label></td>
		  
		  <td><input type="text"  value="<?php name($uname);?>" name="name" required></td>
		</tr>
		<tr>
		  <td><label for="email" ><b>Email:</b></label></td>
		  <td><input type="text" value="<?php email($uname);?>"name="email" required></td>
		</tr>
		<tr>		
		  <td><label for="DOB" ><b>Date of Birth:</b></label></td>
		  <td><input type="date" min="1947-01-01" max="2000-01-01" value="<?php dob($_SESSION['username']);?>" name="dob" required></td>
		</tr>
		
		<tr>
		   <td><label for="gender" ><b>Gender:</b></label></td>
		  <td><select name="gender" required>
			  <option selected="default"><?php gender($_SESSION['username']);?></option>
		<!--	  <option value="male">Male</option>
			  <option value="female">Female</option>
			  <option value="other">Other</option>
			  -->
		  </select></td>
		</tr>
		
		<tr>
		  <td><label for="address" ><b>Address:</b></label></td>
		  <td><input type="text" value="<?php address($_SESSION['username']);?>" name="address" required></td>
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
		$uname=$_POST['uname'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
			$q="update user set name='$name',dob='$dob',gender='$gender',address='$address', email='$email' where username='$uname' ";
			$run_q=mysqli_query($con,$q);
			if($run_q)
			{
			echo "<script>alert('Account information has been modified, Thanks!')</script>";
			
			echo "<script>window.open('user_account.php','_self')</script>";
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
