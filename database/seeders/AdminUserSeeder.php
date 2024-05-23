<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'kahuhobrian0@gmail.com',
            'password' => Hash::make('Brykahn#123'), // change this to a secure password
            'usertype' => 'admin', // Assuming you have an `is_admin` field to distinguish admin users
        ]);
    }
}
