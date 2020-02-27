<?php

namespace App\Models;

class Brand
{
    public $brand_id;
    public $brand_name;

    public function __construct($brand_id, $brand_name)
    {
        $this->brand_id = $brand_id;
        $this->brand_name = $brand_name;
    }

    public function getCity() 
    {
        return 'Huế';
    }
}
