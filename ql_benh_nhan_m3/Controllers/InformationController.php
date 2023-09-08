<?php
require_once 'Models/Information.php';
class InformationController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Information::all();

        
        // echo "<pre>";
        // die();
        // Truyen data xuong Views
        require_once 'Views/informations/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        $items = Information::all();
        require_once 'Views/informations/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Information::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=information&action=index");


    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Information::find($id);
        // Truyen xuong Views
        require_once 'Views/informations/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Information::update( $id, $_POST );

        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=information&action=index");

    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Information::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=information&action=index");

    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Information::find($id);

        // Truyen xuong Views
        require_once 'Views/informations/show.php';
    }

}