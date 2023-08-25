<?php
//ket noi voi db
require_once "db.php";
$controller = isset( $_GET['Controller'] ) ? $_GET['Controller'] : 'Category';
$action = isset( $_GET['action'] ) ? $_GET['action'] : 'index';
switch ($controller) {
    case 'Category':
        require_once 'Controllers/CategoryController.php';
        $objController = new CategoryController();
        break;
        default:
        # code...
        break;

    }
    switch ($action) {
        case 'index':
            $objController->index();
            break;
        case 'create':
            $objController->create();
            break;
        case 'store':
            $objController->store();
            break;
        case 'edit':
            $objController->edit();
            break;
        case 'update':
            $objController->update();
            break;
        case 'show':
            $objController->show();
            break;
        case 'destroy':
            $objController->destroy();
            break;
        default:
            # code...
            break;
    }