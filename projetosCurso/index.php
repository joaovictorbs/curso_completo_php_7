<?php

$image = imagecreatefrompng("DIR/images/teste.png"); # recupera imagem

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 3750, 350, $titleColor, "fonts". DIRECTORY_SEPARATOR . "Paylball" . DIRECTORY_SEPARATOR . "Paylball-Regular.ttf", "Teste do Teste");
imagestring($image, 3, 0, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type: imagem/png");

imagepng($image); # salva arquivo / altera qualidade

imagedestroy($image);


?>