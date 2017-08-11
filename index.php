<?php
header("content-type:text/html;charset=utf-8");
require dirname(__FILE__).'/include/header.php';
if (!$_SESSION['username'] && !$_SESSION['id']) {
	echo '<meta http-equiv="refresh" content="0;url=./login.php" />';
}
?>

<body>
	<div class="hello">
		<p>目前登入： <?php echo $_SESSION['username']; ?></p>
	</div>
	<nav class="logout">
		<button type="button" onclick="window.location.href='./logout.php'">登出</button>
	</nav>
	<div id="wrapper">
		<ul id="chat-area"></ul>
		<form id="message-form">
			<input type="text" id="message" placeholder="訊息" autocomplete="off">
			<input type="submit" value="send" id="send-button">
		</form>
	</div>
	<script src="./static/jquery.php?file=jquery.min.js"></script>
	<script src="./static/js.php?file=main.js"></script>
</body>
</html>