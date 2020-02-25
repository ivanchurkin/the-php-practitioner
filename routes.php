<?php

/** @var Router $router */

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contacts', 'PagesController@contacts');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');