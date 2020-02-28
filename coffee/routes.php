<?php 
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('showAddBrand', 'BrandControler@add');

$router->post('addmenu', 'BrandControler@store');
// $router->post('addmenu', 'BrandControler@store');

$router->get('editmenus', 'BrandControler@edit');
$router->get('editmenu', 'BrandControler@update');
$router->post('editmenu', 'BrandControler@update');
$router->get('deletemenu', 'BrandControler@delete');
$router->get('login', 'BrandControler@login');

