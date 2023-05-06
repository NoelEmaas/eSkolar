<?php

namespace Database\Factories;

use App\Models\Scholarship;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class ScholarshipFactory extends Factory
{
    protected $model = Scholarship::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $min = $this->faker->randomFloat(6, 20000, 1000000);
        $max= $this->faker->randomFloat(6, 20000, 1000000);

        if ($min > $max) {
            $tmp = $min;
            $min = $max;
            $max = $tmp;
        }

        return [
            'benefactor' => $this->faker->name(),
            'program' => $this->faker->name()."'s scholarship program",
            'description' => $this->faker->text(500),
            'amount_min' => $min,
            'amount_max' => $max,
            'user_id' => User::factory()
        ];
    }
}
