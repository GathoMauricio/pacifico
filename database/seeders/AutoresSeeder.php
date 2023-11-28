<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create([
            'nombre' => 'Juan José',
            'apaterno' => 'Benites',
        ]);
        Autor::create([
            'nombre' => 'Juan',
            'apaterno' => 'Rulfo',
        ]);
        Autor::create([
            'nombre' => 'Edgar Allan',
            'apaterno' => 'Poe',
        ]);
        Autor::create([
            'nombre' => 'Miguel',
            'apaterno' => 'De Cervantes',
        ]);
        Autor::create([
            'nombre' => 'Federico',
            'apaterno' => 'Garcia',
            'amaterno' => 'Lorca',
        ]);
        Autor::create([
            'nombre' => 'Gabriel',
            'apaterno' => 'Garcia',
            'amaterno' => 'Marquez',
        ]);
    }
}
