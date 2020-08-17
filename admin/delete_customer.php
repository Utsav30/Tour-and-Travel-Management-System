<?php
include("db.php");
			global $con;
			if(isset($_GET['delete_id']))
			{
				$id=$_GET['delete_id'];
				$q="delete from user where username='$id'";
				$run_q=mysqli_query($con,$q);
				if($run_q)
				{
					echo "<script>alert('Account deleted, Thanks!')</script>";
					echo "<script>window.open('admin_account.php?view_customer','_self')</script>";
				}
			}
?>