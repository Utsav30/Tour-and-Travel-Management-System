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
<?php
	$pid=$_GET['edit_package'];
	global $con;
	$q="select * from package where id='$pid'";
	$run_q=mysqli_query($con,$q);
	if($run_q)
	{
		$row_q=mysqli_fetch_array($run_q);
		$pname=$row_q['name'];
		$pprice=$row_q['price'];
		$pcoupon=$row_q['coupon'];
		$ppimage=$row_q['image'];
		//$pkeyword=$row_q['keyword'];
		$pdetail=$row_q['detail'];
		$pdesc=$row_q['description'];
	}
?>
	
<body style="background-color:#9999999!important">
	<form class="modal-content" action="" method="post" enctype="multipart/form-data"> 
		<div style="background-color:#9999999!important">
			<h2 class="userlogin">Edit Package</h2>
			<img src="../package_images/<?php echo $ppimage; ?>"  width=100%/>
		</div>
		<div class="container">
		<table width=90%>
		
		<tr>
		  <td ><label for="pname" ><b>Package Name:</b></label></td>
		  <td ><input type="text" value="<?php echo"$pname";?>"  name="pname" required></td>
		</tr>
		<tr>
		  <td><label for="pprice" ><b>Package Price (in Rs.):</b></label></td>
		  <td><input type="text" value="<?php echo"$pprice";?>" name="pprice" required></td>
		</tr>
		<tr>
		  <td><label for="coupon" ><b>Discount Coupons:</b></label></td>
		  <td><input type="text" value="<?php echo"$pcoupon";?>" name="coupon" required></td>
		</tr>
		<tr>
		  <td width="30%"><label for="pimage" ><b>Package Image:</b></label></td>
		  <td width="50%"><input type="file"  name="pimage"></td>
		</tr>	
		
		<tr>
		  <td><label for="detail" ><b>Tour Details:</b></label></td>
		  <td colspan="2"><textarea name="detail" ><?php echo"$pdetail";?></textarea></td>
		</tr>
		<tr>		
		  <td><label for="description" ><b>Description:</b></label></td>
		  <td colspan="2"><textarea name="description" ><?php echo"$pdesc";?></textarea></td>
		</tr>
<!--
		<tr>
		  <td><label for="keyword" ><b>Package Keywords:</b></label></td>
		  <td><input type="text" placeholder="Enter " name="keyword" value="<?php echo"$pkeyword";?>" required></td>
		</tr>
-->
		<tr align="center">
				<td colspan="8"><button type="submit" name="insert_post" >Save</button></td>
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
				//$keyword= mysqli_real_escape_string($con,$_POST['keyword']);
				//$image=$_FILES['pimage']['name'];
				if($_FILES['pimage']['size'] == 0)
				{
					$image=$ppimage;
				}
				else
				{
					
					$image = $_FILES['pimage']['name'];
					$image_tmp = $_FILES['pimage']['tmp_name'];
					move_uploaded_file($image_tmp,"../package_images/$image");
				}
				
				
				$q="update package set name='$name',price='$price',coupon='$coupon',image='$image',detail='$detail',description='$desc' where id='$pid'";
				
				$run_q = mysqli_query($con, $q);
		 
				 if($run_q){
				 
				 echo "<script>alert('Package Has been modified!')</script>";
				 
				 
				 }
			}
		?>
	</form>
</body>
</html>