<?php
//ket noi db
class Category
{
        // lay ta ca du lieu

    public static function all(){
        global $conn;
        $sql = "SELECT * FROM `categories`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll(); 
        // Tra ve cho Model
        return $rows;
    }

     // lay chi tiet 1 du lieu
     public static function find($id){
        global $conn;
        $sql = "SELECT * FROM `categories` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

       // // Them moi du lieu
       public static function store($data){
        global $conn;
        $name = $data['name'];  
        $created_at = $data['created_at'];
        $updated_at = $data['updated_at'];
        $image_url = $data['image_url'];

      
        $sql = "INSERT INTO `categories` 
        ( `name`,`created_at`,`updated_at`,`image_url`) 
        VALUES 
        ('$name','$created_at','$updated_at','$image_url')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

      // Cap nhat du lieu
      public static function update( $id, $data ){
        global $conn;
        $name = $data['name'];
        $created_at = $data['created_at'];
        $updated_at = $data['updated_at'];
        $image_url = $data['image_url'];


        $sql = "UPDATE `categories` SET `name` = '$name', `created_at` = '$created_at', `updated_at` = '$updated_at', `image_url` = '$image_url' WHERE `id` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;

    }

     // //Xoa du lieu
     public static function delete($id){
        global $conn;
        $sql = "DELETE FROM categories WHERE id = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}