<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'Alberto',
            'email' => 'alberto@example.com',
            'password' => Hash::make('1234'),
            'role' => 'user'
        ]);

        User::factory(5)->create(); // opcional con Faker
    }
}
