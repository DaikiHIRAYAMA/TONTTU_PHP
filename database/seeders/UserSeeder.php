<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test1',
            'email' => 'test1@test.com',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'test2',
            'email' => 'test2@test.com',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'test3',
            'email' => 'test3@test.com',
            'password' => 'password',
        ]);
    }
}
