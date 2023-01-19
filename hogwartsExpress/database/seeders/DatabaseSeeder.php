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
            'features' => 'Comestibles disponibles del carrito de dulces: grageas, ranas de chocolate, serpientes de gominola, manzanas de caramelo, varitas de regaliz, empanadas de calabaza y superhinchables. Venta de ejemplares físicos del Periódico "Diario El Profeta".',
            'img'=> 'http://images.ctfassets.net/usf1vwtuqyxm/3QJzATnZwIQOm4cCC6ksoe/7c8fbafab0b6f399d1953e5e992405d5/DiagonAlley_PM_B1C5M1_DiagonAlley_V2_Moment.jpg?fm=jpg&q=70&w=2560',
        ]);

        TrainRoute::factory()->create([
            'name'=> 'Málaga Centro Alameda - Hogwarts School of Witchcraft and Wizardry',
            'origin'=> 'Málaga',
            'destination'=> 'Hogwarts',
            'date'=> '2023-02-19',
            'departureTime'=> '11:00:00',
            'arrivalTime'=> '13:00:00',
            'routeLength'=> '120',
            'availableSeats'=> '150',
            'features' => 'Oferta disponible del carrito de dulces: 2x1 en ranas de chocolate. Animales permitidos para viajar en el vagón de las mascotas: sapo, rata, perro, gato, lechuza y cerdo. El trayecto incluye la recepción y transporte hasta el castillo.',
            'img'=> 'http://images.ctfassets.net/usf1vwtuqyxm/2sLwPSOVqoOyCkEgSk0Oek/2a8885b787d86f7bed89e84cf2aa28d5/MinervaMcGonagall_PM_B1C7M2_HarryPotterBeingSortedInGreatHall_Moment.jpg?fm=jpg&q=70&w=2560',
        ]);


        TrainRoute::factory()->create([
            'name'=> 'Victoria Kent - Diagon Alley',
            'origin'=> 'Málaga',
            'destination'=> 'Diagon Alley',
            'date'=> '2023-04-07',
            'departureTime'=> '09:00:00',
            'arrivalTime'=> '11:00:00',
            'routeLength'=> '120',
            'availableSeats'=> '200',
            'features' => 'Acceso al vagón biblioteca permitido a magos y brujas mayores de 12 años o menores con acompañamiento. ¡Que disfrute de sus compras en las mejores tiendas!',
            'img'=> 'http://images.ctfassets.net/usf1vwtuqyxm/4Z92P1ObJe4kesMkaMW4sO/5e4dd3e062edf7610228cc3d18ab3b62/DiagonAlley_PM_B1C5M1_DiagonAlley_V1_Moment.jpg?fm=jpg&q=70&w=2560',
        ]);

        TrainRoute::factory()->create([
            'name'=> 'Kyiv Main Station - Forbidden Forest',
            'origin'=> 'Ukraine',
            'destination'=> 'Forbidden Forest',
            'date'=> '2023-04-19',
            'departureTime'=> '18:00:00',
            'arrivalTime'=> '22:00:00',
            'routeLength'=> '240',
            'availableSeats'=> '130',
            'features' => 'Trayecto largo no apto para muggles o magos y brujas menores de edad. Llegada prevista por la noche. Disponible menú del vagón restaurante. Especialidad: crema de guisantes (cómetela o te comerá ella antes...).',
            'img'=> 'http://images.ctfassets.net/usf1vwtuqyxm/SSWmnXpEIMiG46gAkMioQ/37fbb21507948d781e7b292ae5ca9fc6/Thestrals_PM_B5C10M2_HarrySeesThestralsForFirstTime_Moment.jpg?fm=jpg&q=70&w=2560',
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

