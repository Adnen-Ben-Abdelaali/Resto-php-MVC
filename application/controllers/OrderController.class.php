<?php

class OrderController
{
    public function httpGetMethod()
    {   
        global $basePath;
    	$ordersModel = new OrderModel();
    	$orders = $ordersModel->listAll();
        
        include 'application/www/views/OrderView.phtml';
        die();
    }
}