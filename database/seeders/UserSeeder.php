<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => '1',
            'name' => "Super Admin Filza",
            'email' => "filzaramadhan2003@gmail.com",
            'nip' => "10112003",
            'role_user' => '4',
            'active' => '1',
            'password' => Hash::make('filzarizki2003'),
        ]);
    }
}
