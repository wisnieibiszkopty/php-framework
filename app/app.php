<?php

use Kamil\Framework\Router;

/*
|
|   Here is instance of your app
|   write your routes here 
|
*/

$app = Router::getInstance();



$app->add('GET', '/home', function(){

    echo "<h1>Hello world!</h1>";
});