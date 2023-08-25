<?php
 define('ROOT_URL','http://localhost/case_study_m3/QLDT');
 define('ROOT_DIR', dirname(__FILE__) );
$username   = 'root';
$password   = '';
$database   = 'tiem_thuoc';
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    // echo "thanh cong";
} catch (Exception $e) {
    echo $e->getMessage();
    echo '<h1> Khong the ket noi CSDL </h1>';
}











