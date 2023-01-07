<?php

namespace Tests\Feature;

use App\Models\TrainRoute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDTrainRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */
    
    public function test_listTrainRouteAppearInHomeView(){
        $this->withExceptionHandling();

        $trainRoutes = TrainRoute::factory(2)->create();
        $trainRoute = $trainRoutes[0];

        $response = $this->get('/');

        $response->assertSee($trainRoute->name);

        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}
