<?php

require_once 'Models/List.php';
class ListController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Lists::all();
        // echo "<pre>";
        // die();
       // Truyen data xuong Views
        require_once 'Views/lists/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = Lists::all();
        require_once 'Views/lists/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Lists::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?Controller=list&action=index");


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Lists::find($id);
        // $Lists = List::all();
        // Truyen xuong Views
        require_once 'Views/lists/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Lists::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=list&action=index");

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Lists::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=list&action=index");

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Lists::find($id);

        // Truyen xuong Views
        require_once 'Views/lists/show.php';
    }

 
}