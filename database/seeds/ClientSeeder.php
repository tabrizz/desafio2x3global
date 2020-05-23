<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        // Client
        $client = \App\Client::create([
            'email' => $faker->email,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        ]);
        $client = \App\Client::create([
            'email' => $faker->email,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        ]);
        $client = \App\Client::create([
            'email' => $faker->email,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        ]);
        $client = \App\Client::create([
            'email' => $faker->email,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        ]);
        $client = \App\Client::create([
            'email' => $faker->email,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        ]);



        /* $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);    
        
        // Client
        $client = \App\Client::create([
                'email' => $faker->email,
                'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

        $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);    
        
        // Client
        $client = \App\Client::create([
                'email' => $faker->email,
                'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

        $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);    
        
        // Client
        $client = \App\Client::create([
                'email' => $faker->email,
                'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

        $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);    
        
        // Client
        $client = \App\Client::create([
                'email' => $faker->email,
                'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

        $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);    
        
        // Client
        $client = \App\Client::create([
                'email' => $faker->email,
                'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            ]);

        $client->payments()->saveMany([
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
            new App\Payment([
                'expires_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'status' => 'pending',
            ]),
        ]);     */

    }       
}
