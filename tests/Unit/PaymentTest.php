<?php

namespace Tests\Unit;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    use RefreshDatabase;

    protected $payment;


    protected function setUp() : void
    {
        parent::setUp();

        Sanctum::actingAs(User::factory()->create());

        $this->payment = Payment::factory()->create();
    }

    /** @test */
    public function product_has_an_owner()
    {
        $this->assertInstanceOf(User::class, $this->payment->owner);
    }
}
