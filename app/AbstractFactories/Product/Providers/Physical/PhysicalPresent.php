<?php

namespace App\AbstractFactories\Product\Providers\Physical;

use App\AbstractFactories\Product\Presenter;

class PhysicalPresent implements Presenter
{

    public function present(): string
    {
        return "Presenting a physical product.";
    }
}
