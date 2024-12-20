<?php

namespace App\Providers;

use App\AbstractFactories\Product\ProductFactory;
use App\AbstractFactories\Product\Providers\Downloadable\DownloadableProductFactory;
use App\AbstractFactories\Product\Providers\Physical\PhysicalProductFactory;
use App\AbstractFactories\Product\Providers\Service\ServiceProductFactory;
use Illuminate\Support\ServiceProvider;

class ProductFactoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductFactory::class, function ($app) {
            $productType = request()->input('productType');

            return match ($productType) {
                'downloadable' => $app->make(DownloadableProductFactory::class),
                'physical' => $app->make(PhysicalProductFactory::class),
                'service' => $app->make(ServiceProductFactory::class),
                default => throw new \InvalidArgumentException("Invalid product: $productType"),
            };
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
