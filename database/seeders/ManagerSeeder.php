<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manager::create([
            'first_name' => 'shayan',
            'last_name' => 'nik',
            'email' => 'test@example.com',
            'mobile' => '099999999',
            'password' => Hash::make('123456'),
            'level' => 'manager',
            'status' => 'active',
        ]);
    }
}
