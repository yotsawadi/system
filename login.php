<?php

   $dbcon = mysqli_connect("localhost", "root", "10758525", "logindb");
   mysqli_set_charset($dbcon,"utf8");

    $login_username = $_POST['username'];
    $login_password = $_POST['password'];
    
    $sql = "SELECT * FROM tb_login WHERE login_username ='$login_username' AND login_password='$login_password'";
    $result=mysqli_query($dbcon,$sql) or die(mysqli_error($dbcon));
    if ($result){
        session_start();
        $_SESSION['login_id'] = $row_user['login_id'];
        header("Location:form_content.php");
       // header("Location:Home.php");
    } else {
        echo $result;
        echo "ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }