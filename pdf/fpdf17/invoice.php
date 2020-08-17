
<?php
//call the FPDF library
require('fpdf.php');
include('../../db.php');



session_start();


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


						$id=$_SESSION['id'];
						$q="select * from package_booking where booking_id=$id";
						$run=mysqli_query($con, $q); 
						$row=mysqli_fetch_array($run);
						//A4 width : 219mm
						//default margin : 10mm each side
						//writable horizontal : 219-(10*2)=189mm

						//create pdf object
						$pdf = new FPDF('P','mm','A4');
						//add new page
						$pdf->AddPage();
						//output the result

						//set font to arial, bold, 14pt
						$pdf->Cell(130 ,10,'',0,1);//logo
						$pdf->SetFont('Arial','B',14);

						//Cell(width , height , text , border , end line , [align] )

						
							$pdf->Cell(130 ,5,'INVOICE',0,1);//end of line

							//set font to arial, regular, 12pt
							$pdf->SetFont('Arial','',12);


							$pdf->Cell(25 ,5,'Date',0,0);
						$pdf->Cell(34 ,5,date("d/m/Y"),0,1);//end of line

						
						$pdf->Cell(25 ,5,'Invoice No. :',0,0);
						$pdf->Cell(34 ,5,$id,0,1);//end of line

						
						$pdf->Cell(25 ,5,'Customer ID: ',0,0);
						$pdf->Cell(34 ,5,$row['username'],0,1);//end of line
						$pdf->Cell(130 ,10,'',0,1);
						//make a dummy empty cell as a vertical spacer
						$pdf->Cell(130 ,10,'Recepitent',0,1);//end of line

						$u=$row['username'];
						$qu="select * from user where username='$u'";
						$runu=mysqli_query($con,$qu);
						$rowu=mysqli_fetch_array($runu);
						$BDate = date("d-m-Y", strtotime($row['booking_date']));
						$pdf->Cell(10 ,5,'',0,0);
						$pdf->Cell(40 ,5,'Name',0,0);
						$pdf->Cell(90 ,5,$rowu['name'],0,1);

						$pdf->Cell(10 ,5,'',0,0);
						$pdf->Cell(40 ,5,'Email',0,0);
						$pdf->Cell(90 ,5,$rowu['email'],0,1);

						$pdf->Cell(10 ,5,'',0,0);
						$pdf->Cell(40 ,5,'Address',0,0);
						$pdf->Cell(90 ,5,$rowu['address'],0,1);

						$pdf->Cell(10 ,5,'',0,0);
						$pdf->Cell(40 ,5,'Booking Date',0,0);
						$pdf->Cell(90 ,5,$BDate,0,1);

						//make a dummy empty cell as a vertical spacer
						$pdf->Cell(189 ,20,'',0,1);//end of line

						//invoice contents
						$pdf->SetFont('Arial','B',12);

						$pdf->Cell(80 ,20,'Package Name',1,0,'C');
						$pdf->Cell(25 ,20,'Base Price',1,0,'C');
						$pdf->Cell(25 ,20,'Group',1,0,'C');//end of line
						$pdf->Cell(29 ,20,'Discount',1,0,'C');
						$pdf->Cell(34 ,20,'Amount',1,0,'C');//end of line
						$pdf->Cell(10 ,20,'',0,1);

						$pdf->SetFont('Arial','',12);

						//Numbers are right-aligned so we give 'R' after new line parameter
						$p=$row['package_id'];
						$qp="select * from package where id=$p";
						$runp=mysqli_query($con,$qp);
						
						$rowp=mysqli_fetch_array($runp);
						$group=$row['group_size'];
						if($group==1)
						{
							$g="1-3";
						}
						else if($group==2)
						{
							$g="4-6";
						}
						else{

							$g="7-10";
						}
						$discount=($rowp['price']*$group)-$row['amount'];
						$pdf->Cell(80 ,10,$rowp['name'],1,0);
						$pdf->Cell(25 ,10,$rowp['price'],1,0);
						$pdf->Cell(25 ,10,$g,1,0);//end of line
						$pdf->Cell(29 ,10,$discount,1,0);
						$pdf->Cell(34 ,10,$row['amount'],1,0);//end of line
						$pdf->Cell(10 ,10,'',0,1);



						//summary
						$pdf->Cell(80 ,10,'',0,0);
						//$pdf->Cell(14 ,10,'Total',0,0);
						$pdf->Cell(79 ,10,'Total (Rs)',1,0);
						$pdf->Cell(34 ,10,$row['amount'],1,1);//end of line

						$pdf->Cell(189 ,20,'',0,1);//end of line
						$pdf->SetFont('Arial','B',14);
						$pdf->Cell(130 ,5,'Terms & Conditions:',0,1);
						$pdf->SetFont('Arial','',12);
						$pdf->Cell(130 ,5,'* All payments on the Website are secured.',0,1);
						$pdf->Cell(130 ,5,'* Whenever you change or access your account information, we offer the use of a secure server.',0,1);
						$pdf->Cell(130 ,5,'* All payments on the Website are secured.',0,1);
						$pdf->Cell(130 ,5,'* Once your information is in our possession we adhere to strict security guidelines.',0,1);

						$pdf->Cell(189 ,20,'',0,1);//end of line
						$pdf->SetFont('Arial','B',14);
						$pdf->Cell(20 ,5,'NOTE:',0,0);
						$pdf->SetFont('Arial','',12);
						$pdf->Cell(155 ,5,' Our Privacy Policy is subject to change at any time without notice.',0,1);



						$pdf->Cell(189 ,20,'',0,1);//end of line
						$pdf->Cell(130 ,10,'TOUR TRAVEL PVT. LTD.',0,1);
						$pdf->SetFont('Arial','',12);
						$pdf->Cell(130 ,5,'741,BH - 3',0,1);
						$pdf->Cell(130 ,5,'IIIT-A, JHALWA',0,1);
						$pdf->Cell(130 ,5,'PIN - 211012',0,1);
						$pdf->Cell(189 ,10,'',0,1);//end of line
						$pdf->SetTextColor(6,74,121);
						$pdf->Cell(189 ,5,'We wish you a HAPPY & PROSPEROUS journey',0,1,'C');

												
						
						
						

						$pdf->Output();
}
}

?>