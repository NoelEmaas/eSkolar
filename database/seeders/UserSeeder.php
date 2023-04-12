<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'first_name' => 'Jiankarlo',
            'last_name' => 'Belarmino',
            'email' => "jibelarmino@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'id' => 2,
            'first_name' => 'Noel',
            'last_name' => 'Emaas',
            'email' => "nemaas@gbox.adnu.edu.ph",
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
