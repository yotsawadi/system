<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ระบบเเจ้งอุปกรณ์ชำรุดภายในหอพัก</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	
	 <header>
        <h2>เเจ้งอุปกรณ์ชำรุดภายในหอพัก</h2>
        
    </header>
  	<br><br>
	<div>
		<h3>Login</h3>
		<form action="login.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" name="username" required autofocus>
			<br><br>
			<label for="password">Password:</label>
			<input type="password" name="password" required="">
			<br><br>
			<input type="submit" value="Log In" href="form_content.php">
		</form>
		<br>

		<a href="form_register.php">สมัครสมาชิก</a>
	</div>
</body>
</html>