<?php

    // Ket noi voi database
    class Lists
     {
     // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        if (isset($_GET['search'])) {
            $keyword = $_GET['search'];
            $sql = "SELECT *
            FROM lists
            WHERE lists.name LIKE '%$keyword%'
            OR lists.class LIKE '%$keyword%'";
        } else {

            $sql = "SELECT lists.*
            FROM lists";
        }

        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        //  = $stmt->fetchAll(); 
        // Tra ve cho Model
        return $rows;
    }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `lists` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $name = $data['name'];
            $class = $data['class'];
       
            $sql = "INSERT INTO `lists` 
            ( `name`, `class`) 
            VALUES 
            ('$name','$class')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $name = $data['name'];
            $class = $data['class'];
          

            $sql = "UPDATE `lists` SET `name` = '$name', `class` = '$class' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM lists WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
       
    }
    ?>