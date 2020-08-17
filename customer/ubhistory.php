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
	<h2 class="userlogin">Booking History</h2>
    <div class="container">
	
	<table width=100%>
		<tr align="center">
		<th width=10%>S.N</th>
		<th  width=15%>Booking Date</th>
		<th  width=25%>Username</th>
		<th width=40%>Package Name</th>
		<th width=20%>Details</th>
		
	</tr>
	<?php
		global $con;
		$id=$_SESSION['username'];
		$get_c = "select * from package_booking where username='$id' and payment=1";
		
		$run_c = mysqli_query($con, $get_c); 
		
		$i = 0;
		
		while ($row_c=mysqli_fetch_array($run_c))
		{
			
			$c_uname = $row_c['booking_date'];
			$c_name = $row_c['username'];
			$p_id = $row_c['package_id'];
			$id=$row_c['booking_id'];
			$qp="select * from package where id=$p_id";
			$runp=mysqli_query($con, $qp); 
			$row=mysqli_fetch_array($runp);
			$p_name = $row['name'];
			$i++;
		
		?>
		<tr align="center">
			<td> <?php echo $i?></td>
			<td name="user"><?php echo $c_uname?></td>
			<td> <?php echo $c_name?></td>
			<td> <?php echo $p_name?></td>
			<td><a href="../pdf/fpdf17/history.php?book=<?php echo $id; ?> " style="text-decoration: none;"><button type="button"  name ="save" ><b>View</b></button></a></td>
			
			
			
			
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
