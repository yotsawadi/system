<?php
		
		$con = mysqli_connect("localhost", "root", "10758525", "logindb");
		mysqli_set_charset($con,"utf8");

		$username = $_GET["username"];
		$password = $_GET ["password"];
		$email = $_GET ["email"];

		$query = "INSERT INTO tb_login (login_username,login_password,login_email) VALUES ('$username','$password','$email');";
		echo $query;
		//echo $query;

		$A=mysqli_query($con, $query)or die(mysqli_error($con));
		header("Location:index.php");
		echo "บันทึกข้อมูลเรียบร้อย";
		echo $A;
?>