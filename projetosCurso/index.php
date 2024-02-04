<?php

header("Content-type: image/png");

$file = "teste.png";

$new_width = 256;
$new_height = 256;

$data = getimagesize($file);


list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefrompng($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagepng($new_image);

imagedestroy($old_image);
imagedestroy($new_image);


?>