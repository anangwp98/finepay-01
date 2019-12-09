<?php
    session_start();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    setcookie('sesuatu', 14);

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
?>