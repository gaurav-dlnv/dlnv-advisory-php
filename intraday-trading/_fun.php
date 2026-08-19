<?php
function FilterInput($input){
    if (is_array($input)) return '';
    return strip_tags(stripslashes(trim((string)$input)));
}
function CleanInput($string) {
    return preg_replace('/[^A-Za-z0-9\- ]/', '', (string)$string);
}
function CaptchaCode(){
    if (session_status() === PHP_SESSION_NONE) session_start();
    $characters='23456789';
    $capcode='';
    for($i=0;$i<5;$i++) $capcode.=$characters[random_int(0,strlen($characters)-1)];
    $_SESSION['capcode']=$capcode;

    $lines='';
    for($i=0;$i<7;$i++){
        $x1=random_int(0,109); $y1=random_int(5,40);
        $x2=random_int(0,109); $y2=random_int(5,40);
        $lines.='<line x1="'.$x1.'" y1="'.$y1.'" x2="'.$x2.'" y2="'.$y2.'" stroke="#b4cdff" stroke-width="1" opacity=".75"/>';
    }
    $svg='<svg xmlns="http://www.w3.org/2000/svg" width="110" height="45" viewBox="0 0 110 45">'
        .'<rect width="110" height="45" rx="4" fill="#1d4ed8"/>'
        .$lines
        .'<text x="55" y="30" text-anchor="middle" font-family="Arial,sans-serif" font-size="20" font-weight="700" letter-spacing="3" fill="#fff">'.htmlspecialchars($capcode,ENT_QUOTES,'UTF-8').'</text>'
        .'</svg>';
    return 'data:image/svg+xml;base64,'.base64_encode($svg);
}
