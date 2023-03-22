<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        // Ambil user dan role tertentu
        $user   = User::find(1);
        $role   = Role::whereIn('id', [1,2])->get();

        $anotherUser = User::find(5);
        $anotherRole   = Role::whereIn('id', [3,4])->get();

        // Menambahkan role ke user menggunakan metode attach()
        $user->roles()->attach($role);
        $anotherUser->roles()->attach($anotherRole);

        //  Menambahkan role ke beberapa user sekaligus menggunakan metode sync()
        $users  = User::whereIn('id', [2,3,4])->get();
        $role   = Role::whereIn('id', [3])->get();
        $users->each(function ($user) use ($role) {
            $user->roles()->syncWithoutDetaching($role);
        });
        
    }
}
