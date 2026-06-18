<?php
require_once("_config.php");
require_once("_fun.php");

function AppInfo(){
$app = array(
'CopyRight'       => 'Protective Collar AI Technology Private Limited',
'BrandName'       => 'DailyTrades',
'DomainName'       => 'dailytrades.in',
'BrandURL'        => 'https://www.dailytrades.in',
'Whatsapp'        => 'https://api.whatsapp.com/send?phone=919220398500&amp;text=Hello! I have a Query',
'Facebook'        => 'https://www.facebook.com',
'Instagram'       => 'https://www.instagram.com',
'Youtube'         => 'https://www.youtube.com',
'Twitter'         => 'https://twitter.com',
'Linkedin'        => 'https://in.linkedin.com',
'Pinterest'       => 'https://in.pinterest.com',
'FbAppId'         => '',
'Phone1Code'      => '+91',
'Phone1'          => '9220398500',
'Phone1show'      => '92203 98500',
'whatsapp'        => '9220398500',
'whatsappshow'    => '92203 98500',
'Email1'          => 'info@dailytrades.in',
'Email2'          => 'support@dailytrades.in',
'Email3'          => 'compliance@dailytrades.in',
'Email4'          => 'hr@dailytrades.in',
'Email5'          => 'principle@dailytrades.in',
'AddressFull'     => '',
'AddressShort'    => '',
'TrackingLink'    => '',
);
return json_decode(json_encode($app), FALSE); 
}
?>