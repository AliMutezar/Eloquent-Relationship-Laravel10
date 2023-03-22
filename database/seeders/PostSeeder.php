<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = [
            [
                'title'     => 'Judul Post 1',
                'content'   =>  'Ini content post 1'
            ],
            [
                'title'     => 'Judul Post 2',
                'content'   =>  'Ini content post 2'
            ],
        ];

        Post::insert($post);
    }
}
