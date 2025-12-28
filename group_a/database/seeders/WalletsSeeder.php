<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wallets;

class WalletsSeeder extends Seeder
{
    public function run()
    {
        Wallets::create(['user_id' => 1, 'balance' => 10000]);
        Wallets::create(['user_id' => 2, 'balance' => 5000]);
    }
}
