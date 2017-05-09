<?php
    // require_once("vendor\behat\mink-extension\src\Behat\MinkExtension\Context\MinkContext.php");
    // use Behat\MinkExtension\Context;
    require_once 'vendor/autoload.php';
    session_start();
    use Behat\MinkExtension\Context;
    $var = new MinkContext;
    $var->visit("/betez");
?>