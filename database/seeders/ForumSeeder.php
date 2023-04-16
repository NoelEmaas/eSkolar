<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Forum;
use App\Models\UserForum;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::create([
            'id' => 1,
            'title' => 'When will be the possible month of Opening Application for TES?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis felis erat. Donec tortor erat, porta sed pretium vel, ultricies sit amet eros. Sed nec nisl id dolor placerat congue at et felis. Sed semper gravida lorem eget fringilla.',
        ]);

        UserForum::create([
            'user_id' => 1,
            'forum_id' => 1
        ]);
    }
}
