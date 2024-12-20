<?php

namespace App\AbstractFactories\Product\DTOs;

readonly class PresentProductResponse
{
    /**
     * PresentProductResponse constructor.
     *
     * @param string $title
     * @param string $price
     * @param string $presentation
     */
    public function __construct(
        public string $title,
        public string $price,
        public string $presentation,
    )
    {
    }

    /**
     * @param array $props
     * @return PresentProductResponse
     */
    public static function Builder(array $props): PresentProductResponse
    {
        return new PresentProductResponse(
            $props['title'],
            $props['price'],
            $props['presentation'],
        );
    }

    /**
     * @return array
     */
    public function Props(): array
    {
        return get_object_vars($this);
    }
}
