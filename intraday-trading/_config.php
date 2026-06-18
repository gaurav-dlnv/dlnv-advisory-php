<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Kolkata");
$nowTime  = Date('Y-m-d H:i:s');
$ip       = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
?>