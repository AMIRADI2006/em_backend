<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cargos;

class CargosSeeder extends Seeder
{
    public function run()
    {
        Cargos::create(['name' => 'کالای الکترونیکی', 'weight' => 500]);
        Cargos::create(['name' => 'مواد غذایی', 'weight' => 1200]);
    }
}
