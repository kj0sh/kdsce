<?php
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $baseURI = explode('/', $_SERVER['REQUEST_URI']);
} else {
    $baseURI = ['', ''];
}

$router->get("{$baseURI[1]}/", 'HomeController@index');
$router->get("{$baseURI[1]}/about", 'HomeController@about');
$router->get("{$baseURI[1]}/contact", 'HomeController@contact');
$router->get("{$baseURI[1]}/events", 'HomeController@events');
$router->get("{$baseURI[1]}/contact", 'HomeController@contact');
