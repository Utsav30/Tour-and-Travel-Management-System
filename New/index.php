<!DOCTYPE html>
<?php
include("db.php");
  session_start();
?>
<?php
$id=$_SESSION['user']; 
if($id=="Admin"){
	
	echo "<script>alert('You are not user\nLogin as user')</script>";
	echo "<script>window.open('login.php?not_user=You are not an user!','_self')</script>";
}
else {
	if($id!="user"){
	
	echo "<script>alert('login as user')</script>";
	echo "<script>window.open('login.php?not_user=You are not an user!','_self')</script>";
}
else
{

?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Tour and Travel</title>
<link rel="shortcut icon" href="logo.jpg" type="image/jpg">
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet ' href='https://fonts.googleapis.com/css?family=Inconsolata'>
<link rel='stylesheet ' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet ' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body >

    <!--

Follow me on
Dribbble: https://dribbble.com/supahfunk
Twitter: https://twitter.com/supahfunk
Codepen: http://codepen.io/supah/

This example is just for fun.
I realized it for the dailyui challenge
https://dailyui.co/

Fork it if you want, it's free, but I apreciate credits or a retweet

Enjoy :)

-->
<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front">
        <div class="chip"></div>
        <div class="logo">
          <img src="http://cdn.flaticon.com/svg/39/39134.svg" alt="" />
        </div>
        <div class="number"></div>
        <div class="card-holder">
          <label>Card holder</label>
          <div></div>
        </div>
        <div class="card-expiration-date">
          <label>Expires</label>
          <div></div>
        </div>
      </div>
      <div class="back">
        <div class="strip"></div>
        <div class="logo">
          <img src="http://cdn.flaticon.com/svg/39/39134.svg" alt="" />
        </div>
        <div class="ccv">
          <label>CVV</label>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <form class="form" autocomplete="off" novalidate method="POST">
    <fieldset>
      <label for="card-number">Card Number</label>
      <input type="num" id="card-number" class="input-cart-number" name="cn1" maxlength="4" />
      <input type="num" id="card-number-1" class="input-cart-number" name="cn2" maxlength="4" />
      <input type="num" id="card-number-2" class="input-cart-number" name="cn3" maxlength="4" />
      <input type="num" id="card-number-3" class="input-cart-number" name="cn4" maxlength="4" />
    </fieldset>
    <fieldset>
      <label for="card-holder">Card holder</label>
      <input type="text" id="card-holder" />
    </fieldset>
    <fieldset class="fieldset-expiration">
      <label for="card-expiration-month">Expiration date</label>
      <div class="select">
        <select id="card-expiration-month">
          <option selected>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>Jun</option>
          <option>Jul</option>
          <option>Ago</option>
          <option>Sep</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>
        </select>
      </div>
      <div class="select">
        <select id="card-expiration-year">
          <option></option>
		  <?php
			$year=date("Y");
			echo"$year";
			$i=1;
			echo "<option selected>";echo $year;echo "</option>";
			while($i<20)
			{
			echo "<option>";echo $year+$i;echo "</option>";
			$i++;
			}
		  ?>
          
          
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="card-ccv">CVV</label>
      <input type="password" id="card-ccv" maxlength="3" name ="cvv"/>
    </fieldset>
    <button class="btn" name="pay"><i class="fa fa-lock"></i> submit</button>
  </form>
  <?php
  include("db.php");
  
		if(isset($_POST['pay']))
		{
			global $con;
			$cn1=$_POST['cn1'];
			$cn2=$_POST['cn2'];
			$cn3=$_POST['cn3'];
			$cn4=$_POST['cn4'];
			$cvc=$_POST['cvv'];
			$a=ctype_digit($cn1);
			$b=ctype_digit($cn2);
			$c=ctype_digit($cn3);
			$d=ctype_digit($cn4);
			$e=ctype_digit($cvc);
			
			if($a and $b and $c and $d and $e and strlen($cn1)==4 and strlen($cn2)==4 and strlen($cn3)==4 and strlen($cn4)==4 and strlen($cvc)==3)
			{
				
				
				
						mysqli_begin_transaction($con, MYSQLI_TRANS_START_READ_WRITE);

						$pid=$_SESSION['pid'];
						
						mysqli_autocommit($con, FALSE);
						$q="update package_booking set payment=1 where booking_id=$pid";
						
						$result = mysqli_query($con,$q);
						if ( !$result ) {
							mysqli_rollback($con);
							mysqli_autocommit($con, TRUE);
						}
						$_SESSION['id']=$_SESSION['pid'];
						unset($_SESSION['pid']);
						if(isset($_SESSION['pid']))
						{
							mysqli_rollback($con);
							mysqli_autocommit($con, TRUE);
						}
						
						mysqli_commit($con);

						mysqli_autocommit($con, TRUE);
						echo "<script>window.open('../pdf/fpdf17/invoice.php','_self')</script>";
					
			}
			else
			{
				echo "<script>alert('Information Incorrect ')</script>";
				
			}
		}
  ?>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
<?php
}
}
?>