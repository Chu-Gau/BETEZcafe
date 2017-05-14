<?php
    $result = $conn->query("SELECT `billid` FROM bills ORDER BY `billid` DESC LIMIT 1");
    $nextBillId = $result->fetch_assoc()['billid'] + 1;
    $data = "<div class=\'jumbotron bill\'><h2>#$nextBillId</h2><p><b>Họ tên: </b>$name</p><p><b>SĐT: </b>$phonenumber</p><p><b>Địa chỉ: </b>$address</p><div class=\'split\'></div> <p></p>";
    // <p>Cà phê đá: <b>3</b></p>
    $ordered = $_SESSION['ordered'];
    foreach ($ordered as $key => $value){
        $product = $conn->query("SELECT  `name` FROM products where `index` = $key")->fetch_assoc()['name'];
        $data = $data."<p>$product: <b>$value</b></p>";
    }
    $data = $data."<p><a class=\'btn btn-success btn-large \' href=\'billdone.php?billid=$nextBillId\'>Hoàn thành</a></p></div>";
    echo $data;
    $conn->query("INSERT INTO `bills`(`billcontent`) VALUES ('$data')");
?>
