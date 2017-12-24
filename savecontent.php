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

		$a= mysqli_query($dbcon, $query) or die(mysqli_error($dbcon));
		
		echo $a;
		echo "บันทึกข้อมูลเรียบร้อย"
		
?>
