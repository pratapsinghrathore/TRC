<?
session_start();

include("dbconfig.inc.php");
include("class.phpmailer.php");

$act=($_REQUEST['act']=="")?"":$_REQUEST['act'];

 $random_id_length = 6;
 //generate a random id encrypt it and store it in $rnd_id
 $rnd_id = (uniqid(rand(),1));
 //to remove any slashes that might have come
 $rnd_id = strip_tags(stripslashes($rnd_id));
 //Removing any . or / and reversing the string
 $rnd_id = str_replace(".","",$rnd_id);
 $rnd_id = strrev(str_replace("/","",$rnd_id));
 //finally I take the first 10 characters from the $rnd_id
 $rnd_id = strtoupper(strtolower(substr($rnd_id,0,$random_id_length)));

$add_date=@date('Y-m-d h:i:s');

switch($act)
{
	case md5("contact_post"):
	
		$_SESSION['con_post']=$_REQUEST;
	
		$mail = new PHPMailer();
		$mail_1 = new PHPMailer();
	
		$Qans_1=$_REQUEST['Qans_1'];
		$Qans_2=$_REQUEST['Qans_2'];
		$Qans_3=$_REQUEST['Qans_3'];
		$Qans_4=$_REQUEST['Qans_4'];
		$Qans_5=$_REQUEST['Qans_5'];
		$Qans_6=$_REQUEST['Qans_6'];
		
		
		$q1='1. How often in the day do you drink tea?';
		$q2='2. What kind of tea do you drink?';
		$q3='3. What, in your view, is a good accompaniment to tea?';
		$q4='4. Have you tried meditative, stress relieving or any such healing tea? Where?';
		$q5='5. Do you have any innovative recipe for tea that you would like to share?';
		$q6='6. What kind of an atmosphere do you associate with your cuppa tea/what kind of an ambience wd you like to sit in while drinking your cup of tea?';
		
			$con_name=$_REQUEST['con_name'];
			$con_ph=$_REQUEST['con_ph'];
			$con_email=$_REQUEST['con_email'];
			$con_city=$_REQUEST['con_city'];
			
		if ($_REQUEST["enter_code"] != $_SESSION["vercode"])  
		{ 
			$errMsg="Please enter code properly";
		
		}else{
			
				$sql_insert="INSERT INTO feedback_user SET q1='$q1',q2='$q2',q3='$q3',q4='$q4',q5='$q5',q6='$q6',ans1='$Qans_1',ans2='$Qans_2',ans3='$Qans_3',ans4='$Qans_4',ans5='$Qans_5',ans6='$Qans_6'
							,name='$con_name',email='$con_email',ph='$con_ph',city='$con_city',add_date='$add_date'";
				mysql_query($sql_insert);
			
			
			$confirmbody.='<table width="50%" style="border:1px outset #565656; background-color:#FDFDFD;" height=586>
						<tr>
							<td height="17" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; color:#2A7FFF; font-weight:bold;">
							Give Your Feedback &amp; Earn your free cup of Tea</td>
  						</tr>
						  <tr>
							<td height="33" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">1. How often in the day do you drink tea?</td>
  						</tr>
						  <tr>
							<td height="31" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_1.'</td>
						  </tr>
						  <tr>
							<td height="31" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">2. What kind of tea do you drink?</td>
  						</tr>
						  <tr>
							<td height="29" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_2.'</td>
  						</tr>
						  <tr>
							<td height="36" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">3. What, in your view, is a good accompaniment to tea?</td>
  						</tr>
						  <tr>
							<td height="26" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_3.'</td>
  						</tr>
						  <tr>
							<td height="37" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">4. Have you tried meditative, stress relieving or any such healing tea? Where?</td>
  							</tr>
						  <tr>
							<td height="23" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_4.'</td>
  							</tr>
						  <tr>
							<td height="32" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">5. Do you have any innovative recipe for tea that you would like to share?</td>
  						</tr>
						  <tr>
							<td height="25" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;  padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_5.'</td>
  						</tr>
						  <tr>
							<td height="33" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">
									6. What kind of an atmosphere do you associate with your cuppa tea/what kind of an ambience wd you like to sit in while drinking your cup of tea?</td>
  						</tr>
						  <tr>
							<td height="28" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding-left:15px;">Ans.&nbsp;&nbsp;'.$Qans_6.'</td>
  						</tr>
						  <tr>
							<td height="21">&nbsp;</td>
  							</tr>
						  <tr>
							<td height="36" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:center; padding:10px; color:#2A7FFF; font-weight:bold;">
										Personal Information</td>
  							</tr>
						  <tr>
							<td height="20"><div>
							  <table width="50%" border="0"  style="border:2px outset #565656; background-color:#FDFDFD;">
							 
							  <tr>
								<td width="24%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="left"><strong>Name</strong></td>
								<td width="1%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="center">:</td>
								<td width="75%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">'.$con_name.'</td>
							  </tr>
							  <tr>
								<td width="24%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="left"><strong>Phone</strong></td>
								<td width="1%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="center">:</td>
								<td width="75%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">'.$con_ph.'</td>
							  </tr>
							  <tr>
								<td width="24%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="left"><strong>Email</strong></td>
								<td width="1%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="center">:</td>
								<td width="75%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">'.$con_email.'</td>
							  </tr>
							  <tr>
								<td width="24%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="left"><strong>City</strong></td>
								<td width="1%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;" align="center">:</td>
								<td width="75%" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; padding:5px;">'.$con_city.'</td>
							  </tr>
							</table>
							</div>
							</td>
						  </tr>
						</table>';
			unset($_SESSION['con_post']);
				//echo $confirmbody;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		// Additional headers		
		$headers .= 'From: <The Tea Room Co.>info@thetearoomco.com <info@thetearoomco.com>'."\r\n";
		$subject=" Website Feedback ";
		
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
			//$mail->Send();
				
		
			/*$retmail_1=mail('abhishek@agtsindia.com', $subject, $confirmbody, $headers);
			$retmail_2=mail('pradeeppathak07@gmail.com', $subject, $confirmbody, $headers);*/
			
				if($mail->Send())
				{
							//echo 'admin mail send...';
					$headers1  = 'MIME-Version: 1.0' . "\r\n";
					$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";		// Additional headers		
					$headers1 .= 'From:info@thetearoomco.com <info@thetearoomco.com> '."\r\n";
					
					$subject1="Free cup of Tea from The Tea Room Co.";
						
						$content2.='<div style="width:50%;margin:0 auto;position:relative;">
								  <img src="http://www.thetearoomco.com/token.jpg" width="718" height="316" alt="" />
								  <div style="position:absolute; width:200px; height:32px; left:506px; top:6px; display:block;"><strong>TRCVO</strong>&nbsp;&nbsp;'.$rnd_id.'</div>
								  <div style="position:absolute; width:405px; height:19px; left:20px; top:292px; display:block;">
								  <span style="color:#FF0000">*</span>&nbsp;Offer expires on <strong>31st March 2011</strong></div> 
								  </div>';
							
							
							$mail_1->IsSMTP(); 							// telling the class to use SMTP
							$mail_1->Host = "mail.thetearoomco.com"; 		// SMTP server
							$mail_1->SMTPAuth = true;
							$mail_1->Username = "info@thetearoomco.com";
							$mail_1->Password = "India@123";			
							
							$mail_1->From = 'info@thetearoomco.com';			
							$mail_1->FromName = 'The Tea Room Co.info@thetearoomco.com';
							
							$mail_1->AddAddress($con_email);
							
							$mail_1->Subject = $subject1;
							$mail_1->MsgHTML($content2);
							
							$mail_1->WordWrap = 50; 
							$mail_1->Send();
							
							
							$mail->Subject = $subject1;
							$mail->MsgHTML($content2);
							$mail->WordWrap = 50;
							$mail->Send();
							
					//$retmail_1=mail($con_email, $subject1, $content, $headers1);
					// user mail send...	
				}
header("location:thanks.php");
	}
	break;

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Tea Room Co</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]><link href="css/IE6default.css" rel="stylesheet" type="text/css" /><![endif]-->

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){$('#a4').addClass('active');});
$(function(){$('#b4').addClass('active');});
</script>

