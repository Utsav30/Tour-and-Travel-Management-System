<!DOCTYPE>

<?php 

include("db.php");

?>
<html>
	<head>
		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<link rel="stylesheet" href="view_customer.css">
<script>
        tinymce.init({selector:'textarea'});
</script>
<style>
.modal-content 
{
    background-color:#f1f1f1;
}
.userlogin{
	text-align:center;
}
table{
	margin-left:5px;
}
input[type=text], input[type=password]{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	float:left;
}
td, th {
   
    padding:8px;
	padding-left:2%;
	margin-left:20%;
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
.image
{
	background-color:#999999;
	border: 2px solid #000;
}
</style>
	</head>
	
<body style="background-color:#9999999!important">
	<form class="modal-content" action="" method="post" enctype="multipart/form-data"> 
		<div style="background-color:#9999999!important">
			<h2 class="userlogin">Insert Package</h2>
		</div>
		<div class="container">
		<table width=90%>
		
		<tr>
		  <td ><label for="pname" ><b>Package Name:</b></label></td>
		  <td ><input type="text" placeholder="Enter Package Name" name="pname" required></td>
		</tr>
		<tr>
		  <td><label for="pprice" ><b>Package Price (in Rs.):</b></label></td>
		  <td><input type="text" placeholder="Enter Package Price" name="pprice" required></td>
		</tr>
		<tr>
		  <td><label for="coupon" ><b>Discount Coupons:</b></label></td>
		  <td><input type="text" placeholder="Enter Discount Coupons" name="coupon" required></td>
		</tr>
		<tr>
		  <td width="30%"><label for="pimage" ><b>Package Image:</b></label></td>
		  <td width="50%"><input type="file"  name="pimage" required></td>
		</tr>
		
		
		<tr>
		  <td><label for="detail" ><b>Tour Details:</b></label></td>
		  <td colspan="2"><textarea name="detail"></textarea></td>
		</tr>
		<tr>		
		  <td><label for="description" ><b>Description:</b></label></td>
		  <td colspan="2"><textarea name="description"></textarea></td>
		</tr>
		<!--
		<tr>
		  <td><label for="keyword" ><b>Package Keywords:</b></label></td>
		  <td><input type="text" placeholder="Enter " name="keyword" required></td>
		</tr>
		-->
		<tr align="center">
				<td colspan="8"><button type="submit" name="insert_post" >Insert Package</button></td>
			</tr>
		</table>
		</div>
		<?php
		global $con;
			if(isset($_POST['insert_post']))
			{
				$name=$_POST['pname'];
				$price=$_POST['pprice'];
				$coupon=$_POST['coupon'];
				$detail= mysqli_real_escape_string($con,$_POST['detail']);
				$desc= mysqli_real_escape_string($con,$_POST['description']);
			//	$keyword= mysqli_real_escape_string($con,$_POST['keyword']);
				
				$image = $_FILES['pimage']['name'];
				$image_tmp = $_FILES['pimage']['tmp_name'];
				
				move_uploaded_file($image_tmp,"../package_images/$image");
				
				$q="insert into package (name,price,coupon,image,detail,description)value('$name','$price','$coupon','$image','$detail','$desc')";
				
				$run_q = mysqli_query($con, $q);
		 
				 if($run_q){
				 
				 echo "<script>alert('Package Has been inserted!')</script>";
				 
				 
				 }
			}
		?>
	</form>
</body>
</html>