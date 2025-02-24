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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company_name' => "Siki",
            'email' => "admin_siki@gmail.com",
            'password' => Hash::make("admin_siki@123"),
            'mobile' => 1234567890,
            'website' => "www.siki.com",
            'address' => "Test Address",
            'role' => '0',
        ]);
    }
}
