<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Throwable;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_an_authenticated_user_can_create_product()
    {
        $product = Product::factory()->raw();

        $this->post('/api/product', $product)->assertStatus(302);

        Sanctum::actingAs(User::factory()->create());

        $this->post('/api/product', $product)->assertOk();
    }

    /** @test */
    public function an_authenticated_user_can_see_their_products()
    {
        $product = Product::factory()->raw();

        Sanctum::actingAs(User::factory()->create());

        $this->post('/api/product', $product)->assertOk();

        $this->get('/api/product')->assertSee($product['name']);
    }

    /** @test */
    public function an_authenticated_user_can_see_their_specified_product()
    {
        $product = Product::factory()->create([
            'api_id' => 'test',
            'owner_id' => User::factory()->create()
        ]);

        Sanctum::actingAs(User::factory()->create());

        $this->get('/api/product/test')->assertSee($product['name']);
    }

}
