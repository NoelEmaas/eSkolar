<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Scholarship;
use App\Models\Forum;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(20)
            ->create();

        Scholarship::factory()
            ->count(20)
            ->hasLikes(5)
            ->hasComments(5)
            ->create();

        Forum::factory()
            ->count(20)
            ->hasLikes(5)
            ->hasComments(5)
            ->create();
    }
}
