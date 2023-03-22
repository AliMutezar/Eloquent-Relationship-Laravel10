<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'  =>  'Sahira',
                'email' =>  'sahira@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name'  =>  'Ahmad Ali',
                'email' =>  'ali@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'  =>  'Diky',
                'email' =>  'diky@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'  =>  'Hendy',
                'email' =>  'hendy@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'  =>  'Nadia',
                'email' =>  'nadia@gmail.com',
                'email_verified_at' => now(),
                'password' => 'P@ssw0rd',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        User::insert($users);
    }
}
