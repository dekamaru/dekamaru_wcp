<?php

session_start();

$words_count = 5;
$words = range('a', 'z');

$im = imagecreatetruecolor(300, 36);
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefill($im, 0, 0, $white);

$x_pos = 30;
$final_word = null;

for($i=0;$i<15;$i++) {
	$color = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
	imageline($im, rand(0, 300), 0, rand(0, 300), 36, $color);
	$size = rand(10, 30);
	imagefilledellipse($im, rand(0, 300), rand(0, 36), $size, $size, $color);
}

// word generate
for($i=0;$i<$words_count;$i++) {
	$word = $words[array_rand($words)];
	imagettftext($im, 24, rand(-50, 50), $x_pos, 26, $black, 'arialbd.ttf', $word);
	$x_pos += 300 / $words_count - 20;
	$final_word .= $word;
}

imagepng($im);

$_SESSION['captcha_word'] = $final_word;

header('Content-Type: image/png');

?>