Hello
<?php
/**
 * Created by PhpStorm.
 * User: Сергій
 * Date: 02.04.2016
 * Time: 1:07
 */
echo " World!";
//$format = explode(".", $img);
//switch(array_pop($format))
//{
//    case 'png':
//        $im1     = imagecreatefromPNG($img);
//        break;
//    case 'jpg':
//    case 'jpeg':
//        $im1     = imagecreatefromJPEG($img);
//        break;
//}
//
//$string = $this->item->title;
//$length = 52;
//$size = 26;
//putenv('GDFONTPATH=' . realpath('.'));
//$font = 'PT_Serif';
//$color = imagecolorallocate($im1, 255, 255, 255); // білий колір тексту
//
//$w = 560;//размер картинки новости фб
//$h = $w*0.52;//соотношение сторон 1.91 : 1 (так сказал Google)
////                        $h = ($w*0.52 < $w*imagesy($im1)/imagesx($im1)) ? $w*0.52 : $w*imagesy($im1)/imagesx($im1);
//$offset = 0; //смещение от верха изображения
//if(imagesy($im1)>$h)
//{
//    $offset = imagesy($im1)/2-$h; //почему-то центрируется именно так
//}
//
////изменение размера, обрезка сверху и cнизу
//$im=imagecreatetruecolor($w,$h);
////                        $z = ($w*imagesy($im1)/imagesx($im1) < imagesx($im1)*0.52) ? imagesy($im1) : imagesx($im1)*0.52;
//imagecopyresampled($im,$im1,0,0,0,$offset,$w,$h,imagesx($im1),imagesx($im1)*0.52);
////затемнение картинки
//$im2 = ImageCreate($w, $h);
//$alphaColor = imagecolorallocatealpha($im2, 0, 0, 0, 80);
//imagecopy($im, $im2, 0, 0, 0, 0, $w, $h);
//
////вставка логотипа
//$stamp = imagecreatefrompng('logo.png');
//$marge_right = 10;
//$marge_bottom = 10;
//$sx = imagesx($stamp);
//$sy = imagesy($stamp);
//imagecopy($im, $stamp, $w - $sx - $marge_right, $h - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
//
////заголовок
//$string = wordwrap($string, $length); //перенос строки
//$box = imagettfbbox($size, 0, $font, $string);
//$xr = abs(max($box[2], $box[4]));
//$yr = abs(max($box[5], $box[7]));
//
//$x = intval(($w - $xr)/2);
//$y = intval(($h - $yr)/2);
//
//imagettftext($im, $size, 0, $x, $y-50, $color, $font, $string);
//
//imagePNG($im, "social_share/".$i.".png");