<?php

namespace App\AbstractFactories\Product\Providers\Service;

use App\AbstractFactories\Product\Presenter;

class ServicePresent implements Presenter
{

    public function present(): string
    {
        return "Presenting a service product.";
    }
}
