<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'Novela'
        ]);
        Categoria::create([
            'nombre' => 'Historia'
        ]);
        Categoria::create([
            'nombre' => 'Terror'
        ]);
        Categoria::create([
            'nombre' => 'Comedia y Humor'
        ]);
    }
}
