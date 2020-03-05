<?php

include 'library/Database.class.php';
include 'application/models/MealModel.class.php';
include 'application/controllers/MealController.class.php';

$controller = new MealController();
$controller->httpGetMethod();