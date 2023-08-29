<?php
    // Ket noi voi database
    class User {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `users`";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `users` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // // Them moi du lieu
        public static function store($data){
            global $conn;
            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            $phone = $data['phone'];
            if (isset($_FILES['image'])) {
                if (!$_FILES['image']['error']) {
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR . '/public/uploads/' . $_FILES['image']['name']);
                    $image = '/public/uploads/' . $_FILES['image']['name'];
                }
            }
            $sql = "INSERT INTO `users` 
            ( `name`, `email`, `password`, `phone`, `image`) 
            VALUES 
            ('$name','$email','$password','$phone','$image')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data ){
            global $conn;
            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            $phone = $data['phone'];
            $image = '';

           // Kiểm tra xem đã tải lên ảnh mới hay chưa
        if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
            // Đường dẫn thư mục tải lên
            $uploadDir = ROOT_DIR . '/public/uploads/';
             // Di chuyển ảnh mới vào thư mục đích
             $newImage = $uploadDir . $_FILES['image']['name'];
             move_uploaded_file($_FILES['image']['tmp_name'], $newImage);
             $image = '/public/uploads/' . $_FILES['image']['name'];
            // Xóa ảnh cũ nếu có
            $sql = "SELECT `image` FROM `users` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $oldImage = $stmt->fetchColumn();
            
            if ($oldImage && file_exists($uploadDir . $oldImage)) {
                unlink($uploadDir . $oldImage);
            }

           
        } else {
            // Không có ảnh mới được tải lên, giữ nguyên ảnh cũ
            $sql = "SELECT `image` FROM `users` WHERE `id` = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $image_url = $stmt->fetchColumn();
        }




            $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password', `phone` = '$phone', `image` = '$image' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        // //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM users WHERE id = $id";
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