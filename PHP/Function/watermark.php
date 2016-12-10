<?php
$img=imagecreatefromjpeg('pic1214.jpg');
imagestring($img,5,10,10,'www.yida.com',imagecolorallocate($img,255,0,0));
header('Content-type:image/jpg');
imagejpeg($img);
?>