<?php

namespace App\AbstractFactories\Product\Providers\Downloadable;

use App\AbstractFactories\Product\Presenter;
use App\AbstractFactories\Product\Product;
use App\AbstractFactories\Product\ProductFactory;

class DownloadableProductFactory implements ProductFactory
{

    public function createProduct(): Product
    {
        return new DownloadableProduct();
    }

    public function createPresenter(): Presenter
    {
        return new DownloadablePresent();
    }
}
