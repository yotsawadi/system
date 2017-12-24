<?php

	$dbcon = mysqli_connect('localhost','root','10758525','logindb');//*logindb คือชื่อฐานขัอมูลที่สร้างใน local

	if (mysqli_connect_errno()) {
		echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้ ". mysql_connect_errno();
		exit;
	}
	mysqli_set_charset($dbcon, 'utf8');
?>