<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\ScholarshipComment;
use App\Models\ForumComment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Scholarships comments
        Comment::create([
            'id' => 1,
            'comment' => 'What documents are required for the application?'
        ]);

        Comment::create([
            'id' => 2,
            'comment' => 'Is this available for all courses?'
        ]);

        ScholarshipComment::create([
            'user_id' => 1,
            'scholarship_id' => 1,
            'comment_id' => 1
        ]);

        ScholarshipComment::create([
            'user_id' => 2,
            'scholarship_id' => 1,
            'comment_id' => 2
        ]);


        // Forum Comments
        Comment::create([
            'id' => 3,
            'comment' => 'Probably around April of this year.'
        ]);

        Comment::create([
            'id' => 4,
            'comment' => 'Visit https://unifast.gov.ph/tes.php for more information regarding TES.'
        ]);

        ForumComment::create([
            'user_id' => 2,
            'forum_id' => 1,
            'comment_id' => 3
        ]);

        ForumComment::create([
            'user_id' => 1,
            'forum_id' => 1,
            'comment_id' => 4
        ]);
    }
}
