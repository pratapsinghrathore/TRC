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
$(function(){$('#a0').addClass('active');});
$(function(){$('#b0').addClass('active');});
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
<div class="body_bot_left"><p class="tea_room">Welcome to The Tea Room  Co.</p>
<p class="tea_pic"><img src="images/tea.jpg" width="194" height="89" alt="" /></p>
<p class="pro_text">The Tea Room is an exciting new concept in the burgeoning tea industry. Not only is
tea the wave of the future but The Tea Room will be the first of its kind tea destination
in Gurgaon and will offer a hip, relaxing and healthy alternative to the over saturated
coffee house concept. The Tea Room will create an irresistible haven to drop in and
relax, meet with friends or get work done in a warm and comfortable atmosphere with
consistently top-notch customer service.
<br />
<br />
Our products and services will include a wide variety of high quality white, green,
black and oolong teas as well as several teas specially blended for The Tea Room from
tea plantations all over the world. The tea menu will highlight beverages that provide
particular benefits such as immune-boosting oxidants, meditative blends,
enlightening mental focus blends and mind and body healing blends.<br />
<br />
We will offer approx. 20 different teas at a time, each with various mental or health
benefits accompanied by a variety of quick and healthful meals and snacks. In addition
to the food and beverage menu items our product mix will include tea-related items
such as loose leaf teas, tea infused chocolates, tea pots and other tea related accessories.</p>
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
