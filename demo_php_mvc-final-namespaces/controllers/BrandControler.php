<?php

namespace App\Controllers;

use App\Core\App;

class BrandControler
{
    public function store()
    {
        App::get('database')->insert('brands', [
            'brand_name' => $_POST['brand_name']
        ]);
        
        
        
        return redirect();
    }

    public function add()
    {
        return view('addBrand');
    }

    public function edit()
    {
        $brand = App::get('database')->search('brands', $_GET['id']);

        // die(var_dump($brand[0]->brand_name));
        
        return view('editBrand', ['brand' => $brand]);
    }

    public function update()
    {
        // $brand = App::get('database')->search('brands', $_GET['id']);

        // die(var_dump($_POST['brand_name'],$_POST['brand_id']));
        
        App::get('database')->update('brands', [
            'brand_name' => $_POST['brand_name'],
            'brand_id' => $_POST['brand_id']
        ]);

        return redirect();
        // return view('editBrand', ['brand' => $brand]);
    }

    public function delete()
    {
        // $brand = App::get('database')->search('brands', $_GET['id']);

        // die(var_dump($_POST['brand_name'],$_POST['brand_id']));
        
        App::get('database')->delete('brands', $_GET['id']);

        return redirect();
        // return view('editBrand', ['brand' => $brand]);
    }
}
