<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::connect(App::get('config')['database'])
));

function view($name, $data = []) 
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path = null)
{
    header("Location: /{$path}");
}