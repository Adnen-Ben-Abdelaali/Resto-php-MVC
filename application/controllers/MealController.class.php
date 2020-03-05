<?php

class MealController
{
    public function httpGetMethod()
    {   
        global $basePath;
        // Récupération de tous les produits alimentaires.
        $mealModel = new MealModel();
        $meals     = $mealModel->listAll();

        include 'application/www/views/MealView.phtml';
        die();
    }
}