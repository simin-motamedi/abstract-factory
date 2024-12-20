<?php

namespace App\AbstractFactories\Product\Providers\Physical;

use App\AbstractFactories\Product\Presenter;
use App\AbstractFactories\Product\Product;
use App\AbstractFactories\Product\ProductFactory;

class PhysicalProductFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new PhysicalProduct();
    }

    public function createPresenter(): Presenter
    {
        return new PhysicalPresent();
    }
}
