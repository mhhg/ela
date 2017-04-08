<?php

$filename = "http://elaonline.ir/Administration/result.jpg";
header('Content-Description: File Transfer');
header("Content-type: image/jpeg");
header("Content-disposition: attachment; filename= myfile");
$img = imagecreatefromjpeg($filename);
$white = imagecolorallocate($img, 255, 255, 255);
$grey = imagecolorallocate($img, 128, 128, 128);
$black = imagecolorallocate($img, 0, 0, 0);
$font = 'arial.ttf';
imagettftext($img, 50, 0, 740, 463, $black, $font, "Mohammad Hossein");
imagettftext($img, 50, 0, 740, 600, $black, $font, "Haghighatgoo");
imagettftext($img, 50, 0, 740, 740, $black, $font, "101");
imagettftext($img, 55, 0, 1370, 878, $black, $font, "10");
imagettftext($img, 55, 0, 1370, 1020, $black, $font, "20");
imagettftext($img, 55, 0, 1370, 1160, $black, $font, "10");
imagettftext($img, 55, 0, 1370, 1300, $black, $font, "32");
imagettftext($img, 55, 0, 1342, 1449, $black, $font, "100");
imagefilledrectangle($img, 913, 1550, 963, 1602, $black);
function show() {
	 global $img;
	 ob_start();
	 imagejpeg($img, NULL, 100);
	 $rawImageBytes = ob_get_clean();
	 readfile("data:image/jpeg;base64," . base64_encode($rawImageBytes));
}
show();