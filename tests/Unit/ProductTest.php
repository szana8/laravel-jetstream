<?php

namespace Tests\Unit;

use App\Models\Price;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    protected $product;

    protected $productWithPrice;

    protected function setUp() : void
    {
        parent::setUp();

        Sanctum::actingAs(User::factory()->create());

        $this->product = Product::factory()->create();

        $this->productWithPrice = Price::factory()->create()->product;
    }

    /** @test */
    public function product_has_an_owner()
    {
        $this->assertInstanceOf(User::class, $this->product->owner);
    }

    /** @test */
    public function product_has_prices()
    {
        $this->assertInstanceOf(Price::class, $this->productWithPrice->prices->first());
    }
}
