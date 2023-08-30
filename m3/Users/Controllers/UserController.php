<?php

require_once 'Models/User.php';
class UserController {
    // Hien thi danh sach records => table
    public function index(){
        $items = User::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/users/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'Views/users/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        User::store($_POST);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controller=user&action=index&success=1";</script>';

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = User::find($id);
        // Truyen xuong Views
        require_once 'Views/users/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        User::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controllers=product&action=index&success=1";</script>';
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        User::delete($id);
        // Chuyen huong ve trang danh sach
        echo '<script>window.location.href = "index.php?controllers=product&action=index&success=1";</script>';
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = User::find($id);

        // Truyen xuong Views
        require_once 'Views/users/show.php';
    }
       //tim liem
       public function search(){
        User::search();
 // Chuyen huong ve trang danh sach
 header("Location: index.php?controller=user&action=index");
     }
}