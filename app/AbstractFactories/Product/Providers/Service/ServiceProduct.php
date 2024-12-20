<?php

namespace App\AbstractFactories\Product\Providers\Service;

use App\AbstractFactories\Product\Product;

class ServiceProduct implements Product
{

    public function title(): string
    {
        return "Service Product Title";
    }

    public function price(): string
    {
        return "$15.00";
    }
}
