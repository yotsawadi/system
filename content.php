<?php

	include 'connectdb.php';

	$host="localhost"; // กำหนด host
$username="root"; // กำหนด username
$pass_word="10758525"; // กำหนด Password
$db="tb_contect"; // กำหนดชื่อฐานข้อมูล
$Conn = mysql_connect( $host,$username,$pass_word) or die ("ติดต่อฐานข้อมูลไม่ได้");// ติดต่อฐานข้อมูล
mysql_query("SET NAMES utf8",$Conn); // set กำหนดมาตราฐาน
mysql_select_db($db) or die("เลือกฐานข้อมูลไม่ได้"); // เลือกฐานข้อมูล 
//--->
$name = $_POST['name'];
$phonenum = $_POST['phonenum'];
$sql_add = "insert into customer set 
name = '$name' , surname = '$surname' , address = '$address' , phone = '$phone'";
mysql_query($sql_add) or die(mysql_error());
echo "เพิ่มข้อมูลของ $name $surname สำเร็จแล้ว";
//-->

?>
