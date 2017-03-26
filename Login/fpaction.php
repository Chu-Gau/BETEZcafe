<?php
    session_start();
    require_once('database.php');
    if (isset($_POST['button-submit'])) {
        $email = $_POST['email'];
        if ($email == '') {
            $_SESSION['tb'] = 'Bạn chưa nhập email !!!';
            header('location: ForgotPassword.php');
        } 
        else {
            $sql = "select * from users where email = '$email' ";
            $query = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($query);
            if ($num_rows == 0) {
                $_SESSION['tb'] = "Email vừa nhập không chính xác !!!";
                header('location: ForgotPassword.php');
            }
            else if ($num_rows == 1) {
                $_SESSION['tb'] = "Email đã được gửi đi. Vui lòng kiểm tra tài khoản email của bạn.";
                header('location: ForgotPassword.php');
            }
        }
    }
?>