<?php

namespace App\AbstractFactories\Product\Providers\Downloadable;

use App\AbstractFactories\Product\Product;

class DownloadableProduct implements Product
{

    public function title(): string
    {
        return "Downloadable Product Title";
    }

    public function price(): string
    {
        return "$10.00";
    }
}
