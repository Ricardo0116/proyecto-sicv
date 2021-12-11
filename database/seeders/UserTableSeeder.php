<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nombres' => 'Hernando',
            'apellidos' => 'Carvajal Velazquez',
            'genero' => 'Masculino',
            'barrio' => 'Rafael Uribe Uribe',
            'direccion' => 'no se',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('VelazquezHe'),
        ]);
        $user->assignRole('administrador');

        $user = User::create([
            'nombres' => 'Pepito',
            'apellidos' => 'Peralta Romero',
            'genero' => 'Masculino',
            'barrio' => 'Rafael Uribe Uribe',
            'direccion' => 'no se',
            'email' => 'vendedor@gmail.com',
            'password' => Hash::make('RomPer15'),
        ]);
        $user->assignRole('vendedor');

        $user = User::create([
            'nombres' => 'Melanie',
            'apellidos' => 'Cubillos Perez',
            'genero' => 'Femenino',
            'barrio' => 'Rafael Uribe Uribe',
            'direccion' => 'no se',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('LloRez22'),
        ]);
        $user->assignRole('cliente');
    }

}
