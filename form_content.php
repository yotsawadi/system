<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ระบบเเจ้งอุปกรณ์ชำรุดภายในหอพัก</title>
	<link href="loney.css" rel="stylesheet" type="text/css"/>

</head>
<body>
  <header>
        <h2>เเจ้งอุปกรณ์ชำรุดภายในหอพัก</h2>
        
    </header>
    <br><br>
	<div>
		<form action="savecontent.php" method="POST">
			<label class="col-sm-2 control-label"  for="name">ชื่อ-นามสกุล ผู้เเจ้ง:</label>
			<input type="text" name="name" required autofocus="">
			<br><br>

			<label for="phonenum">เบอร์โทรศัพท์:</label>
			<input type="text" name="phonenum" required autofocus maxlength=10>
			<br><br>
			<!--div class="form-group"-->
      
      <label class="dayTime">วันที่และเวลาที่แจ้ง:</label>
      <!--div class="col-sm-10"-->
      <input type='text'  name='dayTime' placeholder="ตัวอย่าง 11/11/2560">
      <br><br>                 
      <!--/div-->
      <!--/div-->

			<!--div class="form-group"-->
    	<label for="exampleFormControlSelect1">หอพัก:</label>
    	<select class="form-control" id="exampleFormControlSelect1" name="room">
      			<option value="1">หอพักหญิง 1</option>
      			<option value="2">หอพักชาย 2</option>
      			<option value="3">หอพักหญิง 3</option>
    		</select>
        <br><br>

        <label for="exampleFormControlSelect1" >ชั้นที่:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="floor">
            <option value="4">ชั้น 1</option>
            <option value="5">ชั้น 2</option>
            <option value="6">ชั้น 3</option>
            <option value="7">ชั้น 4</option>
        </select>
        <label for="numroom">เลขห้องพัก:</label>
        <input type="text" name="numroom" size="10 " placeholder="เช่น 111" required autofocus >
       
        <br><br>

  			<!--/div-->
        <label for="another">ส่วนอื่นๆ ภายในหอพัก:</label>
        <input type="text" name="another" placeholder="กรณีสิ่งของชำรุดที่ไม่ใช่ห้องพัก เช่น ห้องน้ำรวม ชั้น 1 " required autofocus >
        <br><br>
  			<!--div class="form-group"-->
    		<label for="problem">ปัญหา</label:>
        <input type="text" name="problem" placeholder="เช่น หลอดไฟไม่ติด,เปลี่ยนลูกบิดประตู ฯลฯ" required autofocus>
			  
			  <br><br>
  			<!--/div-->
        <div ></div>

  			<input type="submit" value="บันทึก" >



		</form>
      
	</div>

</body>
</html>