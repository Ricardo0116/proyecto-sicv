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
            // 'idroles' => '1',
            'name' => 'Hernando',
            // 'roles' => 'administrador',
            'apellidos' => 'Carvajal Velazquez',
            'genero' => 'Masculino',
            'barrio' => 'Rafael Uribe Uribe',
            'direccion' => 'no se',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('VelazquezHe'),
        ]);
        $user->assignRole('administrador');

        $user = User::create([
            'name' => 'Pepito',
            'apellidos' => 'Peralta Romero',
            'genero' => 'Masculino',
            'barrio' => 'Rafael Uribe Uribe',
            'direccion' => 'no se',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('RomPer15'),
        ]);
        $user->assignRole('cliente');

        // $user = User::create([
        //     'name' => 'Melanie',
        //     'apellidos' => 'Cubillos Perez',
        //     'genero' => 'Femenino',
        //     'barrio' => 'Rafael Uribe Uribe',
        //     'direccion' => 'no se',
        //     'email' => 'cliente@gmail.com',
        //     'password' => Hash::make('LloRez22'),
        // ]);
        // $user->assignRole('cliente');
    }

}
