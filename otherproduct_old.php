<?
session_start();
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
$(function(){$('#a3').addClass('active');});
$(function(){$('#b3').addClass('active');});
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
<div class="body_bot_left"><p class="tea_room">Product &amp; Services</p>
<p class="tea_pic"><img src="images/teabever.png" width="194" height="89" alt="" /></p>
<p class="pro_head">Tea &amp; Related Bevereages</p><br />

  <p class="pro_head"><a href="teabeverages.php">Click here to See the Product</a></p>
<div class="clr"></div>
<p class="tea_pic"><img src="images/bakery.png" width="194" height="89" alt="" /></p>
<p class="pro_head">BAKERY PRODUCTS</p>
<p class="pro_text">Fresh, warm bakery products shall be available at the outlet all day.</p>
<div class="clr"></div>
<p class="tea_pic" style="height:135px;"><img src="images/bread.png" width="194" height="89" alt="" /></p>
<p class="pro_head">BREADS</p>
<p class="pro_text">Croissants<br />
Subs<br />
Panini<br />
Sandwich breads<br />
Baguettes in various flavors like  garlic, masala, thyme, multigrain available always. <br />
A new ‘chef’s special bread’ available every day.<br />
 </p>
<div class="clr"></div>
<p class="tea_pic" style="height:210px;"><img src="images/desertcakes.png" width="194" height="89" alt="" /></p>
<p class="pro_head">DESSERTS</p>
<p class="sub_head">Cakes</p>
<p class="pro_text">
Dry tea cakes<br />
Cream cakes <br />
Cheese cakes<br />
Warm apple pies <br />
Cold soufflés <br />
Tarts <br />
Cream rolls <br />
Eclairs. <br />
All freshly baked and available at a regular basis.

</p>
<div class="clr"></div>
<p class="tea_pic" style="height:250px;"><img src="images/Light-snacks.png" width="194" height="89" alt="" /></p>
<p class="pro_head">LIGHT SNACKS / HEALTH FOODS</p>
<p class="sub_head">Cup of Soup</p>
<p class="sub_head">Bowl of Soup</p>
<p class="sub_head">Mini Meals</p>
<p class="pro_text">Cup of soup with Garlic bread and single desert sampler.<br />
Cup of soup with Tea Sandwich and single desert sampler.<br />
2Bacon/2Sausage with 2 Fried Eggs or Bacon with brie (served with a pot of home made chutncy)<br />
Omlette served with tossed green salad plain or with one filling
Choose from ham, mushroom or cheese.<br />
Chai - Pakoda - Delicious Indian Pakods baked to perfection with a freshly steeped pot of tea<br />

(served with a pot of home made chutncy)
</p>

<div class="clr"></div>

</div>
<?php include('inc/rightbody.php');?>
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
