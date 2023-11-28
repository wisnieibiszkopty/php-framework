<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Kamil\Framework\Router;

include_once "app.php";


$app = Router::getInstance();

// zamiast jednego routera przydałoby się zrobić możliwość dodania kilku i sklejenia
// no i pisania klas

$app->match();