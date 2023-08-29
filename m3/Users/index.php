<?php
// Ket noi voi DB
require_once 'db.php';
?>

<?php
   
   $action = isset($_GET['action']) ? $_GET['action'] : 'index';
   $controllers = isset($_GET['controller']) ? $_GET['controller'] : 'post';

   switch ($controllers) {
       case 'post':
           require_once 'Controllers/PostController.php';
           $objController = new PostController();
           break;    
    case 'user':
        require_once 'Controllers/UserController.php';
        $objController = new UserController();
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
        case 'search':
            $objController->search();
            break;
       default:
           # code...
           break;
   }
   ?>  