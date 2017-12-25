<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ระบบเเจ้งอุปกรณ์ชำรุดภายในหอพัก</title>
	<link href="style.css" rel="stylesheet">


</head>
<body>
	
	 <header>
        <h2>เเจ้งอุปกรณ์ชำรุดภายในหอพัก</h2>
    </header>
  	<br><br>
  

	<div class="col-sm-8">
	<h3>ลงทะเบียน</h3>
	<form action="./register.php" method="GET" >
		<LABEL for="username">Username:</LABEL>
		<input type="text" name="username" required autofocus>
		<LABEL for="password">Password:</LABEL>
		<input type="password" name="password" required>
		<LABEL for="email">E-mail:</LABEL>
		<input type="email" name="email" placeholder="example@domain.com" required="">
		<br><br>
		<input type="submit" value="ลงทะเบียน">
	</form>
	  <br>
	  <br>
	  <a href="index.php">กลับหน้าหลัก</a>
	  <a href="contect.php">ติดต่อเรา</a>
	</div>
</body>
</html>