<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/admin/condb.php';

$query = $conn->query('SELECT content, time, username, sender_id, message.id FROM message INNER JOIN user ON message.sender_id = user.id ORDER BY message.id DESC LIMIT 10');
$rows = array();
while($r = mysqli_fetch_assoc($query)) {
    $rows[] = $r;
}
print json_encode($rows);
?>