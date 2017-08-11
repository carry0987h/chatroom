<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/admin/condb.php';
session_start();
$userId = $_SESSION['user_id'];
$content = $_POST['message'];

$sql = 'INSERT INTO message (time, sender_id, content) VALUES (NOW(), ?, ?)';
$query = $conn->prepare($sql);
$query->bind_param('ss',$userId,$content);
$query->execute($query);
?>