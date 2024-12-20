<?php

namespace App\AbstractFactories\Product;

interface Product
{
    public function title():string;
    public function price():string;
}
