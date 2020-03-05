<?php

class OrderModel
{
    public function listAll() 
    {
        $database = new Database('mysql:host=localhost;dbname=resto;charset=UTF8', 'root', '');
        
        $sql = 'SELECT * FROM `order`';
                
        return $database->query($sql);
    }
} 