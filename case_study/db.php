<?php
$username   = 'root';
$password   = '';
$database   = 'case_study';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    // echo "ket noi thanh cong";
} catch (Exception $e) {
    // echo $e->getMessage();
    echo '<h1> Khong the ket noi CSDL </h1>';
}