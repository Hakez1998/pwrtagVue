<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Event::factory(40)->create();

        \App\Models\User::create([
            'name' => 'Luq',
            'email' => 'luqman@pwrtag.com',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::create([
            'name' => 'Izat',
            'email' => 'izzatdanial@pwrtag.com',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::create([
            'name' => 'Izat',
            'email' => 'eiman.asri@pwrtag.com',
            'password' => Hash::make('password')
        ]);

        \App\Models\User::create([
            'name' => 'Izat',
            'email' => 'hakimnorizman@pwrtag.com',
            'password' => Hash::make('password')
        ]);
    }
}
