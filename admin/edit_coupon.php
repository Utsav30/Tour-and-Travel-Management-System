<!DOCTYPE>

<?php 

include("db.php");

?>
<html>
	<head>
		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<link rel="stylesheet" href="view_customer.css">
<style>
.modal-content 
{
    background-color:#f1f1f1;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid #f1f1f1;
    width: 60%; /* Could be more or less, depending on screen size */
	margin-left:30%;
	float:center;
}
.userlogin{
	text-align:center;
}
input[type=text], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	float:right;
}
button {
    background-color: #009688;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
	font-size:16px;
	float:center;
}
</style>

<style>
.modal-content 
{
    background-color:#f1f1f1;
}

</style>
	</head>
	<?php
	if(isset($_GET['edit_coupon']))
	{
		$temp=$_GET['edit_coupon'];
		global $con;
		$q="select * from coupon where code='$temp'";
		$run=mysqli_query($con,$q);
		$row=mysqli_fetch_array($run);
		$code=$row['code'];
		$off=$row['off'];
	}
	?>
	
<body style="background-color:#9999999!important">
	<form class="modal-content" action="" method="post" enctype="multipart/form-data"> 
		<h2 class="userlogin">Edit Coupon</h2>
		<table width=90%>
		<tr>
		  <td><label for="pname" ><b>Coupon Code:</b></label></td>
		  <td ><input type="text" value="<?php echo $code;?>" name="ccode" readonly></td>
		</tr>
		<tr>
		  <td><label for="pprice" ><b>Discount %:</b></label></td>
		  <td><input type="text" value="<?php echo $off;?>" name="cdiscount" required></td>
		</tr>
		<tr align="center">
				<td colspan="7"><button type="submit" name="insert_coupon" >Updates Coupon</button></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($_POST['insert_coupon']))
		{
			global $con;
			$code=$_POST['ccode'];
			$discount=$_POST['cdiscount'];
			$q="update coupon set off=$discount where code='$code'";
			$run=mysqli_query($con,$q);
			if($run)
			{
				echo "<script>alert('Coupon Updated')</script>";
				echo "<script>window.open('admin_account.php?view_coupon','_self')</script>";
			}
			else
			{
				echo "<script>alert('Failed')</script>";
			}
		}
	?>
</body>
</html>