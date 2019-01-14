<?php

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
        // $this->call(UsersTableSeeder::class);


        // Factory para users
        factory(\App\User::class, 1)->create([
            'name' => 'Juan Manuel',
            'surname' => 'Galvis Candelo',
            'email' => 'admin@mail.com',
            'identification_document' => '1144027456',
            'phone' => '315618',
            'address' => 'Carrera 7 67 - 12',
            'password' => bcrypt('secret')
        ]);

    }
}
