<?php
    session_start();
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    //Gửi thông tin cho salesman
    require("../../app/database.php");
    require("pushbill.php");
    //đưa data vào db dùng sau này
    if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
    $conn-> query("UPDATE users SET `fullname` = '$name', `phonenumber` = '$phonenumber', `addresses` = '$address' WHERE `userid` = $userid");
    }
    unset($_SESSION['ordered']);
?>