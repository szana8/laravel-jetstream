<?php

namespace Tests\Feature;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PaymentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_users_can_registrate_them_payment_methods()
    {
        $this->withoutExceptionHandling();

        Sanctum::actingAs(User::factory()->create());

        $payment = Payment::factory()->raw();

        $this->post('/api/payment', $payment)->assertOk();
    }

    /** @test */
    public function a_users_can_see_their_payments()
    {
        Sanctum::actingAs(User::factory()->create());

        $payment = Payment::factory()->raw();

        $this->post('/api/payment', $payment)->assertOk();

        $this->get('/api/payment')->assertJsonCount(1);
    }

    /** @test */
    public function a_users_can_see_their_specify_payment()
    {
        Sanctum::actingAs(User::factory()->create());

        $payment = Payment::factory()->create();

        $this->get('/api/payment/' . $payment->api_id)->assertSee($payment['name']);
    }
}
