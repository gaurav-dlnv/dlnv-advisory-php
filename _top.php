<?php
require_once("_config.php");
require_once("_fun.php");

function AppInfo(){
	$app = array(
		'CopyRight'       => 'PROTECTIVE COLLAR AI TECHNOLOGY PRIVATE LIMITED',
		'BrandName'       => 'Dailytrades',
		'DomainName'       => 'dailytrades.in',
		'BrandURL'        => 'https://www.dailytrades.in',
		'Whatsapp'        => 'https://api.whatsapp.com/send?phone=919650249030&amp;text=Hello! I have a Query',
		'Facebook'        => 'https://www.facebook.com',
		'Instagram'       => 'https://www.instagram.com',
		'Youtube'         => 'https://www.youtube.com',
		'Twitter'         => 'https://twitter.com',
		'Linkedin'        => 'https://in.linkedin.com',
		'Pinterest'       => 'https://in.pinterest.com',
		'FbAppId'         => '',
		'Phone1Code'      => '+91',
		'Phone1'          => '9650249030',
		'Phone1show'      => '96502 49030',
		'whatsapp'        => '9650249030',
		'whatsappshow'    => '96502 49030',
		'Email1'          => 'support@dailytrades.in',
		'AddressFull'     => '',
		'AddressShort'    => 'SEBI Registration No :INA000016180<br/>
		Type of Registration: Investment advisor<br/>
		Licence Holder’s name : Manish Krishnakant Shah<br/>
		Validity of Registration: 09/09/2021 – Perpetual',
		'TrackingLink'    => '',
	);
	return json_decode(json_encode($app), FALSE); 
}
?>