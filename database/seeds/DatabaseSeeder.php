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
        // Factory para roles
        factory(\App\Role::class, 1)->create(['name' => 'Administrador']);
        factory(\App\Role::class, 1)->create(['name' => 'Cliente']);

        // Factory para users
        factory(\App\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret'),
            'role_id' => \App\Role::ADMIN
        ]);

    }
}
