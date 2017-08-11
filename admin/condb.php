<?php
header("Content-Type:text/html;charset=utf-8");
//error_reporting(E_ALL || ~E_NOTICE);
define('DB_HOST', 'localhost');
define('DB_USER', 'chat');
define('DB_PASSWORD', 'test1234');
define('DB_NAME', 'nehscsa_chat1');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$conn){
    die("連接失敗".mysqli_connect_error());
}
?>