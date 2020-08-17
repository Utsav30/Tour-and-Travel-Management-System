<?php
function cancel()
{
	global  $con;
	if(isset($_POST['cancel']))
	{
		echo "<script>window.open('home.php','_self')</script>";
	}
}

function register()
{
	global $con;
	if(isset($_POST['create']))
	{
		$uname=$_POST['uname'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$usertype="user";
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$passwor=$_POST['password'];
		$password=md5($passwor);
		echo" $passwor $password";
		$q="select username from user where username='$uname'";
		$run_q=mysqli_query($con,$q);
		$check_user = mysqli_num_rows($run_q);
		if($check_user==0)
		{
			$q="insert into user value('$uname','$password','$name','$usertype','$dob','$gender','$address','$email')";
			$run_q=mysqli_query($con,$q);
			$_SESSION['username']=$uname; 
			$_SESSION['user']="user";
			
			echo "<script>alert('Account has been created successfully, Thanks!')</script>";
			
			//echo "<script>window.open('index.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('An user already have this username, please choose different username. ')</script>";
		}	
	}
}
function adminlogin()
{
	global $con;
	if(isset($_REQUEST['adminlogin']))
	{
		$a_name = $_POST['adminname'];
		$a_pas = $_POST['adminpassword'];
		$a_pass=md5($a_pas);
		$sel_a = "select * from user where username='$a_name' AND password='$a_pass' AND usertype='admin'";
		
		$run_a = mysqli_query($con, $sel_a);
		
		$check_admin = mysqli_num_rows($run_a); 
		
		if($check_admin==0)
		{
			echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
			echo "<script>window.open('login.php','_self')</script>";
			exit();
		}
		else
		{
			$sel_a = "select name from user where username='$a_name' AND password='$a_pass' AND usertype='admin'";
		
			$run_a = mysqli_query($con, $sel_a);
		
			$row_c=mysqli_fetch_array($run_a);
			$_SESSION['username']=$a_name;
			$_SESSION['user']="Admin";
			echo"login";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
}
function userlogin()
{
	global $con;
	if(isset($_REQUEST['userlogin']))
	{
		$u_name = $_POST['username'];
		$u_pas = $_POST['userpassword'];
		$u_pass=md5($u_pas);
		$sel_u = "select * from user where username='$u_name' AND password='$u_pass' AND usertype='user'";
		
		$run_u = mysqli_query($con, $sel_u);
		
		$check_user = mysqli_num_rows($run_u); 
		
		if($check_user==0)
		{
			echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
			echo "<script>window.open('login.php','_self')</script>";
			exit();
		}
		else
		{	
			$sel_a = "select name from user where username='$u_name' AND password='$u_pass' AND usertype='user'";
		
			$run_a = mysqli_query($con, $sel_a);
		
			$row_c=mysqli_fetch_array($run_a);
			$_SESSION['username']=$u_name;
			$_SESSION['user']="user";
			echo "<script>window.open('index.php','_self')</script>";
		}
	}
}
function myaccountstatus()
{
	
	if(empty($_SESSION['user']))
	{
		echo "<a href='login.php' class='p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right'>Login</a>";
	}
	else 
	{
		$url=$_SESSION['user'];
		if($url=='user')
		{
			echo "<a href='customer/user_account.php?user=$url' class='p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right  p-teal'>My Account</a>";
		}
		else
		{
			echo "<a href='admin/admin_account.php?user=$url' class='p-bar-item p-button p-hide-small p-hide-medium p-hover-white p-right  p-teal'>My Account</a>";
		}
	}
					
					
}
function welcome()
{
	if($_SESSION['user']=='Admin')
	{
		$fullname=$_SESSION['username'];
		echo "<h1 class='p-text-teal' float='center'>WELCOME  $fullname</h1>";
	}
	else
	{
		$fullname=$_SESSION['username'];
		echo "<h1 class='p-text-teal' float='center'>WELCOME  $fullname</h1>";
	}
}
function username()
{
	$username=$_SESSION['username'];
	echo"$username";
}
function name($username)
{
	global $con;
	/*$username=$_SESSION['username'];*/
	$sel_name="select * from user where username='$username'";
	$run_name = mysqli_query($con, $sel_name);
	$run_name=mysqli_fetch_array($run_name); 
	$name=$run_name['name'];
	echo"$name";
}
function email($username)
{
	global $con;
	/*$username=$_SESSION['username'];*/
	$sel_name="select * from user where username='$username'";
	$run_name = mysqli_query($con, $sel_name);
	$run_name=mysqli_fetch_array($run_name); 
	$name=$run_name['email'];
	echo"$name";
}
function dob($username)
{
	global $con;
	/*$username=$_SESSION['username'];*/
	$sel_name="select * from user where username='$username'";
	$run_name = mysqli_query($con, $sel_name);
	$run_name=mysqli_fetch_array($run_name); 
	$name=$run_name['dob'];
	echo"$name";
}
function gender($username)
{
	global $con;
	/*$username=$_SESSION['username'];*/
	$sel_name="select * from user where username='$username'";
	$run_name = mysqli_query($con, $sel_name);
	$run_name=mysqli_fetch_array($run_name); 
	$name=$run_name['gender'];
	echo"$name";
}
function address($username)
{
	global $con;
	/*$username=$_SESSION['username'];*/
	$sel_name="select * from user where username='$username'";
	$run_name = mysqli_query($con, $sel_name);
	$run_name=mysqli_fetch_array($run_name); 
	$name=$run_name['address'];
	echo"$name";
}

?>