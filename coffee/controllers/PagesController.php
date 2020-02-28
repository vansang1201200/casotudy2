<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Menu;

class PagesController
{
    public function home()
    {
        $listmenus = App::get('database')->selectAll('menu');


        $listmenus = array_map(function ($menu) { 
            //$menu->water_photo = addslashes(file_get_contents($_FILES['water_photo']['tmp_name']));
            return new Menu($menu->ID_oder, $menu->Name_coffee,$menu->water_photo,$menu->price);
        }, $listmenus);

        return view('index', ['listmenus' => $listmenus]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {


        return view('contact');
    }




    public function home1()
    {
        $listmenus = App::get('database')->selectAll('customer');


        $listmenus = array_map(function ($menu) { 
            //$menu->water_photo = addslashes(file_get_contents($_FILES['water_photo']['tmp_name']));
            return new Menu($menu->ID_oder, $menu->Name_coffee,$menu->water_photo,$menu->price);
        }, $listmenus);

        return view('index', ['listmenus' => $listmenus]);
    }

  
}