<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/nav.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]><link href="../css/IE6default.css" rel="stylesheet" type="text/css" /><![endif]-->

<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
//$(function(){$('#a0').addClass('active');});
//$(function(){$('#b0').addClass('active');});
</script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body class="back">
<div class="mainwraper">
<!--mainbody-->
<div class="body_bg">
 <div class="logo"><a href="index.php"><img src="../images/logo.jpg" width="155" height="99" alt="" /></a></div>
 <?php //include('../inc/navi.php');?>
 <div class="icon_nav">
 <div><ul class="icon">
 <li><a href="../index.php"><img src="../images/home.jpg" width="14" height="13" alt="" /></a></li>
 <li><a href="../contactus.php"><img src="../images/message.jpg" width="16" height="13" alt="" /></a></li>
 <li style="padding:4px 0 0 8px;"><a href="../sitemap.php"><img src="../images/sitemap.jpg" width="16" height="16" alt="" /></a></li>
 </ul></div>
 <div class="navi">
 <div class="aerobuttonmenu">
 <a href="../index.php" class="aero" id="a0"><span>Home</span></a> 
<a href="../tearoom.php" class="aero" id="a1"><span>About Tea Room</span></a> 
<a href="../teabeverages.php" class="aero" id="a2"><span>Tea &amp; Beverages</span></a> 
<a href="../otherproduct.php" class="aero" id="a3"><span>Products &amp; Services</span></a> 
<a href="../contactus.php" class="aero" id="a4"><span>Earn your free cup of Tea</span></a> 
<a href="index.php" class="aero active" id="a4"><span>Blog</span></a> 
</div>
 </div>
 </div>
 <!-- !-->
 <div class="flash">
   <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="909" height="323">
     <param name="movie" value="../flash/banner.swf" />
     <param name="quality" value="high" />
     <param name="wmode" value="opaque" />
     <param name="swfversion" value="6.0.65.0" />
     <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
     <param name="expressinstall" value="../Scripts/expressInstall.swf" />
     <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
     <!--[if !IE]>-->
     <object type="application/x-shockwave-flash" data="../flash/banner.swf" width="909" height="323">
       <!--<![endif]-->
       <param name="quality" value="high" />
       <param name="wmode" value="opaque" />
       <param name="swfversion" value="6.0.65.0" />
       <param name="expressinstall" value="../Scripts/expressInstall.swf" />
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