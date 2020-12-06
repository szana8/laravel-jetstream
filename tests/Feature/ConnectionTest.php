<?php


namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ConnectionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_connect_to_the_api()
    {
        $this->withoutExceptionHandling();

        Sanctum::actingAs(User::factory()->create());

        $this->get('api/test')
            ->assertSeeText('Connected');
    }
}