<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sauna;

class SaunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sauna::create([
            'name' => 'ニュージャパン大阪',
            'sauna_temperature' => '100',
            'sauna_humidity' => '80',
            'water_temperature' => '15',
            'user_id' => '1'
        ]);
        Sauna::create([
            'name' => '極楽湯',
            'sauna_temperature' => '90',
            'sauna_humidity' => '50',
            'water_temperature' => '20',
            'user_id' => '2'

        ]);
        Sauna::create([
            'name' => '極楽湯',
            'sauna_temperature' => '90',
            'sauna_humidity' => '50',
            'water_temperature' => '20',
            'user_id' => '3'

        ]);
    }
}
