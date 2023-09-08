<?php
// Ket noi voi DB
require_once 'db.php';
?>
<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
   $controllers = isset($_GET['controller']) ? $_GET['controller'] : 'list';
  
   switch ($controllers) {
       case 'list':
           require_once 'Controllers/ListController.php';
           $objController = new ListController();
           break;    
    case 'information':
        require_once 'Controllers/InformationController.php';
        $objController = new InformationController();
        break;   
        
       default:
       //..
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
       //..
           break;
   }
   ?>  