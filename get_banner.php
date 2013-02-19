<?php
header ("Content-type: image/png");
$string = "ClickBank ID: " . $_REQUEST["code"];
// try changing this as well
$font = 6;
$width = imagefontwidth($font) * strlen($string);
$height = imagefontheight($font) ;
$im = imagecreatefrompng("banners/300x250_1.png");
$x = imagesx($im) - $width;
$y = imagesy($im) - $height;
$backgroundColor = imagecolorallocate ($im, 255, 255, 255);
$textColor = imagecolorallocate ($im, 0, 0,0);
imagestring ($im, $font, $x, $y,  $string, $textColor);
imagepng($im);
