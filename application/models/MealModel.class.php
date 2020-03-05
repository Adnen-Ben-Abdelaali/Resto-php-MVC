<?php

class MealModel
{
    public function listAll()
    {
        $database = new Database('mysql:host=localhost;dbname=resto;charset=UTF8', 'root', '');

        $sql = 'SELECT * FROM meal';

        // Récupération de tous les produits alimentaires.
        return $database->query($sql);
    }
}