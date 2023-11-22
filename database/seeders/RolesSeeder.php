<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'id' => 1,
            'nombre' => 'Gerente'
        ]);
        Rol::create([
            'id' => 2,
            'nombre' => 'Empleado'
        ]);
        Rol::create([
            'id' => 3,
            'nombre' => 'Cliente'
        ]);
    }
}
