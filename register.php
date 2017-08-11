<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';
if(isset($_POST["submit"])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql = 'INSERT INTO user (username, password, isAdmin) VALUES (?, ?, 0)';
$query = $conn->prepare($sql);
$query->bind_param('ss', $username, $password);
$query->execute($username, $password);
echo '<meta http-equiv="refresh" content="0;url=./login.php" />';
}
?>

<body>
	<h1>Register</h1>
	<form action="register.php" method="POST">
		<label for="username">username</label>
		<input type="text" id="username" name="username">
		<label for="password">password</label>
		<input type="password" id="password" name="password">
		<button type="submit" name="submit">注冊</button>
	</form>
</body>
</html>