<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editorial;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editorial::create([
            'nombre' => 'ALFAGUARA'
        ]);
        Editorial::create([
            'nombre' => 'PLANETA'
        ]);
        Editorial::create([
            'nombre' => 'SALAMANDRA'
        ]);
        Editorial::create([
            'nombre' => 'SUMA'
        ]);
    }
}
