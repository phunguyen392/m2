<?php

require_once 'Models/Post.php';
require_once 'Models/User.php';
class PostController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Post::all();
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/posts/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = User::all();
        require_once 'Views/posts/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Post::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controller=post&action=index");

    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Post::find($id);
        $users = User::all();
        // Truyen xuong Views
        require_once 'Views/posts/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Post::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=post&action=index");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Post::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=post&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Post::find($id);

        // Truyen xuong Views
        require_once 'Views/posts/show.php';
    }

    //tim liem
    public function search(){
       Post::search();
    //    User::search();
// Chuyen huong ve trang danh sach
header("Location: index.php?controller=post&action=index");
    }
}