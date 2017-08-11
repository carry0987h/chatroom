<?php 
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';

echo $_SESSION['user_id'];

?>