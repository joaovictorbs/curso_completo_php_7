<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256); # associa a imagem por completo / largura e altura

$black = imagecolorallocate($image, 0, 0, 0); # cores da imagem / padrao rgb
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso PHP", $red); # escreve na imagem

imagepng($image); # gera imagem em png /renderiza imagem

imagedestroy($image);

?>