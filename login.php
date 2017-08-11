<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';
?>
<body>
	<h1>Login</h1>
	<form action="validate-user.php" method="POST">
		<label for="username">username</label>
		<input type="text" id="username" name="username">
		<label for="password">password</label>
		<input type="password" id="password" name="password">
		<button type="submit" name="submit">登入</button>
	</form>
	<a href="register.php">沒有帳號？請先註冊</a>
</body>
</html>