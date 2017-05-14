<!DOCTYPE htmlxmlns="http://www.w3.org/1999/xhtml">
<head>
<!--title move using JavaScript-->
<script language="JavaScript"> 
    var txt=" Thanh Toan     "; 
    var espera=200; 
    var refresco=null; 
    // function rotulo_title() { 
    //     document.title=txt; 
    //     txt=txt.substring(1,txt.length)+txt.charAt(0); 
    //     refresco=setTimeout("rotulo_title(),espera); 
    // } 
    // rotulo_title(); 
</script>
<title>Thanh toán</title>
<meta name="easyQ" content="text/html"; charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Anton|Audiowide|Baloo|Chewy|Cookie|Fjalla+One|Gloria+Hallelujah|Kaushan+Script|Lobster|PT+Sans+Narrow|Pacifico|Righteous"
rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/cart.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="easyq.css"> -->
<style>
    #container{
        margin-left: 10px;
        background-color: #F1F1F1;
    }
    .container{
        margin: 0 auto;
    }
    .navbar-brand{
        margin:0px;
        border:10px;
    }
    .content1{
        margin-right: 10px;
    }
    .content1{
        margin-left : 0px;
    }
    #nameProduct{
        top: 0px;
        color:green;
    }
    #tongTien{
        background-color: #F2F2F2;
        color: red;
    }
    #cap{
        
        color: green;
        font-size: 20px;
    }
    #nameproduct{
        line-height: 30px;
        vertical-align: middle;
    }
</style>
</head>
<body>
<?php
         session_start();

    ?>
<?php
     require_once('../modules/header.php');
?>

<div id="main">
    <div class="row">
        <!-- <div class="col-md-10">
            <a class="navbar-brand" href="http://betez.ml/"><img src="http://i.imgur.com/j8hndhf.png" width="100px" height="100px"></a>
        </div> -->
        <div class="col-md2 user">
        </div>
    </div>
    <!-- <div class="content1">
        <div class="row">
            <div class="col-md-1">
                 
            </div>
            <div class="col-md-9">
                <nav class="navbar navbar-collapse bg-faded">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Các sản phẩm hot<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">xxx</a></li>
                                <li><a href="#">yyy</a></li>
                                <li><a href="#">zzz</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Các sản phẩm đang khuyến mãi
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">xxx</a></li>
                              <li><a href="#">yyy</a></li>
                              <li><a href="#">zzz</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Phương thức thanh toán
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">xxx</a></li>
                                <li><a href="#">yyy</a></li>
                                <li><a href="#">zzz</a></li>
                            </ul>
                        </li>
                        <li><form class="form-inline navbar-form pull-left">
                            <input class="form-control" type="text" placeholder="Tim Kiếm Sản Phẩm">
                            <button class="btn btn-success-outline" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>

            </div>
        </div> -->
        
        <div class="container">
        <?php
            echo"<table class='table'>";
                echo"<caption id='cap'><B>Các sản phẩm đã đặt hàng: </B></caption>";
                echo"<thead>";
                    echo"<tr>";
                        echo"<th>STT</th>";
                        echo"<th>Sản Phẩm</th>";
                        echo"<th>Số lượng</th>";
                        echo"<th>Giá trị</th>";
                        echo"<th>Hủy</th>";
                    echo"</tr>";
                echo"</thead>";
                echo"<tbody>";
                    
                        require_once('../app/database.php');
                        $x=0;$total = 0;
                        foreach ($_SESSION['ordered'] as $productIndex => $value) {                     
                            //$result=mysqli_query($conn,'SELECT * FROM `products` WHERE `index` = $productIndex');
                            $query = "SELECT * FROM `products` WHERE `index` = ".$productIndex;
                            $result= $conn->query($query);          
                            $data=mysqli_fetch_assoc($result);
                            
                            $x++;
                            echo"<tr>";     
                                echo"<td>$x </td>";
                                echo"<td><div id='nameProduct'><img src='../images/products/$data[thumbnaillinks]' width='60px' height='60px' title='$data[name]' ismap>  $data[name]</div></td>";
                               

                                echo"<td>";
                                echo"<select class='quantity' data-index=$data[index] style=' border:1px solid #CCC;'>";
                                for ($i=1;$i<=1000;$i++){
                                    if ($i==$value){
                                    echo"<option value='$i' selected='selected'>$i</option>";
                                    }
                                    else{
                                        echo"<option value='$i'>$i</option>";
                                    }
                                }
                                
                            echo"</select>";
                            echo"</td>";
                            

                            //$value=$_SESSION['ordered'][$data[index]];
                            $pay=$value*$data['price'];
                            $total+=$pay;
                                echo"<td>$pay.000 VNĐ</td>";
                                echo"<td><button type='button' class='btn btn-link'><a href='js/delete_cart.php?index=$data[index]'><span class='glyphicon glyphicon-remove-sign'></span></a></button></td>";
                            echo"</tr>";
                        }
                        
                    
                echo"</tbody>";
                echo"<tfoot id='tongTien'>";
                    echo"<th></th>";
                    echo"<th></th>";
                    echo"<th></th>";
                    echo"<th>Tổng tiền: $total.000 VNĐ</th>";
                    echo"<th></th>";
                echo"</tfoot>";
            echo"</table>";
            ?>
            </div>
            <div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<form role="form" name = 'Form'>
				<div class="form-group">
					 
					<label for="name">
						Họ và tên
					</label>
					<input type="text" class="form-control" name="name" value="<?php
                    $loggedIn = false;
                        if(isset($_SESSION['userid'])){
                            $query = "SELECT * FROM `users` WHERE `userid` = ".$_SESSION['userid'];
                            $result= $conn->query($query);          
                            $data=mysqli_fetch_assoc($result);
                            // var_dump($data);
                            $loggedIn = true;
                        }
                            if($loggedIn)echo $data['fullname'];
                    ?>"/>
				<div class="form-group">
					 
					<label for="phonenumber">
						Số điện thoại
					</label>
					<input type="text" class="form-control" name="phonenumber" value="<?php
                        if($loggedIn)echo $data['phonenumber'];
                    ?>"/>
				<div class="form-group">
					 
					<label for="address">
						Địa chỉ
					</label>
					<input type="text" class="form-control" name="address" value="<?php
                        if($loggedIn)echo $data['addresses'];
                        
                    ?>"/>
				</div>
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <a href="../"><button type="button" class="btn btn-primary btn-md">Mua tiếp</button></a>
                    <a href="#"><button type="button" onclick="checkout()" class="btn btn-success">Thanh toán</button></a>
                </div>
            </div>
        </div>
