<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scholarship;
use App\Models\UserScholarship;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Scholarship::create([
            'id' => 1,
            'benefactor' => 'CHED',
            'program' => 'CHED Scholarship Program 2020-2021',
            'amount' => 'Php 80,000 - Php 120,000',
            'description' => 'For qualified and deserving students entering first year of Tertiary Education whose General Weighted Average (GWA) is at least 96% or its equivalent (For Full Merit Program) and 93%-95% or its equivalent for Half Merit Program.'
        ]);

        Scholarship::create([
            'id' => 2,
            'benefactor' => 'DOST',
            'program' => 'DOST Scholarship Program 2020-2021',
            'amount' => 'Php 60,000 - Php 100,000',
            'description' => 'For qualified and deserving students entering first year of Tertiary Education whose General Weighted Average (GWA) is at least 96% or its equivalent (For Full Merit Program) and 93%-95% or its equivalent for Half Merit Program.'
        ]);

        UserScholarship::create([
            'user_id' => 1,
            'scholarship_id' => 1
        ]);

        UserScholarship::create([
            'user_id' => 1,
            'scholarship_id' => 2
        ]);

        Scholarship::create([
            'id' => 3,
            'benefactor' => 'SM',
            'program' => 'SM Scholarship Program 2020-2021',
            'amount' => 'Php 40,000 - Php 80,000',
            'description' => 'For qualified and deserving students entering first year of Tertiary Education whose General Weighted Average (GWA) is at least 96% or its equivalent (For Full Merit Program) and 93%-95% or its equivalent for Half Merit Program.'
        ]);

        UserScholarship::create([
            'user_id' => 2,
            'scholarship_id' => 3
        ]);
    }
}