<script type="text/javascript">
function contact_submit()
{
	var frm=document.frm_con;
	var wspace=new RegExp(/\s+$/);
	var remail=/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	
	var Qans_1=frm.Qans_1.value;
	var Qans_2=frm.Qans_2.value;
	var Qans_3=frm.Qans_3.value;
	var Qans_4=frm.Qans_4.value;
	var Qans_5=frm.Qans_5.value;
	var Qans_6=frm.Qans_6.value;
	
	var con_name=frm.con_name.value;
	var con_ph=frm.con_ph.value;
	var con_email=frm.con_email.value;
	var con_city=frm.con_city.value;
	var code=frm.enter_code.value;
	
	if(Qans_1=="" || wspace.test(Qans_1))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_1.focus();
		return false;
	}
	else if(Qans_2=="" || wspace.test(Qans_2))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_2.focus();
		return false;
	}
	else if(Qans_3=="" || wspace.test(Qans_3))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_3.focus();
		return false;
	}
	else if(Qans_4=="" || wspace.test(Qans_4))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_4.focus();
		return false;
	}
	else if(Qans_5=="" || wspace.test(Qans_5))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_5.focus();
		return false;
	}
	else if(Qans_6=="" || wspace.test(Qans_6))
	{
		alert("You forgot to enter 'Answer!'");
		frm.Qans_6.focus();
		return false;
	}
	else if(con_name=="" || wspace.test(con_name))
	{
		alert("You forgot to enter 'Name'");
		frm.con_name.focus();
		return false;
	}
	else if(con_ph=="" || wspace.test(con_ph))
	{
		alert("You forgot to enter 'Phone'");
		frm.con_ph.focus();
		return false;
	}
	else if(con_ph!="" && isNaN(con_ph))
	{
		alert("You forgot to enter 'Phone' properly");
		frm.con_ph.focus();
		return false;
	}
	else if(con_email=="" || wspace.test(con_email))
	{
		alert("You forgot to enter 'Email'");
		frm.con_email.focus();
		return false;
	}
	else if(!remail.test(con_email))
	{
		alert("You forgot to enter 'Email' properly");
		frm.con_email.focus();
		return false;
	}
	else if(con_city=="" || wspace.test(con_city))
	{
		alert("You forgot to enter 'City'");
		frm.con_city.focus();
		return false;
	}
	else if(code=="" || wspace.test(code)){
		alert("You forgot to enter 'Code'");
		frm.enter_code.focus();
		return false;	
	}
	else
	{
		return true;	
	}
}
</script>
</head>

