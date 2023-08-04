<?php
class db {
    public function connect()
    {
        $server_name = "localhost";
        $db_name = "demo_pdo";
        $user_name = "root";
        $password = "";
        $dsn = "mysql server_name = $server_name; dbname = $db_name";
        $connect = new pdo ($dsn,$user_name,$password);
    }
}