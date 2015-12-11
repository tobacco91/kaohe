<?php
$code_length = 5;
$arr=array(
	'width'=>100,
	'height'=>100
	);
session_start();
$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i = 0 ; $i < $code_length; $i++) {
	$code .= $str[rand(0,51)];
}
 $_SESSION['check'] = $code; 
$image = imagecreate($arr['width'],$arr['height']);


$background = imagecolorallocate($image, 117, 166, 57);

$text = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 242, 109, 128);

for ($i=0; $i < 300; $i++) { 
			imagesetpixel(
					$image, 
					rand(0,$arr['width']), 
					rand(0,$arr['height']), 
					$red
				);
}

imagestring($image, 5, 10, 3, $code, $text);
ob_clean();


header('Cache-Control: private, max-age=0, no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);		
header('Pragma: no-cache');
header("content-type: image/png");
imagepng($image);

imagedestroy($image);

?>