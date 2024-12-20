<?php

namespace App\AbstractFactories\Product\Providers\Service;

use App\AbstractFactories\Product\Presenter;
use App\AbstractFactories\Product\Product;
use App\AbstractFactories\Product\ProductFactory;

class ServiceProductFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new ServiceProduct();
    }

    public function createPresenter(): Presenter
    {
        return new ServicePresent();
    }
}
