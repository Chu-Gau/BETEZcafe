<?php
     session_start();
     unset($_SESSION['ordered']);
     //Gửi thông tin cho salesman
     //đưa data vào db dùng sau này
     require("../../app/database.php");
     if(/*đã đăng nhập*/true){
        $userid = $_SESSION['userid'];
        $name = $_POST['name'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        $conn-> query("UPDATE users SET `fullname` = '$name', `phonenumber` = '$phonenumber', `addresses` = '$address' WHERE `userid` = $userid");
     }
     
     var_dump($_POST);
?>