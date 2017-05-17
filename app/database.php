<?php
    // Create connection
    $conn = mysqli_connect('localhost', 'u160141961_root', 'teamchugau1997', 'u160141961_betez');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
?>