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
        $user = [
            ['name' => 'User 1', 'email' => 'email1@gmail.com', 'password' => '12345678', 'balance' => 10.0],
            ['name' => 'User 2', 'email' => 'email2@gmail.com', 'password' => '12345678', 'balance' => 20.0],
            ['name' => 'User 3', 'email' => 'email3@gmail.com', 'password' => '12345678', 'balance' => 30.0],
            
        ];
    
        foreach ($user as $name) {
            User::create($name);
        }
    }
}
