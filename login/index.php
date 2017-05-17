<?php
    session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Đăng nhập </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="Login.css">     
</head>

<body>
    <?php
         require('../modules/header.php')
    ?>
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
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <h3 class="text-center">
                            Đăng nhập
                        </h3>
                        <form class="form-horizontal" role="form" method="POST" action="action.php">
                            <div class="form-group">

                                <label for="inputEmail3" class="col-sm-2 control-label">
								Email
							</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" name="username" />
                                </div>
                            </div>
                            <div class="form-group">

                                <label for="inputPassword3" class="col-sm-2 control-label">
								Mật khẩu
							</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" name="password" />
                                </div>
                            </div>

                            <p class="notification">
                            <?php
                                if (isset($_SESSION['tb'])) {
                                    echo $_SESSION['tb'];
                                }
                                unset($_SESSION['tb']);
                            ?>
                            </p>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" /> Ghi nhớ tài khoản và mật khẩu
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success" id="loginbutton" name='button-submit'>
									Đăng nhập 
								    </button>
                                </div>
                            </div>
                        </form> 
                        
                        <!-- link đến file quên mật khẩu -->
                        <a href="ForgotPassword.php" class="btn btn-link btn-block" type="button">Quên mật khẩu?</a> 
                        
                        <!-- link đến file đăng kí tài khoản -->
                        <a href="../register" class="btn btn-link btn-block" type="button">Chưa có tài khoản? Click vào đây để tạo tài khoản miễn phí!!!!!</a>
                    
                    </div>
                    <div class="col-md-5">
                        <div class="icon-facebook">
                            <a href="https://www.facebook.com/dialog/oauth?client_id=536643483177466&redirect_uri=http://betezcafe.tk/login/fblogin.php&scope=public_profile" target="blank">
                                <img alt="Login with Facebook" src="http://i.imgur.com/959OX3J.png" />
                            </a>
                        </div>
                        <br>
                        <br>
                        <div class="icon-google">

                            <!-- link đến file đăng kí bằng google -->
                            <a href="http://betezcafe.tk/login/gglogin.php" target="blank">
                                <img alt="Sign in with Google" src="http://i.imgur.com/ujkvOCz.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>