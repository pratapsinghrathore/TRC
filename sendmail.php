<?php 
session_start();

include("class.phpmailer.php");


$_SESSION['qcont_post']=$_REQUEST;



if ($_REQUEST["enter_code"] != $_SESSION["vercode"])  
{ 
	 //echo $errmsg='Please enter security code properly!';
	 header('location:index.php?err=0');
}else{

	$mail = new PHPMailer();
	$name=$_REQUEST['name'];
	$comments=$_REQUEST['comments'];

   $confirmbody.='<table width="50%" border="0" cellspacing="0" cellpadding="0" style="border:2px outset #565656; background-color:#FDFDFD;">
				  <tr>
					<td colspan="3" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:14px; text-align:center; padding:10px; color:#2A7FFF; font-weight:bold;">How do You Like Your Tea</td>
				  </tr>
				  <tr>
					<td width="24%" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; padding:5px;" align="left"><strong>Name</strong></td>
					<td width="1%" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; padding:5px;" align="center">:</td>
					<td width="75%" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; padding:5px;">'.$name.'</td>
				  </tr>
				  <tr>
					<td colspan="3">&nbsp;</td>
				  </tr>
				  <tr>
					<td width="24%" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; padding:5px;" align="left"><strong>Comments</strong></td>
					<td width="1%" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; padding:5px;" align="center">:</td>
					<td width="75%" style="font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px; padding:5px;">'.$comments.'</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>';
			
			unset($_SESSION['qcont_post']);
			
		/*$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";			// Additional headers		
		$headers .= 'From: <The Tea Room Co.>info@thetearoomco.com <info@thetearoomco.com> '."\r\n";*/
		$subject=" Quick Feedback From  ".$name;
		
		
			$mail->IsSMTP(); 							// telling the class to use SMTP
			$mail->Host = "mail.thetearoomco.com"; 		// SMTP server
			$mail->SMTPAuth = true;
			$mail->Username = "info@thetearoomco.com";
			$mail->Password = "India@123";			
			
			$mail->From = 'info@thetearoomco.com';			
			$mail->FromName = 'The Tea Room Co.info@thetearoomco.com';
			
			$mail->AddAddress('info@thetearoomco.com');
			$mail->AddBCC("tearoomfeedback@gmail.com");
			//$mail->AddCC("abhishek@agtsindia.com");
			
			$mail->Subject = $subject;
			$mail->MsgHTML($confirmbody);
			$mail->WordWrap = 50;
			$mail->Send();
		
	 //mail('abhishek@agtsindia.com', $subject, $confirmbody, $headers);
	 
	 header('location:index.php?s=1');
}	 

  ?>
