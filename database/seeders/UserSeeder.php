<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
// use Carbon\Carbon;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash;

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
            ->count(10)
            ->hasScholarships(5)
            ->hasForums(5)
            ->hasComments(5)
            ->hasLikes(20)
            ->create();
    }
}
