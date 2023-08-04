<?php
        $server_name = 'localhost';
        $db_name = 'demo_pdo';
        $username = 'ct392';
        $password = 'anduc2100345';
        $connect =  mysqli_connect($server_name,$username,$password,$db_name);
if($connect){
    echo  "thanh cong";

}else{
    echo "that bai";
}