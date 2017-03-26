<?php
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'betez');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
?>