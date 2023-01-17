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
            'routeLength'=> '180',
            'availableSeats'=> '120',
            'features' => 'Disponible el carrito de dulces - ejemplar Periódico "Diario El Profeta"',
            'img'=> 'https://i.pinimg.com/originals/ca/e5/5a/cae55a87045ef2b7c2b303ffaad1ca1a.jpg',
        ]);

        TrainRoute::factory()->create([
            'name'=> 'Málaga María Zambrano Station - Hogwarts School of Witchcraft and Wizardry',
            'origin'=> 'Málaga',
            'destination'=> 'Hogwarts',
            'date'=> '2023-01-19',
            'departureTime'=> '11:00:00',
            'arrivalTime'=> '13:00:00',
            'routeLength'=> '120',
            'availableSeats'=> '150',
            'features' => 'Disponible el carrito de dulces - ejemplar Periódico "Diario El Profeta"',
            'img'=> 'https://4.bp.blogspot.com/-dQmFsc4pY58/Vup7zY23d4I/AAAAAAAAQuk/9zTi7LxRn44nP4Qzm0bHKpYeb-zveCu4A/s1600/hogwarts%2B%25281%2529.jpg',
        ]);
        

        TrainRoute::factory(5)->create();

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 'isAdmin' => false]);

        User::factory()
            ->has(TrainRoute::factory()->count(5))
            ->create();

        TrainRoute::factory()
            ->has(User::factory()->count(5))
            ->create();
    }
}