<body class="back">
<div class="mainwraper">
<!--mainbody-->
<div class="body_bg">
 <div class="logo"><a href="index.php"><img src="images/logo.jpg" width="155" height="99" alt="" /></a></div>
 <?php include('inc/navi.php');?>
 <div class="flash">
   <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="909" height="323">
     <param name="movie" value="flash/banner.swf" />
     <param name="quality" value="high" />
     <param name="wmode" value="opaque" />
     <param name="swfversion" value="6.0.65.0" />
     <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
     <param name="expressinstall" value="Scripts/expressInstall.swf" />
     <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
     <!--[if !IE]>-->
     <object type="application/x-shockwave-flash" data="flash/banner.swf" width="909" height="323">
       <!--<![endif]-->
       <param name="quality" value="high" />
       <param name="wmode" value="opaque" />
       <param name="swfversion" value="6.0.65.0" />
       <param name="expressinstall" value="Scripts/expressInstall.swf" />
       <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
       <div>
         <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
         <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
       </div>
       <!--[if !IE]>-->
     </object>
     <!--<![endif]-->
   </object>
 </div>
</div>
<div class="body_bot">

<div class="conleft"><p class="tea_room">Contact Us</p>
<p><img src="images/conatact.jpg" width="196" height="91" alt="" /></p>
<div class="quick"><p class="tea_quick">Quick Link</p>
<p class="share"><a href="#">Share Your Feedback</a></p>
<p class="share">Find Us On</p>
<p class="facebook"><a href="#"><img src="images/facebook.png" width="24" height="24" alt="" /></a></p>
<p class=" twiter"><a href="#"><img src="images/twiter.png" width="24" height="24" alt="" /></a></p>
<p class=" twiter"><a href="http://www.linkedin.com/companies/the-tea-room-co" target="_blank"><img src="images/linked.png" width="24" height="24" alt="" /></a></p>
 </div>
 <div class="clr"></div>
 <p class="con_add">Phone No. - +919873325515<br />
email id - <a href="mailto:email id-info@thetearoomco.com?subject=Contact Us">info@thetearoomco.com</a></p>
</div>
<div class="conright">
<p class="tea_room">Give Your Feedback &amp; Earn your free cup of Tea</p>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" id="frm_con" name="frm_con" onsubmit="return contact_submit();">
	<input type="hidden" name="act" id="act" value="<?=md5("contact_post");?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?
