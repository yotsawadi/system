<?php

   	$dbcon = mysqli_connect("localhost", "root", "10758525", "logindb");
		mysqli_set_charset($dbcon,"utf8");

		$numroom = $_POST['numroom'];
		$name = $_POST['name'];
		$phonenum = $_POST['phonenum'];
		$daytime = $_POST['daytime'];
		$room = $_POST['room'];
		$floor = $_POST['floor'];
		$another = $_POST['another'];
		$problem = $_POST['problem'];
    

		$query = "INSERT INTO  tb_contect (numroom,name,phonenum,daytime,room,	floor,another,problem) VALUES ('$numroom','$name','$phonenum','$daytime','$room','$floor','$another','$problem');";
		//echo $query;

		 mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
		
		echo $a;
		//echo "บันทึกข้อมูลเรียบร้อย"
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ระบบเเจ้งอุปกรณ์ชำรุดภายในหอพัก</title>
	<link href="style.css" rel="stylesheet">
	
</head>
<body>
<div class="col-sm-8">
	<h3>เมื่อเสร็จเเล้วจะเเจ้งให้ทราบ</h3>
	<a href="index.php " class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
       </div>

</body>
</html>