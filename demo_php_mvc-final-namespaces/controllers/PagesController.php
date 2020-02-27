<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\Brand;

class PagesController
{
    public function home()
    {
        $listbrands = App::get('database')->selectAll('brands');


        $listbrands = array_map(function ($brand) {
            return new Brand($brand->brand_id, $brand->brand_name);
        }, $listbrands);

        // include 'views/index.view.php';
        return view('index', ['listbrands' => $listbrands]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        // require 'views/contact.view.php';

        return view('contact');
    }

    public function login()
    {
        return view('login');
    }
}
