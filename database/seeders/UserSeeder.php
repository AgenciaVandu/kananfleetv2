<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create(['name' => 'superadmin']);
        $role2 = Role::create(['name' => 'user']);

        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev@agenciavandu.com',
            'password' => bcrypt('marencos6359:D'),
        ])->assignRole($role);
        User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'dev2@agenciavandu.com',
            'password' => bcrypt('marencos6359:D'),
        ])->assignRole($role2);

        User::create([
            'name' => 'Alvar Buenfil Vadillo',
            'email' => 'ab@agenciavandu.com',
            'password' => bcrypt('password'),
        ])->assignRole($role);

        User::create([
            'name' => 'Pruebas',
            'email' => 'test@agenciavandu.com',
            'password' => bcrypt('password'),
        ]);
    }
}
