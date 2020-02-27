<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('showAddBrand', 'BrandControler@add');
$router->get('login', 'PagesController@login');
$router->get('editbrand', 'BrandControler@edit');
$router->post('editbrand', 'BrandControler@update');
$router->post('addBrand', 'BrandControler@store');
$router->get('deleteband', 'BrandControler@delete');