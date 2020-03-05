<?php

//var_dump($_SERVER);


include 'library/Database.class.php';
/*
include 'application/models/OrderModel.class.php';
include 'application/controllers/OrderController.class.php';

include 'application/models/MealModel.class.php';
include 'application/controllers/MealController.class.php';
*/
function loadClass($model)
{

    $ourPath = "application/models/" .$model .".class.php";

    if(file_exists($ourPath)) {

        include $ourPath;
    }
    else 
    {
        $ourPath = "application/controllers/" .$model .".class.php";
        include $ourPath;
    }
}

$basePath = $_SERVER["SCRIPT_NAME"];

echo $basePath;

spl_autoload_register("loadClass");




if (isset($_SERVER['PATH_INFO']))
{
    $path = $_SERVER['PATH_INFO'];

    if ($path === '/meal') 
    {
        


        $controller = new MealController();
        $controller->httpGetMethod();
    } 
    elseif ($path === '/order') 
    {
        $controller = new OrderController();
        $controller->httpGetMethod();
    }
    else 
    {
        $_fatalErrorMessage = 'Erreur 404: Page non trouvée';
        include 'application/www/ErrorView.phtml';
    } 
} else {
    $_fatalErrorMessage = 'Erreur 404: Page non trouvée';
    include 'application/www/ErrorView.phtml';
}

