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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	background-color:#fff;
}

td, th {
    border: 3px solid #dddddd;
    text-align: center;
    padding:8px;
	padding-left:0%;
	margin-left:20%;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<!--
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
-->
<div id="id01" >
  
  <form class="modal-content" method="POST" >
    <!--
	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>
	-->
	<h2 class="userlogin">View Coupon</h2>
    <div class="container">
	
	<table width=100%>
		<tr align="center">
		<th>S.N</th>
		<th>Copoun Code</th>
		<th>Discount %</th>
		<th>Details</th>
		<th>Remove</th>
	</tr>
	<?php
		global $con;
		$get_c = "select * from coupon ";
		
		$run_c = mysqli_query($con, $get_c); 
		
		$i = 0;
		
		while ($row_c=mysqli_fetch_array($run_c))
		{
			
			$c_uname = $row_c['code'];
			$c_name = $row_c['off'];
			$i++;
		
		?>
		<tr align="center">
			<td> <?php echo $i?></td>
			<td name="user"><?php echo $c_uname?></td>
			<td> <?php echo $c_name?></td>
			<td><a href="admin_account.php?edit_coupon=<?php echo $c_uname; ?> " style="text-decoration: none;"><button type="button"  name ="save" ><b>Edit</b></button></a></td>
			<td><a href="delete_coupon.php?delete_id=<?php echo $c_uname;?>" style="text-decoration: none;" ><button type="button" class="cancelbtn" name ="delete"><b>Delete</b></button></a></td>
			
			
			
		</tr>
		<?php
		} 
		
	?>
      </table>
      <!--
	  <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
	  --
	  <div class="container" style="background-color:#f1f1f1">
		
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