if(isset($errMsg) && !empty($errMsg)){
?>
  <tr>
    <td colspan="2" align="left" valign="top" style="color:#FF0000; font-size:14px; text-align:center;"><?=$errMsg;?></td>
  </tr>
<?
}
?>
  <tr>
    <td width="450" align="left" valign="top"><p class="veg_text_con">How often in the day do you drink tea?</p></td>
    <td><textarea name="Qans_1" id="Qans_1" cols="" rows="" class="con_text_box4"><?=$_SESSION['con_post']['Qans_1']?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p class="veg_text_con">What kind of tea do you drink?</p></td>
    <td align="left" valign="top"><textarea name="Qans_2" id="Qans_2" cols="" rows="" class="con_text_box4"><?=$_SESSION['con_post']['Qans_2']?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p class="veg_text_con">What, in your view, is a good accompaniment to tea?</p></td>
    <td align="left" valign="top"><textarea name="Qans_3" id="Qans_3" cols="" rows="" class="con_text_box"><?=$_SESSION['con_post']['Qans_3']?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p class="veg_text_con">Have you tried meditative, stress relieving or any such healing tea? Where?</p></td>
    <td align="left" valign="top"><textarea name="Qans_4" id="Qans_4" cols="" rows="" class="con_text_box"><?=$_SESSION['con_post']['Qans_4']?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p class="veg_text_con"> Do you have any innovative recipe for tea that you would like to share?</p></td>
    <td align="left" valign="top"><textarea name="Qans_5" id="Qans_5" cols="" rows="" class="con_text_box"><?=$_SESSION['con_post']['Qans_5']?></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top"><p class="veg_text_con"> What kind of an atmosphere do you associate with your cuppa tea/what kind of an ambience wd you like to sit in while drinking your cup of tea?</p></td>
    <td align="left" valign="top"><textarea name="Qans_6" id="Qans_6" cols="" rows="" class="con_text_box"><?=$_SESSION['con_post']['Qans_6']?></textarea></td>
  </tr>
  <tr>
  <td colspan="2"><p class="pro_head">Personal Information</p></td>
  </tr>
  <tr >
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="110" align="left" valign="top"><p class="con_name2">Name :</p></td>
    <td width="230" align="left" valign="top"><input name="con_name" type="text" id="con_name"  class="con_box" value="<?=$_SESSION['con_post']['con_name']?>"/></td>
    <td width="110" align="left" valign="top"><p class="con_name2">Phone :</p></td>
    <td align="left" valign="top"><input name="con_ph" type="text" id="con_ph"  class="con_box" value="<?=$_SESSION['con_post']['con_ph']?>"/></td>
  </tr>
  <tr>
   <td width="100" align="left" valign="top"><p class="con_name2">Email :</p></td>
    <td width="220" align="left" valign="top"><input name="con_email" type="text" id="con_email"  class="con_box" value="<?=$_SESSION['con_post']['con_email']?>"/></td>
    <td width="100" align="left" valign="top"><p class="con_name2">City :</p></td>
    <td width="220" align="left" valign="top"><input name="con_city" type="text" id="con_city"  class="con_box" value="<?=$_SESSION['con_post']['con_city']?>"/></td>
  </tr>
  <tr>
    <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="110"><p class="con_name2">Verification :</p></td>
    <td width="120"><img src="spam_image2.php"  height="23" /></td>
    <td width="220"><input name="enter_code" type="text" id="enter_code"  class="con_box"/></td>
    <td>
    <!--<a href="#" onclick="javascript:contact_submit();return false;">
    <input name="yourme" type="image" id="yourme" src="images/submit.png" class="con_sub" />
    </a>-->
    	
    <!--<input type="submit" value="" style="background-image:images/submit.png no-repeat" />-->
    <input type="submit" name="ins_occ_wise_data" id="ins_occ_wise_data"  style=" background-image:url(images/submit.png); width:67px; height:21px; border:none; cursor:pointer;" value="    "  />
    </td>
  </tr>
</table></td> 
  </tr>
</table></td>
  </tr>
</table>

</form>

</div>

</div>
<!--mainbodyend-->
<div><img src="images/bdy_bot.png" width="976" height="18" alt="" /></div>
</div>
<script type="text/javascript">
<!--
//swfobject.registerObject("FlashID");
//-->
</script>
<?php include('inc/footer.php');?>
</body>
</html>
