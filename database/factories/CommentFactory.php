<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Scholarship;
use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $commentable = $this->faker->randomElement([
            Scholarship::class,
            Forum::class
        ]);

        return [
            'comment' => $this->faker->text(),
            'user_id' => User::factory(),
            'commentable_type' => $commentable,
            'commentable_id' => $commentable::factory()
        ];
    }
}
