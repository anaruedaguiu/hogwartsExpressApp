<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\TrainRoute;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        TrainRoute::factory()->create([
            'name'=> 'Málaga María Zambrano Station - Hogsmeade Station',
            'origin'=> 'Málaga',
            'destination'=> 'Hogsmeade',
            'date'=> '2022-12-31',
            'departureTime'=> '10:00:00',
            'arrivalTime'=> '13:00:00',
            'routeLenght'=> '180',
            'availableSeats'=> '120',
            'features' => 'Disponible el carrito de dulces - ejemplar Periódico "Diario El Profeta"',
            'img'=> 'https://i.pinimg.com/originals/ca/e5/5a/cae55a87045ef2b7c2b303ffaad1ca1a.jpg',
        ]);

        TrainRoute::factory(5)->create();

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);
    }
}