<script>
    function checkout(){
        var name = document.forms['Form'].name.value;
        var phonenumber = document.forms['Form'].phonenumber.value;
        var address = document.forms['Form'].address.value;
        if(name == ""){
            alert('Xin vui lòng nhập đầy đủ họ tên!');
        }
        else if(phonenumber == ""){
            alert('Xin vui lòng nhập số điện thoại!');
        }
        else if(address == ""){
            alert('Xin vui lòng nhập địa chỉ!');
        }
        else{
            if(confirm('Hãy chắc chắn rằng bạn đã chọn đủ hàng theo yêu cầu và nhập thông tin chính xác. Sau khi chọn OK, đơn hàng sẽ được gửi đi. Bạn có muốn đặt hàng?')){
                //use ajax to send order
                $.ajax({
                    url: "js/checkout.php",
                    type: "post",
                    data:"name"+'='+name+"&phonenumber"+'='+phonenumber+"&address"+'='+address,
                    async:true,
                    success: function (data) {
                        alert(data);//
                        alert('Thanh toán thành công! Chúng tôi sẽ giao hàng cho bạn nhanh nhất có thể. Cám ơn đã sử dụng dịch vụ của chúng tôi :) !');
                        window.location.replace("../");
                    }
                });
            }
            
        }
    }

</script>
        <!--footer-->
            <!--<br>
            <div class="footer">
                <div class="row">                  
                    </div>
                    <div class="col-md-9">
                        <p  style="float: left">&reg;Powered by <span class="name">BETEZ Team</span></p>
                        <a  href="#"  style="float: right"><p><span class="glyphicon glyphicon-phone-alt"></span> Liên hệ</p></a>
                    </div>
                    <div class="col-md-2">
                    </div>             
            </div>-->
            <!--end footer-->
        <script src="http:///code.jquery.com/jquery.js"></script>
        <script src="http:///netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
    </html>