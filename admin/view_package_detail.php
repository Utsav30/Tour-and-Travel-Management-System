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
	$pid=$_GET['view_package_detail'];
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
		$pkeyword=$row_q['keyword'];
		$pdetail=$row_q['detail'];
		$pdesc=$row_q['description'];
	}
?>
	
<body style="background-color:#9999999!important">
	<form class="modal-content" action="" method="post" enctype="multipart/form-data"> 
		<div style="background-color:#9999999!important">
			<h2 class="userlogin"><?php echo"$pname";?></h2>
			<img src="../package_images/<?php echo $ppimage; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px; margin-bottom:5px; border-radius: 25px;">
		</div>
		<div class="container">
			<div>
				<h2><u>Base Price:</u><?php echo" $pprice";?></h2>
			</div>
			<div>
				<h2>About...</h2>
				<p><?php echo"$pdetail";?></p>
			</div>
			<div>
				<h2>Tour Details</h2>
				<p><?php echo"$pdesc";?></p>
			</div>
		</div>
		
	</form>
</body>
</html>