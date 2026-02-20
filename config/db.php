<?php
    $conn = new mysqli("localhost", "root", "", "php_test");

    if ($conn -> connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
?>