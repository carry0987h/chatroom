<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';
$username = $_POST['username'];
$password = $_POST['password'];

if ($username && $password) {
	$sql = "SELECT * FROM user WHERE username= ? AND password= ?";
	$query = $conn->prepare($sql);
    $query->bind_param('ss',$username, $password);
	$query->execute();

	//$result = $query->fetch(PDO::FETCH_ASSOC);
    $result = $query->get_result();
    $data = $result->fetch_all(MYSQLI_ASSOC);

	if ($data) {
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $data['id'];
		$_SESSION['isAdmin'] = 0;

   echo '
        <meta http-equiv="refresh" content="0;url=./" /> 
        ';
	}
	else {
		echo 'failure';
   echo '
        <meta http-equiv="refresh" content="0;url=login.php" /> 
        ';
	}
}
else {
	die("Please enter a username and a password");
}
?>
