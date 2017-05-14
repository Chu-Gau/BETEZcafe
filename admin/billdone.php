<?php
    require("../app/database.php");
    $billid = $_GET['billid'];
    $conn->query("UPDATE `bills` SET `done` = 1 WHERE `billid` = $billid");
    header("Location: ./");
?>