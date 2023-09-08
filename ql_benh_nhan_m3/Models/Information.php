<?php

    // Ket noi voi database
    class Information
     {
        // lay ta ca du lieu
        public static function all(){
            
            global $conn;
            
            
            $sql = "SELECT * FROM `informations`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `informations` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $ngay_nhap_vien = $data['ngay_nhap_vien'];
            $gioi_tinh = $data['gioi_tinh'];
            $tinh_trang = $data['tinh_trang'];
            $thong_tin = $data['thong_tin'];
            $sql = "INSERT INTO `informations` 
            ( `ngay_nhap_vien`, `gioi_tinh`,`tinh_trang`, `thong_tin`) 
            VALUES 
            ('$ngay_nhap_vien','$gioi_tinh','$tinh_trang','$thong_tin')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $ngay_nhap_vien = $data['ngay_nhap_vien'];
            $gioi_tinh = $data['gioi_tinh'];
            $tinh_trang = $data['tinh_trang'];
            $thong_tin = $data['thong_tin'];

            $sql = "UPDATE `informations` SET `ngay_nhap_vien` = '$ngay_nhap_vien', `gioi_tinh` = '$gioi_tinh',`tinh_trang` = '$tinh_trang', `thong_tin` = '$thong_tin' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM informations WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
       
    }
    ?>