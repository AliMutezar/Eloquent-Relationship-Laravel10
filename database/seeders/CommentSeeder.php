<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'post_id'   =>  '1',
                'comment'   =>  'Keren materi eloquent relationship-nya'
            ],
            [
                'post_id'   =>  '1',
                'comment'   =>  'Mudah dipahami dan di praktekan'
            ],
            [
                'post_id'   =>  '1',
                'comment'   =>  'Kalo bisa scope studi kasusnya di bikin lebih complex lagi'
            ],
            [
                'post_id'   =>  '2',
                'comment'   =>  'Semangat terus bikin blog post-nya'
            ],
            [
                'post_id'   =>  '2',
                'comment'   =>  'Bagi bagi ilmu biar jadi amal jariyah. aamiin'
            ],
        ];

        Comment::insert($comments);
    }
}
