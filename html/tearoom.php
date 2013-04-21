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
$(function(){$('#a1').addClass('active');});
$(function(){$('#b1').addClass('active');});
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
<div class="body_bot_left"><p class="tea_room">About Tea Room</p>
<p class="tea_pic"><img src="images/tea.jpg" width="194" height="89" alt="" /></p>
<p style="height:120px;"></p>
<p class=" working"><img src="images/working.png" width="126" height="22" alt="" /></p>

<p class="pro_head">Mridu Gupta (M.D.)</p>
<p class="pro_text">Mridu Gupta
 is the brain behind the Tea room Co. Working with a no.
 of causes,She has made immense contributions to the welfare of the 
underprivileged.Having in the past, established sucessful
fashion & F & b outlets-Rendezvous.</p>
<p class="pro_head">Amitabh Singh </p>
<p class="pro_text">An IHM Graduate, Having
more than 15 yrs of rich experience in 
conceptualizing,establishing and managing 
international F & B brands like Wimpys,Domionos,
Barista, & Choko La.</p>
<p class=" working"><img src="images/coreteam.png" width="101" height="19" alt="" /></p>
<p class="pro_head">Mridu Gupta (M.D.)</p>
<p class="pro_text">Mridu Gupta is the brain behind the Tea room Co. Working with a no. of causes,She has made immense contributions to the welfare of the underprivileged.Having in the past, established sucessful fashion & F & b outlets-Rendezvous.</p>
<p class="pro_head">Anuj Gupta (Director)</p>
<p class="pro_head">Paul Anthony (Promoter)</p>
<p class="pro_text">An IIT,IIM Graduate, Worked with HP for 16 years
in a Senior corporate level, Currently at 'Cignex' 
with operations in USA, Singapore,Thailand,India,
Malasia & Expanding.</p>
<!--<p class="more"><a href="#">more</a></p>-->
</div>
<?php include('inc/rightbody.php');?>
</div>
<!--mainbodyend-->
<div><img src="images/bdy_bot.png" width="976" height="18" alt="" /></div>
</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
<?php include('inc/footer.php');?>
</body>
</html>
