<?php
    $query = "SELECT * FROM `products` WHERE `index` = ".$productIndex;
    $product = $conn->query($query);
    if($product == false){
        echo 'error';
    }
    else{
        $product = $product->fetch_assoc();
        if(empty($product)){
            echo 'error';
        }else{
        // the cart product template
?>
    <div class="cart-product">
        <div class="cart-product-thumbnail" style="background-image: url('images/products/<?php echo $product['thumbnaillinks']; ?>');"></div>
        <p class='cart-product-name'>
            <?php echo $product['name']; ?>
        </p>
    </div>
    <?php
    }
}
?>