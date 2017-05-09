<!DOCTYPE html>
<html>
<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Đăng kí </title>
    <!--icon-->
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="../css/bootstrapinconflict.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styling -->
    <style>
        .text-center {
            margin: 50px;
            color: darkgreen;
            font-family: Helvetica, sans-serif;
            font-size: 30px;
            position: relative;
            right: 20px;
        }
        #button {
            margin: 10px;
            color: #FFF;
            background-color: green;
            margin-bottom: 60px;
        }
    </style>
</head>

<body>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1351730014914057',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    </script>
    <?php
         require('../modules/header.php')
    ?>
    <!--<div class="container-fluid">
        <div class="row">-->
            <!--nav-->
            <!--<nav class="navbar navbar-inverse">
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
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </nav>-->
            <!--end nav-->
        <!--</div>
    </div>-->

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">
                <form role="form" method="POST" action="action.php">
                    <legend class="text-center">Đăng kí tài khoản</legend>

                    <p class = 'reg-err' style="color:red;"><?php
                            if(isset($_SESSION['notif'])) echo $_SESSION['notif'];
                            unset($_SESSION['notif']);
                        ?></p>
                    <fieldset>

                        <div class="form-group col-md-6">
                            <label for="first_name">Họ</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Họ">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Tên</label>
                            <input type="text" class="form-control" name="last_name" id="" placeholder="Tên">
                        </div>
<!--
                        <div class="form-group col-md-12">
                            <label for="Username"> Tên tài khoản </label>
                            <input type="text" class="form-control" name="user_name" id="" placeholder="Tên tài khoản">
                        </div>-->

                        <div class="form-group col-md-8">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="" placeholder="Email">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="">Số Điện Thoại</label>
                            <input type="text" class="form-control" name="phone_number" id="" placeholder="Số ĐT">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password">Mật khẩu</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirm_password">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Xác nhận mật khẩu">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="" placeholder="Địa chỉ">
                        </div>


                    </fieldset>

                    <!--<fieldset>
                        <div class="form-group col-md-6">
                            <label for="country">Quốc tịch</label>
                            <select class="form-control" name="" id="country">
                                <option>Việt Nam</option>
                                <option>Campuchia</option>
                                <option>Lào</option>
                                <option>Khác</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 hidden">
                            <label for="specify">Please Specify</label>
                            <textarea class="form-control" id="specify" name=""></textarea>
                        </div>
                    </fieldset>-->

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="checked" id="" name = 'accept'>
                                    Tôi đồng ý với tất cả <a href="#">các điều khoản</a>.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" name="button">
                                Đăng kí
                            </button>
                            <div class="fb-comments" data-href="http://betez.ml" data-colorscheme="light" data-numposts="5" data-width="500"></div>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</body>

</html>