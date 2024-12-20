<?php

namespace App\AbstractFactories\Product\Providers\Downloadable;

use App\AbstractFactories\Product\Presenter;

class DownloadablePresent implements Presenter
{

    public function present(): string
    {
        return "Presenting a downloadable product.";
    }
}
