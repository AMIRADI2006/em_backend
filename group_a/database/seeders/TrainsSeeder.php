<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;

class TrainsSeeder extends Seeder
{
    public function run()
    {
        Trains::create(['name' => 'قطار شماره ۱', 'capacity' => 5000]);
        Trains::create(['name' => 'قطار شماره ۲', 'capacity' => 7000]);
    }
}
