<?php
function FilterInput($input){
    $input = strip_tags(stripslashes(trim($input)));
    return $input;
}
function CleanInput($string) {
   //$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\- ]/', '', $string); // Removes special chars.
}
function CaptchaCode(){
  $capcode = substr(str_shuffle('0123456789'),0,rand(3,5));
  $_SESSION['capcode'] = $capcode;
  $img   = imagecreatetruecolor(55, 35);
  $color = imagecolorallocate($img, 255, 255, 255);
  $bg    = imagecolorallocate($img, 29, 78, 216);
  imagefill($img, 0, 0, $bg);
  imagestring($img, 10, 6, 10,$capcode, $color);
  ob_start ();
  imagepng($img);
  imagedestroy($img);
  $data = ob_get_contents ();
  ob_end_clean ();
  $image = "data:image/jpeg;base64,".base64_encode($data);
  return $image;
}