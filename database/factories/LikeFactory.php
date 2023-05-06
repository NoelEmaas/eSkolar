<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Like;
use App\Models\Scholarship;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $likeable = $this->faker->randomElement([
            Scholarship::class,
            Forum::class
        ]);

        return [
            'user_id' => User::factory(),
            'likeable_type' => $likeable,
            'likeable_id' => $likeable::factory()
        ];
    }
}
