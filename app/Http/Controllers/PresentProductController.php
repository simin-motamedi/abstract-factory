<?php

namespace App\Http\Controllers;

use App\AbstractFactories\Product\DTOs\PresentProductResponse;
use App\AbstractFactories\Product\ProductFactory;
use App\Http\Requests\ProductTypeRequest;

class PresentProductController extends Controller
{
    private ProductFactory $factory;

    public function __construct(ProductFactory $factory)
    {
        $this->factory = $factory;
    }

    public function __invoke(ProductTypeRequest $request): array
    {
        $product = $this->factory->createProduct();
        $presenter = $this->factory->createPresenter();
        $res = PresentProductResponse::Builder([
            'title' => $product->title(),
            'price' => $product->price(),
            'presentation' => $presenter->present(),
        ]);
        return $res->Props();
    }
}
