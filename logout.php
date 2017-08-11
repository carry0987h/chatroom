<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';
   unset($_SESSION['username']);
   unset($_SESSION['user_id']);
   unset($_SESSION['isAdmin']);
   echo '
        <meta http-equiv="refresh" content="0;url=login.php" /> 
        ';
?>