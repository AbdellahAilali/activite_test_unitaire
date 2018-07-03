<?php

use PHPUnit\Framework\TestCase;
use Acme\Product;

class ProductTest extends TestCase

{


    public function testMulti()
    {

        $doublure = $this->createMock(Product::class);

        $doublure->method('multi')->willReturn(80);

        $this->assertSame(80, $doublure->multi());


    }


    /* public function testTVA()
      {
          $product = new Product("name", 88, 10);


          $result = $product->computeTVA();

          $this->assertSame(2.0, $result);
      }

      public function testException()
      {
          $product = new Product("name", Product::FOOD_PRODUCT,-1);
          $this->expectException("\LogicException");
          $product->computeTVA();
      }*/

}

