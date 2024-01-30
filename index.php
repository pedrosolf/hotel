<?php
    require_once 'config/config.php';
    require_once 'config/functions.php';
    
    $currentPageUrl = $_SERVER['REQUEST_URI'];

    $isAdminUrl = strpos($currentPageUrl, '/' . ADMIN) !== false;

    $route = empty($_GET['url']) ? 'index/index' : $_GET['url'];

    $arrayUrl = explode('/', $route);
    
    if ($isAdminUrl && (count($arrayUrl) == 1
    || (count($arrayUrl) == 2 && empty($arrayUrl[1])))
    && $arrayUrl[0] == ADMIN) {
        $controller = 'AdminController';
        $method = 'login';
    }else {
        $indexUrl = ($isAdminUrl) ? 1 : 0;
        $controller = ucfirst($arrayUrl[$indexUrl])."Controller";
        $method = 'index';
    }

    
    $indexMethod = ($isAdminUrl) ? 2 : 1;

    if (!empty($arrayUrl[$indexMethod]) && $arrayUrl[$indexMethod] != ''){
        $method = $arrayUrl[$indexMethod];
    }

    $param = '';
    $indexParam = ($isAdminUrl) ? 3 : 2;

    if (!empty($arrayUrl[$indexParam]) && $arrayUrl[$indexParam]!= ''){
        for ($i = $indexParam; $i < count($arrayUrl); $i++) {
            $param .= $arrayUrl[$i]. ',';
        }
        $param = trim($param, ',');
    }

    require_once 'config/autoload.php';

    //$dirController = ($isAdminUrl) ? 'controllers/admin/' . $controller . '.php' : 'controllers/main/' . $controller . '.php';

    $dirController = 'controllers/'. $controller. '.php';

    if (file_exists($dirController)){
        require_once $dirController;
        $controller = new $controller();
        if (method_exists($controller, $method)){
            $controller->$method($param);
        }else{
            echo "metodo no existe";
        }
    }else{
        echo "controlador no existe";
    }
?>