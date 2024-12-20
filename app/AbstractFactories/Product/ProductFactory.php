<?php

namespace App\AbstractFactories\Product;

interface ProductFactory
{
    public function createProduct(): Product;
    public function createPresenter(): Presenter;
}
