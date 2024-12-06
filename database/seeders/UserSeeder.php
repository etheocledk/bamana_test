<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'Alice Dupont',
            'email' => 'alicedupont@exemple.com',
            'password' => Hash::make('Ustbenin@2024'),
            'role' => 'admin',
        ]);

        User::create([
            'fullname' => 'Bob Martin',
            'email' => 'bobmartin@exemple.com',
            'password' => Hash::make('Ustbenin@2024'),
            'role' => 'Customer',
        ]);
    }
}
