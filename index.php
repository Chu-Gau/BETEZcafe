<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BETEZ Café</title>
    <!--icon-->
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!--link to fonts-->
    <link href="https://fonts.googleapis.com/css?family=Anton|Audiowide|Baloo|Chewy|Cookie|Fjalla+One|Gloria+Hallelujah|Kaushan+Script|Lobster|PT+Sans+Narrow|Pacifico|Righteous"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

</head>

<body>
    <?php
        //  session_start();
    ?>
        <?php
         require_once('modules/header.php');
    ?>
            <div id="slogan">
                <img src="images/slogan_background.jpg" alt="">
                <div id="words">
                    <p style="font-size: 115pt;">
                        It's not just coffee
                    </p>
                    <p style="font-size: 140pt;">
                        It's Café
                    </p>
                </div>
            </div>
            <div id="menu">
                <div class="menu-header container">
                    <img src="images/menu-header.png" alt="">
                    <p>Menu</p>
                    <img src="images/menu-header.png" alt="">
                </div>
                <div class="menu-content container clearfix">
                    <!--products-->
                    <button id = "abc"></button>
                    <?php
                require_once('app/database.php');
                $products = $conn->query("SELECT * FROM products");
                while ($product = $products->fetch_assoc()) {
                ?>
                        <div class="product">
                            <div class="product-thumbnail" style="background-image: url('images/products/<?php echo $product['thumbnaillinks']; ?>')">
                                <button class="thumbnail-overlay" name="<?php echo $product['index']; ?>" onclick="add_cart(<?php echo $product['index']; ?>)">
                                <p>
                                    Đặt hàng
                                </p>
                            </button>
                            </div>
                            <div class="product-price">
                                <p>
                                    <?php echo $product['price']; ?>k</p>
                            </div>
                            <p class="product-name">
                                <?php echo $product['name']; ?>
                            </p>
                        </div>
                        <?php
                }
                    ?>
                            <!--end products-->
                </div>
                <!--xem session-->
                <p id='test'>

                </p>
            </div>
            <!--end menu-->
            <?php
         require_once('modules/footer.php');
            ?>
                <!--cart-->
                <div class="cart-container">
                    <div class="cart">
                        <div class="cart-products">
                            <?php
                            if(isset($_SESSION['ordered'])){
                            ?>
                                <!--đoạn script làm màu :p-->
                                <script>$(document).ready(function () {
                                    $('.cart').fadeIn();
                                    $('.cart-product').show();
                                    $('.container').animate({left: '-=75px'}, 200);
                                });</script>
                            <?php
                                require_once('app/database.php');
                                foreach ($_SESSION['ordered'] as $productIndex => $value) {
                                    # code...
                                    require('modules/cartproduct.php');
                            }
                        }
                        ?>
                        </div>
                        <!--end ordered products-->
                        <div class="cart-button">
                            <a  id="checkout" title = "checkout" href="checkout" class=""><span>Thanh toán</span>🛒</a>
                        </div>
                    </div>
                </div>
                <!--endcart-->

<!--====================This is THE END=================-->


                <script>
                    //Add to cart function, using AJAX 
                    function add_cart(index) {
                        $.ajax({
                            //gửi request
                            url: "app/addcart.php?productindex=" + index,
                            type: "get",
                            // Lấy data về
                            success: function (data) {
                                data.trim();
                                $('.cart').fadeIn();
                                if (data == 'error') {
                                    alert('Có lỗi xảy ra trong quá trình đặt hàng. Vui lòng thử lại!!!');
                                }
                                else if (data == 'duplicate') {
                                    alert('Bạn vừa đặt sản phẩm đó thêm lần nữa. Bạn cũng có thể chỉnh số lượng sản phẩm trong trang thanh toán.')
                                }
                                else {
                                    var newElem = $(data);
                                    $('.cart-products').append(newElem);
                                    newElem.ready(function () {
                                        newElem.fadeIn();
                                    });
                                }
                            }
                        });
                    }
                </script>
                <script href="script/script.js"></script>

</body>

</html>