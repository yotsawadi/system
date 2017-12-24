<?php
	include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ระบบเเจ้งอุปกรณ์ชำรุดภายในหอพัก</title>
</head>
<body>

	<?php
		echo"รหัสสมาชิก:".$_SESSION['login_id'];
		echo "ยินดีตอนรับคุณ $_login_username อีเมล์ $s_login_email";

	?>
	
	<hr>
	<a href="logout.php">ออกจากระบบ</a>

</body>
</html>