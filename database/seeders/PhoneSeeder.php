<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phones = [
            [
                'user_id'    => 1,
                'phone'      => '+62 877-8855-9645',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 2,
                'phone'      => '+62 878-8386-4673',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 3,
                'phone'      => '+62 878-8803-3765',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 4,
                'phone'      => '+62 857-1440-6329',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id'    => 5,
                'phone'      => '+62 857-1409-2722',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Phone::insert($phones);
    }
}
