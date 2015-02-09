<!DOCTYPE html>
<meta charset="utf-8" />
<?php
	session_start();
	if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
		echo "<meta http-equiv='refresh' content='0;url=cor_login.php'>";
		exit;
	}

	
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];

	echo "<p>안녕하세요. $user_name($user_id)님</p>";
	echo "<p><a href='cor_logout.php'>로그아웃</a></p>";
?>