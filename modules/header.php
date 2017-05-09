<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<style>
    .name{
        color: #0de10d;
        font-family: Helvetica, Arial, Tahoma, sans-serif;
        font-weight: 200;
        padding: 15px;
    }
</style>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="http://localhost:8080/betez">BETEZ Café</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="http://localhost:8080/betez">Home</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#">Khuyến mãi</a></li>
                                <li><a href="#">Địa điểm</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                            </ul>
                            <?php
                                 if(!isset($_SESSION['username'])){
                            ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="http://localhost:8080/betez/register"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
                                <li><a id = "Login" href="http://localhost:8080/betez/login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                            </ul>
                            <?php
                                 }
                                 else{

            ?>
            <ul class="nav navbar-nav navbar-right">
                <li class='name'>Xin chào <span ><a href='#'><?php echo $_SESSION['username'] ?></a></span></li>
                <li><a href="http://localhost:8080/betez/app/signout.php"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
            </ul>
            <?php
                                 }                 
            ?>
            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
</div>