<?php

use PHPUnit\Framework\TestCase;
use Acme\Product;

class ProductTest extends TestCase

{
    public function testTVA()
    {
        $product = new Product("name", Product::FOOD_PRODUCT,10);

        $result = $product->computeTVA();

        $this->assertSame(0.55,$result);
    }

}