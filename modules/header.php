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
                                <li><a href="http://localhost:8080/betez/info">Liên Hệ</a></li>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98844487-1', 'auto');
  ga('send', 'pageview');

</script>