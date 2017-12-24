<?php
	
	$numroom = $_POST['numroom'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$daytime = $_POST['daytime'];
	$room = $_POST['room'];
	$floor = $_POST['floor'];
	$numroom = $_POST['numroom'];
	$another = $_POST['another'];
	$problem = $_POST['problem'];

	echo "เลขที่ห้องพัก: $numroom <br>";
	echo "ชื่อ-นามสกุล ผู้เเจ้ง: $name <br>";
	echo "เบอร์โทรศัพท์: $phone <br>";
	echo "วันที่และเวลาที่แจ้ง: $daytime <br>";
	echo "หอพัก: $room <br>";
	echo "ชั้นที่: $floor <br>" ;
	echo "เลขห้องพัก: $another <br>";
	echo "ส่วนอื่นๆ ภายในหอพัก: $another <br>" ;
	echo "ปัญหา: $problem <br>";

	switch ($room) {
		case '1': echo "หอพักหญิง 1 <br>"; break;
		case '2': echo "หอพักหญิง 2 <br>"; break;
		case '3': echo "หอพักหญิง 3 <br>"; break;

		
	}
	?>