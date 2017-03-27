<?php
    session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Quên mật khẩu </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="ForgotPassword.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--<div class="row">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#">BETEZ Café</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#">Khuyến mãi</a></li>
                                <li><a href="#">Địa điểm</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>-->
                <?php
                     require('../modules/header.php');
                ?>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <h3 class="topic"> Quên mật khẩu???? </h3>
                        <p class="text"> Vui lòng nhập email của bạn vào đây, chúng tôi sẽ gửi lại mật khẩu cho bạn! </p>
                        <form method="POST" action="fpaction.php">
                            <strong> Email: </strong><input type=text size=60 name="email">
                            <br>
                            <br>

                            <p class="notification">
                            <?php
                                if (isset($_SESSION['tb'])) {
                                    echo $_SESSION['tb'];
                                }
                                unset($_SESSION['tb']);
                            ?>
                            </p>

                            <button type="submit" class="button" name="button-submit"> Gửi email </button>
                        </form>
                        <p class="second-text"> Nếu bạn chưa nhận được email của chúng tôi, vui lòng ấn vào <a href="#">đây</a> để thử lại. </p>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>