<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScholarshipLikes;
use App\Models\ForumLikes;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Scholarship likes
        ScholarshipLikes::create([
            'user_id' => 1,
            'scholarship_id' => 1
        ]);

        ScholarshipLikes::create([
            'user_id' => 1,
            'scholarship_id' => 2
        ]);

        ScholarshipLikes::create([
            'user_id' => 1,
            'scholarship_id' => 3
        ]);

        ScholarshipLikes::create([
            'user_id' => 2,
            'scholarship_id' => 1
        ]);

        ScholarshipLikes::create([
            'user_id' => 2,
            'scholarship_id' => 3
        ]);

        // Forum Likes
        ForumLikes::create([
            'user_id' => 1,
            'forum_id' => 1
        ]);

        ForumLikes::create([
            'user_id' => 2,
            'forum_id' => 1
        ]);
    }
}
