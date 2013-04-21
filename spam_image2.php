<?
session_start(); 
$text = substr(rand(10000,999999),0,7); 
$_SESSION["vercode"] = $text; 
$height = 22; 
$width = 80; 
 
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 130, 82, 44); 
$white = imagecolorallocate($image_p, 235, 202,124); 
$font_size = 14; 
 
imagestring($image_p, $font_size, 5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
?>