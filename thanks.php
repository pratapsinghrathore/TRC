<?
session_start();


$act=($_REQUEST['act']=="")?"":$_REQUEST['act'];


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
<table width="100%" border="0" cellspacing="0" cellpadding="0" >

 
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top" >
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >
    	<p class="thanks_veg_text_con">Thank you for your valuable Feedback to us.</p>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" ><p class="thanks_veg_text_con">Please check your email.</p></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12">
    <p class="thanks_veg_text_con">
    Bring a printout of the token to any of The Tea Room Co. outlets for your Free Cup of Tea.</p>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" height="12"></td>
  </tr>
  
  <tr>
    <td colspan="2" align="left" valign="top" ><p class="thanks_veg_text_con">Thank You again.</p></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2" align="left" valign="top" ><p class="thanks_veg_text_con">The Tea Room Co. Team</p></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top" >
    <p class="thanks_veg_text_con"><span style="color:#FF0000">*</span>&nbsp;Offer expires on 31st March 2011</p>
    </td>
  </tr>
   <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
</table>
</td> 
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
