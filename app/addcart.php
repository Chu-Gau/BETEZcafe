<?php
    // đang viết
    require_once 'database.php';
    session_start();
    if(!isset($_SESSION['ordered'])){
        $_SESSION['ordered'] = array();
    }

    $productIndex = $_GET['productindex'];

    if(isset($_GET['productindex'])){
        // Lưu vào mảng $_SESSION['ordered'], với key là product ID, value là số lượng sp
        if(isset($_SESSION['ordered'][$productIndex])){
            $_SESSION['ordered'][$productIndex]++;
            echo 'duplicate';
        }else{
            $_SESSION['ordered'][$productIndex] = 1;
            //export the display
            require('../modules/cartproduct.php');
        }
    }
?>