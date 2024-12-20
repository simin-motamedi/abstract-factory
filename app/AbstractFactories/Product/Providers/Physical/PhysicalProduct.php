<?php

namespace App\AbstractFactories\Product\Providers\Physical;

use App\AbstractFactories\Product\Product;

class PhysicalProduct implements Product
{

    public function title(): string
    {
        return "Physical Product Title";
    }

    public function price(): string
    {
        return "$10.00";
    }
}
