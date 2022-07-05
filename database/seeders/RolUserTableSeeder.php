<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RolUser;

class RolUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roluser = Roluser::create([
            'idroles' => '1',
            'id' => '1',
             
        ]);
        $roluser = Roluser::create([
            'idroles' => '3',
            'id' => '2',
             
        ]);
    }
}
