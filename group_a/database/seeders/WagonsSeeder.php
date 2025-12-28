<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wagons;


class WagonsSeeder extends Seeder
{
    public function run()
    {
        Wagons::create(['train_id' => 1, 'wagon_number' => 'W1', 'capacity' => 2000]);
        Wagons::create(['train_id' => 1, 'wagon_number' => 'W2', 'capacity' => 3000]);
        Wagons::create(['train_id' => 2, 'wagon_number' => 'W1', 'capacity' => 3500]);
    }
}
