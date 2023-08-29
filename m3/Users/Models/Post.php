<?php
    // Ket noi voi database
    class Post {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            if(isset($_GET['search']) && $_GET['search']){
                $search = $_GET['search'];
            $sql = "SELECT posts.*, users.email FROM users
            ON users.id = posts.user_id
             WHERE users.email LIKE '%$search%'";

            }
        else{

            $sql = "SELECT users.email, posts.*
            FROM users
            JOIN posts ON users.id = posts.user_id;" ;
        }
      
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //  = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT posts.*,users.email FROM users
            JOIN posts ON users.id = posts.user_id
             WHERE posts.id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $user_id = $data['user_id'];
            $title = $data['title'];
            $content = $data['content'];
          
            $sql = "INSERT INTO `posts` 
            ( `user_id`, `title`, `content`) 
            VALUES 
            ('$user_id','$title','$content')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $title = $data['title'];
            $content = $data['content'];
            $user_id = $data['user_id'];

    

            $sql = "UPDATE `posts` SET `user_id` = '$user_id', `title` = '$title', `content` = '$content' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM posts WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }

        //tim du lieu
        public static function search(){
            global $conn;
            $sql = "SELECT * FROM posts WHERE id LIKE '%$search%";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }
    }