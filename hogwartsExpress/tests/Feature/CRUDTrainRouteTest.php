<?php

namespace Tests\Feature;

use App\Models\User;
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

    public function test_aTrainRouteCanBeDeletedCanBeDeletedByAdminAndCanNotDeletedIfNoAdmin(){
        $this->withExceptionHandling();

        $trainRoute = TrainRoute::factory()->create();
        $this->assertCount(1, TrainRoute::all());

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteTrainRoute', $trainRoute->id));
        $this->assertCount(1, TrainRoute::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteTrainRoute', $trainRoute->id));
        $this->assertCount(0, TrainRoute::all());
    }

    public function test_aTrainRouteCanBeCreated(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        
        $response = $this->post(route('storeTrainRoute'),
        [
            'name'=> 'name',
            'origin'=> 'origin',
            'destination'=> 'destination',
            'date'=> '2022-12-31',
            'departureTime'=> '10:00:00',
            'arrivalTime'=> '13:00:00',
            'routeLength'=> 'routeLength',
            'availableSeats'=> '120',
            'features' => 'features',
            'img'=> 'img',   
        ]);

        $this->assertCount(1, TrainRoute::all());

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);

        $response = $this->post(route('storeTrainRoute'),
        [
            'name'=> 'name',
            'origin'=> 'origin',
            'destination'=> 'destination',
            'date'=> '2022-12-31',
            'departureTime'=> '10:00:00',
            'arrivalTime'=> '13:00:00',
            'routeLength'=> 'routeLength',
            'availableSeats'=> '120',
            'features' => 'features',
            'img'=> 'img',   
        ]);

        $this->assertCount(1, TrainRoute::all());
    }

    public function test_aTrainRouteCanBeUpdated(){
        $this->withExceptionHandling();

        $trainRoute = TrainRoute::factory()->create();
        $this->assertCount(1, TrainRoute::all());

        $userAdmin = User::factory()->create(['isAdmin' => true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updateTrainRoute', $trainRoute->id), ['name' => 'New Name']);
        $this->assertEquals('New Name', TrainRoute::first()->name);

        $userNoAdmin = User::factory()->create(['isAdmin' => false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updateTrainRoute', $trainRoute->id), ['name' => 'New Name if no Admin']);
        $this->assertEquals('New Name', TrainRoute::first()->name);
    }

    public function test_aTrainRouteCanBeShowed(){
        $this->withExceptionHandling();

        $trainRoutes = TrainRoute::factory(2)->create();
        $trainRoute = $trainRoutes[0];

        $response = $this->get(route('showTrainRoute', $trainRoute->id));

        $response->assertSee($trainRoute->name);

        $response->assertStatus(200)
                ->assertViewIs('showTrainRoute');
    }
}

